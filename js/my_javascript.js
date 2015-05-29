/**
 * Created by tranbaohuu on 5/22/2015.
 */





$(document).ready(function () {





    //phần confirm khi delete

    //
    //$("#xoa").confirm({
    //    text: "Bạn có chắc muốn xóa chứ ?",
    //    title: "Thông báo",
    //    confirm: function(button) {
    //        //delete();
    //    },
    //    cancel: function(button) {
    //        // nothing to do
    //    },
    //    confirmButton: "Có",
    //    cancelButton: "Không",
    //    post: true,
    //    confirmButtonClass: "btn-danger",
    //    cancelButtonClass: "btn-default",
    //    dialogClass: "modal-dialog modal-lg" // Bootstrap classes for large modal
    //});
    //


    $(".btn-edit").click(function () {
         var id  = $(this).val();


        var tenHang = $("#cotTenHang-" + id).text();
        var soLuong = $("#cotSoLuong-" + id).text();
        var giaTien = $("#cotGiaTien-" + id).text();
        var moTa = $("#cotMota-" + id).text();


        $("#tbTenSanPham").val(tenHang);
        $("#tbSoLuong").val(soLuong);
        $("#tbGiaTien").val(giaTien);
        $("#tbMota").val(moTa);
        $("#tbID").val(id);


    });


});


//function deleteAction(table, condition, id) {
//    $.ajax({
//            type: "GET",
//            url: "<?php echo site_url(); ?>" + "index.php/huu_adminpage/deleteProduct/" + table + "/" + condition + "/" + id,
////                    dataType: 'json',
////                    data: {id: id},
//            success: function () {
//                $("#row-" + id).remove();
//
//            }
//        }
//    )
//}
