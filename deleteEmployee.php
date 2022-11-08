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
        mysqli_select_db($link,"DULIEU");
        $sql="Select * from nhanvien";
        $result=mysqli_query($link,$sql);
        echo '<table border="1" width="100%">';
        echo "<TR><TH>Ma so nhan vien</TH><TH>Ten Nhan vien</TH><TH>Phong Ban</TH><TH>Dia chi</TH><TH>Xoa</TH></TR>";
        while ( $row = mysqli_fetch_array($result) ) {
            //echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['Diachi'].'</TD><TD><a href="update.php?idnv='.$row['IDNV'].'" target="t3">Xoa</a></TD></TR>';
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row["IDNV"]; ?></td>
                    <td><?php echo $row["Hoten"]; ?></td>
                    <td><?php echo $row["IDPB"]; ?></td>
                    <td><?php echo $row["Diachi"]; ?></td>
                    <td>
                        <form action="./handleDelete.php" method="post">
                            <button type="submit" name="delete" value="<?php echo $row["IDNV"]; ?>">Xoa</button>
                        </form>
                    </td> 
                </tr>
            </tbody>
            <?php
        }
        echo '</TABLE>';
        mysqli_free_result($result);
        mysqli_close($link);
    }
    ?>
    </div>
</body>
</html>