<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <form action="" name="f2" method="post">--
            <div class="form-group">
                <label for="idnv">Mã nhân viên</label>
                <input type="text" id="idnv" name="idnv" value="<?php echo $_GET['idnv'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="name">Tên nhân viên</label>
                <input type="text" id="name" name="name" placeholder="Nhập tên nhân viên...">
            </div>
            <div class="form-group">
                <label for="department">Phòng ban</label>
                <select id="department">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" id="address" name="address" placeholder="Nhập địa chỉ...">
            </div>
            <div class="center">
                <button type="submit">Cập nhật</button>
                <button >Reset</button>
            </div>
        </form>
        <?php
            if($_POST){
                echo "vo trong post";
                $name = $_REQUEST['name'];
                $diachi = $_REQUEST['address'];
                $idnv = $_REQUEST['idnv'];
                $link = mysqli_connect('localhost', 'root','');
                if (!$link)
                {
                die('Could not connect: '.mysqli_error());
                }
                mysqli_select_db($link,"DULIEU");
                $sql = "UPDATE nhanvien SET Hoten='$name', Diachi='$diachi' WHERE idnv='$idnv'";
                $result = mysqli_query( $link,$sql);
                //đổi password của admin
                if (!$result ) die("Không thể thực hiện được câu lệnh SQL:".mysqli_error($link));
                else {
                    echo "Số lượng row được thay đổi:".mysqli_affected_rows($link)."<br>\n";
                    header('location:employeeUpdate.php');
                }
            }
        ?>
    </body>
</html>