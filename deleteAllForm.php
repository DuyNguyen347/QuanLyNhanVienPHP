<!DOCTYPE html>
<html>
<body>
    <div class="box">
    <?php
    session_start();
    if(!$_SESSION){
        include './login.php';
    }
    else {
        //Khai báo kết nối
        $link = mysqli_connect("localhost","root","") or die
        ("Khong the ket noi den CSDL MySQL");
        //Lựa chọn cơ sở dữ liệu
        mysqli_select_db($link,"dulieu");
    
    
        $sql="Select * from nhanvien";
        $result=mysqli_query($link,$sql);
    
        echo '<h1 style=text-align:center>Danh sách nhân viên</h1>';
        echo '<form name="form1" method="post" action="handleDeleteAll.php">';
        echo '<Table border="1" width="100%">';
        $i=0;
        echo '<TR>';
        echo '<TH>Ma so</TH>';
        echo'<TH>Ho ten</TH>';
        echo'<TH>ID Phong Ban</TH>';
        echo'<TH>Dia Chi</TH>';
        echo'<TH>Xóa</TH>';
        echo'</TR>';
        while ( $row = mysqli_fetch_array($result) ) {
            echo "<TR>";
            echo '<TD>'.$row['IDNV'].'</TD>';
            echo '<TD>'.$row['Hoten'].'</TD>';
            echo'<TD>'.$row['IDPB'].'</TD>';
            echo'<TD>'.$row['Diachi'].'</TD>';
            echo'<TD>';
            echo '<input type="checkbox" name="del[]" value='.$row['IDNV'].'>';
            echo"</TD>";
            echo'</TR>';
            $i++;
        }
        echo "</Table>";
        echo '<input type="submit" value="Xóa tất cả" name="Delete" />';
        echo'</form>';
    
        mysqli_free_result($result);
        mysqli_close($link);
    }     
    ?>
    </div>
</body>
</html>