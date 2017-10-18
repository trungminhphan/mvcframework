<?php

namespace App\Controllers;
use App\Config;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class ImagesController extends \Core\Controller {
    /**
     * Show the index page
     *
     * @return void
     */
    public function uploadsAction(){
        if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
            if(isset($_FILES['dinhkem']['name']) && $_FILES['dinhkem']['name']){
                foreach ($_FILES['dinhkem']['name'] as $f => $name) {
                    if ($_FILES['dinhkem']['error'][$f] == 4) {
                        echo 'Failed';
                        continue; // Skip file if any error found
                    }

                    if($_FILES['dinhkem']['error'][$f] == 0) {
                        if ($_FILES['dinhkem']['size'][$f] > Config::MAX_FILE_SIZE) {
                            echo 'Failed';
                            continue; // Skip large files
                        } elseif(!in_array(strtolower(pathinfo($name, PATHINFO_EXTENSION)), Config::IMAGES_EXT) ){
                            echo 'Failed';
                            continue; // Skip invalid file formats
                        } else{ // No error found! Move uploaded files
                            $extension = pathinfo($name, PATHINFO_EXTENSION);
                            $alias = md5($name);
                            $alias_name = $alias . '_'. date("Ymdhms") . '.' . $extension;
                            if(move_uploaded_file($_FILES["dinhkem"]["tmp_name"][$f], $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.$alias_name)){
                                $file = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.$alias_name;
                                $thumb = $_SERVER['DOCUMENT_ROOT'].Config::IMAGES_DIR.'thumb_300x200/'.$alias_name;
                                if(!file_exists($thumb)){
                                    ImagesController::resizeAction($file, null, 300, 250, true, $thumb, false, false, 100);
                                }
                               /* echo ' <div class="col-md-3 items" style="margin-top:20px;">
                                    <img src="'.$thumb.'" style="width:100%"/>
                                    <a href="get.xoahinhanh.html?filename='.$alias_name.'" class="btn btn-sm btn-danger delete_file" onclick="return false;"><i class="fa fa-trash"></i></a>
                                </div>';*/
                                echo '<div class="col-lg-3 col-md-6 items">
                                    <input type="hidden" name="hinhanh_aliasname[]" value="'.$alias_name.'" readonly/>
                                    <input type="hidden" name="hinhanh_filename[]" value="'.$name.'" class="form-control"/>
                                    <div class="card">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1"> <img src="'.Config::IMAGES_DIR.'thumb_300x200/'.$alias_name.'" alt="user" />
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                        <li><a class="btn default btn-outline image-popup-vertical-fit" href="'.Config::IMAGES_DIR.$alias_name.'"><i class="mdi mdi-camera"></i></a></li>
                                                        <li><a class="btn default btn-outline delete_file" href="image/delete?file='.$alias_name.'" onclick="return false;"><i class="ti ti-trash"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="el-card-content">
                                                <h3 class="box-title">'.$name.'e</h3><br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            } else {
                                echo 'Failed';
                            }
                        }
                    }
                }
            } else {
                echo 'Failed';
            }
        }
    }

    public function deleteAction(){
        $file = isset($_GET['file']) ? $_GET['file'] : '';
        $filename = $_SERVER['DOCUMENT_ROOT']. Config::IMAGES_DIR . $file;
        $filename_thumb = $_SERVER['DOCUMENT_ROOT']. Config::IMAGES_DIR .'/thumb_300x200' . $file;
        @unlink($filename);@unlink($filename_thumb);
    }

    public static function resizeAction($file, $string = null,$width = 0,$height = 0,$proportional = false, $output = 'file', $delete_original = true, $use_linux_commands = false, $quality = 100, $grayscale = false){
        if ( $height <= 0 && $width <= 0 ) return false;
        if ( $file === null && $string === null ) return false;

        # Setting defaults and meta
        $info                         = $file !== null ? getimagesize($file) : getimagesizefromstring($string);
        $image                        = '';
        $final_width                  = 0;
        $final_height                 = 0;
        list($width_old, $height_old) = $info;
        $cropHeight = $cropWidth = 0;

        # Calculating proportionality
        if ($proportional) {
            if ($width  == 0)  $factor = $height/$height_old;
            elseif ($height == 0)  $factor = $width/$width_old;
            else                    $factor = min( $width / $width_old, $height / $height_old );
                $final_width  = round( $width_old * $factor );
                $final_height = round( $height_old * $factor );
        } else {
            $final_width = ( $width <= 0 ) ? $width_old : $width;
            $final_height = ( $height <= 0 ) ? $height_old : $height;
            $widthX = $width_old / $width;
            $heightX = $height_old / $height;

            $x = min($widthX, $heightX);
            $cropWidth = ($width_old - $width * $x) / 2;
            $cropHeight = ($height_old - $height * $x) / 2;
        }

        # Loading image to memory according to type
        switch ( $info[2] ) {
            case IMAGETYPE_JPEG:  $file !== null ? $image = imagecreatefromjpeg($file) : $image = imagecreatefromstring($string);  break;
            case IMAGETYPE_GIF:   $file !== null ? $image = imagecreatefromgif($file)  : $image = imagecreatefromstring($string);  break;
            case IMAGETYPE_PNG:   $file !== null ? $image = imagecreatefrompng($file)  : $image = imagecreatefromstring($string);  break;
            default: return false;
        }

        # Making the image grayscale, if needed
        if ($grayscale) {
            imagefilter($image, IMG_FILTER_GRAYSCALE);
        }

        # This is the resizing/resampling/transparency-preserving magic
        $image_resized = imagecreatetruecolor( $final_width, $final_height );
        if ( ($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG) ) {
            $transparency = imagecolortransparent($image);
            $palletsize = imagecolorstotal($image);

            if ($transparency >= 0 && $transparency < $palletsize) {
                $transparent_color  = imagecolorsforindex($image, $transparency);
                $transparency       = imagecolorallocate($image_resized, $transparent_color['red'], $transparent_color['green'], $transparent_color['blue']);
                imagefill($image_resized, 0, 0, $transparency);
                imagecolortransparent($image_resized, $transparency);
            } elseif ($info[2] == IMAGETYPE_PNG) {
                imagealphablending($image_resized, false);
                $color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);
                imagefill($image_resized, 0, 0, $color);
                imagesavealpha($image_resized, true);
            }
        }
        imagecopyresampled($image_resized, $image, 0, 0, $cropWidth, $cropHeight, $final_width, $final_height, $width_old - 2 * $cropWidth, $height_old - 2 * $cropHeight);

        # Taking care of original, if needed
        if ( $delete_original ) {
            if ( $use_linux_commands ) exec('rm '.$file);
            else @unlink($file);
        }

        # Preparing a method of providing result
        switch ( strtolower($output) ) {
            case 'browser':
                $mime = image_type_to_mime_type($info[2]);
                header("Content-type: $mime");
                $output = NULL;
                break;
            case 'file':
                $output = $file;
                break;
            case 'return':
                return $image_resized;
                break;
            default:
                break;
        }

        # Writing image according to type to the output destination and image quality
        switch ( $info[2] ) {
            case IMAGETYPE_GIF:   imagegif($image_resized, $output);    break;
            case IMAGETYPE_JPEG:  imagejpeg($image_resized, $output, $quality);   break;
            case IMAGETYPE_PNG:
                $quality = 9 - (int)((0.9*$quality)/10.0);
                imagepng($image_resized, $output, $quality);
                break;
            default: return false;
        }

        return true;
    }
}

