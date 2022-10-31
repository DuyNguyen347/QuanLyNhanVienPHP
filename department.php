<!DOCTYPE html>
<html>
<body>
    <div class="box">
    <?php
    //Khai báo kết nối
    $link = mysqli_connect("localhost","root","") or die
    ("Khong the ket noi den CSDL MySQL");
    //Lựa chọn cơ sở dữ liệu
    mysqli_select_db($link,"DULIEU");
    $sql="Select * from phongban";
    $result=mysqli_query($link,$sql);
    echo '<table border="1" width="100%">';
    echo "<TR><TH>Ma so</TH><TH>Ten Phong Ban</TH><TH>Mo ta</TH><TH>Xem DS nhan vien</TH></TR>";
    while ( $row = mysqli_fetch_array($result) ) {
        echo '<TR><TD>'.$row['IDPB'].'</TD><TD>'.$row['Tenpb'].'</TD><TD>'.$row['Mota'].'</TD><TD><a href="employeeDepartment.php?idpb='.$row['IDPB'].'" target="t3">Xem DS</a></TD></TR>';
    }
    echo '</TABLE>';
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
    </div>
</body>
</html>