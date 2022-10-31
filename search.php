<html>
    <head>
        <style>
            form{
                background-color: #d5c4ff;
                /* width: 30%; */
                padding-bottom: 40px;
            }
            .login{
                /* justify-content: center; */
                /* align-items: center; */
                text-align: center;
                padding: 5px;
                color: black;
            }
            .center{
                justify-content: center;
                text-align: center;
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
            .checkboxField{
                display: flex;
                transform: translate(-10px,0);
            }
            button{
                padding-right: 10px;
            }
        </style>
    </head>
    <body bgcolor="#d5c4ff">
        <form action="./employeeSearch.php" name="f1" method="post">
            <div class="login">
                <h1 >Tìm kiếm nhân viên</h1>
            </div>
            <div class="center checkboxField">
                <h4>Tim kiem theo: </h4>
                <input type="radio" name="r1" id="1" value="IDNV">ID Nhân viên
                <input type="radio" name="r1" id="2" value="Hoten">Họ và tên<br>
                <input type="radio" name="r1" id="3" value="Diachi">Địa chỉ<br>
            </div>
            <div class="center">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <h4 class="title">Nhập nội dung:</h4>
                            </td>
                            <td>
                                <input type="text" name="name" class="inputField">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="center checkboxField">
                <button type="submit">Tìm kiếm</button>
                <button type="submit">Reset</button>
            </div>
        </form>
    </body>
</html>