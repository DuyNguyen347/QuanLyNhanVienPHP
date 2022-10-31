<?php
if(isset($_POST['Delete'])){
    $AllId = $_REQUEST['del'];
    $list = implode(',', $AllId);
    $link = mysqli_connect("localhost","root","") or die
            ("Khong the ket noi den CSDL MySQL");
            //Lựa chọn cơ sở dữ liệu
            mysqli_select_db($link,"DULIEU");
            $query_run=mysqli_query($link,"delete from nhanvien where IDNV in ($list)");
            mysqli_close($link);
            header('location:deleteAllForm.php');
}
?>