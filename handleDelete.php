<?php
        if(isset($_POST['delete'])){
            $idnv = $_REQUEST['delete'];
            $link = mysqli_connect("localhost","root","") or die
            ("Khong the ket noi den CSDL MySQL");
            //Lựa chọn cơ sở dữ liệu
            mysqli_select_db($link,"DULIEU");
            $sql="Delete from nhanvien where idnv = '$idnv' ";
            $result=mysqli_query($link,$sql);
            // $row = mysqli_fetch_array($result);
            // if($row){
            //     header('location:employeeUpdate.php');
            // }
            // else echo '<p>Ten dang nhap khong dung</p>';
            header('location:deleteEmployee.php');
        }
        ?>