function add_icon(){
  $(".image-icon").change(function(){
    var reader = new FileReader();
    var _this = $(this);
    reader.onload = function (e) {
      //_this.parent('.file').prev('.img_icon img').attr('src', e.target.result).width(40).height(40);
      _this.parent('.file').prev('.img_icon').html('<img src="'+e.target.result+'" width="40" height="40"/><a href="#" onclick="return false;" class="delete_icon"><i class="fa fa-trash"></i></a>');
      delete_icon();
      //.attr('src', e.target.result).width(40).height(40);
    };
     reader.readAsDataURL(_this[0].files[0]);
  });
}

function delete_icon(){
  $(".delete_icon").click(function(){
    var _this = $(this);
    _this.parent(".img_icon").html('<img src="/assets/Backend/images/logo-icon.png" style="width:40px;height:40px;" class="icon"/>');
  });
}

function get_attribute(){
  $(".add-attribute").click(function(){
      $.get('/get/attributes', function(data){
          $("#attributes_list").append(data);
          delete_attribute();
          $(".select2").select2();add_icon();delete_icon();
      });
  });
}

function delete_attribute(){
  $(".delete-attribute").click(function(){
      var _this = $(this);
      _this.parents(".items").fadeOut();
  });
}
