function upload_hinhanh(){
	$(".dinhkem").change(function() {
        var formData = new FormData($("#themsanphamform")[0]);
        $.ajax({
            url: "/image/uploads", type: "POST",
            data: formData, async: false,
            success: function(datas) {
                if(datas=='Failed'){
                    alert('Lỗi không thể Upload hình ảnh.');
                } else {
                    $("#list_hinhanh").prepend(datas);
                    popup_images(); delete_hinhanh();
                }
            },
            cache: false, contentType: false, processData: false
        }).fail(function() {
            alert('Lỗi không thể Upload hình ảnh.');
        });
    });
}
function delete_hinhanh(){
	var link_delete; var _this;
	$(".delete_file").click(function(){
		link_delete = $(this).attr("href");	_this = $(this);
		$.ajax({
            url: link_delete,
            type: "GET",
            success: function(datas) {
            	_this.parents("div.items").fadeOut("slow", function(){
            		$(this).remove();
            	});
          	}
	    }).fail(function() {
	        alert('Không thể xoá.');
	    });
	});
}

function popup_images(){
    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
    });
}
