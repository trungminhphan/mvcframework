function sanpham(){
  $("#id_product").change(function(){
    $.get('/get/attribute/list', function(data){
      $("#id_attribute").html(data);
    });
  });
}
