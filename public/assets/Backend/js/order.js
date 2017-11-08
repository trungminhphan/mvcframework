function sanpham(){
  $("#id_product").change(function(){
    var _this = $(this);
    $.get('/get/attribute/list?id_product='+_this.val(), function(data){
      $("#id_attribute").html(data);
    });
  });
}

function add_sanpham(){
  $("#add_product").click(function(){
    $.get("/get/product/add?id_product="+$("#id_product").val()+"&id_attribute="+$("#id_attribute").val()+"&soluong="+$("#quantity").val(), function(data){
      $("#sanpham_list tbody").append(data);delete_sanpham();
    });
  });
}

function delete_sanpham(){
  $(".delete-item").click(function(){
    var _this = $(this);
    _this.parents(".items").remove();
  });
}

function add_tinhtrang(){
  $(".add_tinhtrang").click(function(){
    var _id = $(this).attr("name");
    var noidung = $("#noidung_"+_id).val();
    var id_tinhtrang = $("#id_tinhtrang_"+_id).val();
    var id_sanpham = $("#id_"+_id).val();
    var id = $("#id").val();
    var key =  $("#key_"+_id).val();
    $.get('/get/tinhtrang/add?id='+id+'&id_sanpham='+id_sanpham+'&key='+key+'&noidung='+noidung+"&id_tinhtrang="+id_tinhtrang, function(data){
        //$("#"+_id).append('<li><i class="ti-alarm-clock"></i> 1111111</li>');
        if(data == 'NO'){
          alert('Vui lòng thêm nội dung');
        } else {
          $("#"+_id).append(data);delete_tinhtrang();
        }
    });
  });
}

function delete_tinhtrang(){
  $(".delete_tinhtrang").click(function(){
    var _this = $(this); var _link = _this.attr("href");
    $.get(_link, function(data){
      if(data == 'OK'){
        _this.parents("li").remove();
      } else {
        alert('Không thể xóa.');
      }
    });
  })
}
