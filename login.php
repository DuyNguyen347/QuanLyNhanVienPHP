<html>
    <head>
        <style>

            form{
                /* background-color: #f2e1e8; */
                /* width: 30%; */
                padding-bottom: 40px;
            }
            .login{
                /* justify-content: center; */
                /* align-items: center; */
                text-align: center;
                /* padding: 5px; */
            }
            .center{
                justify-content: center;
                text-align: center;
                align-items: center;
                margin:  auto;
            }
            .title{
                width: 100px;
                margin: 2px;
            }
            .inputField{
               padding:  0;
            }
            table{
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body bgcolor="#f2e1e8" >
        
        <form action="" name="f1" method="post">
            <div class="login">
                <h3 >Login</h3>
            </div>
            <div class="center">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <h4 class="title">User name</h4>
                            </td>
                            <td>
                                <input type="text" name="username" class="inputField" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="title">Password</h4>
                            </td>
                            <td>
                                <input type="text" name="password" class="inputField" >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="center">
                <button type="submit">Ok</button>
                <button type="submit">Reset</button>
            </div>
        </form>
        <?php
        if($_POST){
            session_start();
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $link = mysqli_connect("localhost","root","") or die
            ("Khong the ket noi den CSDL MySQL");
            //Lựa chọn cơ sở dữ liệu
            mysqli_select_db($link,"DULIEU");
            $sql="Select * from admin where Username = '$username' and Password = '$password'";
            $result=mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result);
            if($row){
                $_SESSION['username'] = $row['idnv'];
                header('location:employeeUpdate.php');
            }
            else echo '<p>Ten dang nhap khong dung</p>';
        }
        ?>
    </body>
</html>