function add_icon(){
  $(".image-icon").change(function(){
    var reader = new FileReader();
    var _this = $(this);
    reader.onload = function (e) {
      //_this.parent('.file').prev('.img_icon img').attr('src', e.target.result).width(40).height(40);
      _this.parent('.file').prev('.img_icon').html('<img src="'+e.target.result+'" width="40" height="40"/>');
      //.attr('src', e.target.result).width(40).height(40);
    };
     reader.readAsDataURL(_this[0].files[0]);
  });
}
