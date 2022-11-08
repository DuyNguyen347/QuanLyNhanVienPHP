<!DOCTYPE html>
<html>
<body>
    <div class="box">
    <?php
    session_start();
    if(!$_SESSION){
        include './login.php';
    }
    else 
    {
        //Khai báo kết nối
        $link = mysqli_connect("localhost","root","") or die
        ("Khong the ket noi den CSDL MySQL");
        //Lựa chọn cơ sở dữ liệu
        mysqli_select_db($link,"DULIEU");
        $sql="Select * from nhanvien";
        $result=mysqli_query($link,$sql);
        echo '<table border="1" width="100%">';
        echo "<TR><TH>Ma so nhan vien</TH><TH>Ten Nhan vien</TH><TH>Phong Ban</TH><TH>Dia chi</TH><TH>Cap nhat</TH></TR>";
        while ( $row = mysqli_fetch_array($result) ) {
            echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['Diachi'].'</TD><TD><a href="update.php?idnv='.$row['IDNV'].'" target="t3">Cap nhat</a></TD></TR>';
        }
        echo '</TABLE>';
        mysqli_free_result($result);
        mysqli_close($link);
    }
    ?>
    </div>
</body>
</html>