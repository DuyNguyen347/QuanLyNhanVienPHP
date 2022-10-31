<!DOCTYPE html>
<html>
<body>
    <div class="box">
    <?php
    //Khai báo kết nối
    $name = $_REQUEST['name'];
    $tt = $_REQUEST['r1'];
    echo $tt;
    $link = mysqli_connect("localhost","root","") or die
    ("Khong the ket noi den CSDL MySQL");
    //Lựa chọn cơ sở dữ liệu
    mysqli_select_db($link,"DULIEU");
    //$sql="Select * from nhanvien where ".$tt." = '".$name."'";
    $sql= "Select * from nhanvien where $tt like '%$name%'";
    $result=mysqli_query($link,$sql);
    echo '<table border="1" width="100%">';
    echo "<TR><TH>Ma so</TH><TH>Ho ten</TH><TH>ID Phong Ban</TH><TH>Dia Chi</TH></TR>";
    while ( $row = mysqli_fetch_array($result) ) {
        echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['Diachi'].'</TD></TR>';
    }
    echo '</TABLE>';
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
    </div>
</body>
</html>