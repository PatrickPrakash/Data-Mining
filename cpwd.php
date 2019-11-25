<?php
include "cnctn.php";
session_start();
$a = $_SESSION["uname"];

?>


<html>

<head meta charset="utf-8">
    <title>Change Password</title>

    <style>
        body {
            margin: 0;
            background-color: #999;
        }

        .topbar {
            background-color: #666;
            font-size: 15px;
            padding: 8px;
            overflow: hidden;
            color:#eee;
        }

        .topbarelement {
            width: 50%;
            float: left;
        }
        .main{
            background-color:white;
            margin:0 10%;
            margin-top:30px;
            border-radius:20px;
            padding:40px;
        }
        table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
  padding: 15px;}
         /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

html, body  {
    margin: 0px;
    padding: 0px;
    height: 100%;
    color: #6f643a;
    font-family: Arial;
    font-size: 11pt; 
}

form {
   height: 100%;
}    

    </style>

    <link href="css/style.css" rel="stylesheet">


</head>

<body>


    <div class="topbar">
        <div class="topbarelement"><img src="mecsym.jpg" width="20px" align="middle"> Govt. Model Engineering College</div>
        <div class="topbarelement" style="text-align:right;"> 0484-2577379 <a href="logout.php" style="color:white;margin-left:15px;">Logout</a></div>
    </div>

    <div style="background-color:white;padding:30px;">
        <h1 style="text-align:center;color:#777;">Register Of Registers</h1>
        <p class="welcome-text"><b>Hi Admin.....</b></p>

    </div>

    </div>
    <!-- /. header-section-->
    <form method="POST">

    <div class="main">
        <span style="font-size:20px;font-weight:bold;">* Change Password<hr style="margin:10px; margin-bottom:30px;"></span>
    
       
        <form method="POST">      
                      <p align="center" >PASSWORD <input type="password"  name="pwd" required value="" ></p>
                      <p align="center" >CONFIRM PASSWORD <input type="password"  name="pwd2" required value="" ></p>

                      <p align="center"><input type="submit" name="sub" value="Update">
                        <input type="reset" name="reset" value="RESET"></p>
                                </table>    
        </form>
              <?php
              $count=0;
    $sql1 = mysql_query("select uname from login");

if(isset($_POST["sub"]))
    {
    $b=$_POST["pwd"];    
    $b1=$_POST["pwd2"];
    


    $uppercase = preg_match('@[A-Z]@', $b);
    $lowercase = preg_match('@[a-z]@', $b);
    $number    = preg_match('@[0-9]@', $b);
    
    if(!$uppercase || !$lowercase || !$number || strlen($b) < 6) {
        echo "<script>alert(' Password must be at least 6 characters and must include at least one upper case letter, one lower case letter, and one numeric digit. ')</script>"; 
        
    }

    
   else if ($b!=$b1)
    {
            echo "<script>alert('Passwords are mismatch')</script>";
    
    }
    
 else {
    
      
mysql_query("update login set pwd='$b1' where uname='$a'");
mysql_query("update user set pwd='$b1' where uname='$a'");

echo "<script>alert('Password is updated')</script>";
 
 
}
    }
?>
            
            </table>  

</div>
    </form>

    <div style="background-color: #333;
    color: #888f8f;position:fixed;bottom:0;left:0;right:0;text-align:center;font-size:15px;padding:12px;">
            <p>Copyright &copy; 2019 - Register of Registers<br>All Rights Reserved.</p>
        </div>
</body>

</html>