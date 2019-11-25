<?php
include "cnctn.php";
session_start();
?>
<?php
if (isset($_POST["sub"])) {
    $a = $_POST["uname"];
    $b = $_POST["pwd"];
    $sql1 =  mysql_query("select * from login where uname='$a' and pwd='$b'");
    $ar =  mysql_fetch_array($sql1);

    if ($ar['uname'] != $a | $ar['pwd'] != $b) {
        echo "<script>alert('Incorrect UserName or PassWord');</script>";
    }

    
    else {

        if ($ar) {
            $_SESSION['id'] = $ar['id'];
            $_SESSION['uname'] = $ar['uname'];
            $_SESSION['pwd'] = $ar['pwd'];
            if ($ar['utype'] == 'admin') {
                header("location:admin.php");
            } else {
                header("location:uhomepage.php");
            }
        }
    }
}
?>
<html>

<head meta charset="utf-8">
    <title>Login Page</title>

    <style>
        body {
            margin: 0;
            background-color: #999;
        }

        .inputfield {
            border: 1px solid #aaa;
            padding: 10px 25px;
            border-radius: 20px;
            background-color: #ddd;
        }

        .button {
            background-color: #666;
            color: #fff;
            border: 0;
            padding: 10px 15px;
            margin: 10px;
            border-radius: 5px;
            font-size: 80%;
        }

        .topbar {
            background-color: #777;
            color: #ddd;
            font-size: 15px;
            padding: 8px;
            overflow: hidden;
        }

        .topbarelement {
            width: 50%;
            float: left;
        }

        .main {
            background-color: white;
            margin: 30px 10%;
            border-radius: 20px;
            padding: 30px;
        }
    </style>
    <link href="css/style.css" rel="stylesheet">


</head>
<!-- background-image:url(mecpic1.jpeg); -->

<body>
    <div class="topbar">
        <div class="topbarelement"><img src="mecsym.jpg" width="20px" align="middle"> Govt. Model Engineering College</div>
        <div class="topbarelement" style="text-align:right;"> 0484-2577379</div>
    </div>

    <div style="background-color:white;padding:20px;">
        <h1 style="text-align:center;color:#777;">Register Of Registers</h1>
    </div>
    <div class="main">
        <div style="align:center">
            <h2 style='color:#777;font-family: verdana;  margin-bottom: 60px;text-align:center'>Please Login in your account.</h2>
            <form method="POST" style="align:center">
                <!--fieldset-->
                <p align="center"><input type="text" class="inputfield" name="uname" required value="" placeholder="Username" onBlur="if(this.value==)this.value='username'" onFocus="if(this.value=='Username')this.value="></p>
                <p align="center"><input type="password" class="inputfield" name="pwd" required value="" placeholder="Password" onBlur="if(this.value==)this.value='pwd'" onFocus="if(this.value=='pwd')this.value="></p>
                <p align="center" style="margin-top:40px;"><input type="submit" class="button" name="sub" value="LOGIN">
                    <input type="reset" name="reset" value="RESET" class="button"></p>
                <!--center> <p><a  style='color:#fff; font-family: PT Serif; text-shadow:4px 4px 8px white; font-style: italic;  margin-bottom: 40px;text-align:center' href="fpwd.php"><u>Forgotten Password</u></a></p></center-->
                </!--fieldset-->

            </form>
        </div>
    </div>
    <!-- footer -->


    <div style="background-color: #333;position:fixed;
    color: #888f8f;bottom:0;left:0;right:0;text-align:center;font-size:15px;padding:20px;">
        <p>Copyright &copy; 2019 - Register Of Registers<br>All Rights Reserved.</p>
    </div>
</body>

</html>