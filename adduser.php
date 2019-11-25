<?php
include "cnctn.php";
session_start();

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
        <span style="font-size:20px;font-weight:bold;">* Add User<hr style="margin:10px; margin-bottom:30px;"></span>
    
       
        <form method="POST">      
              <p align="center" >Name <input type="text"  name="n" required value="" ></p>
              <p align="center" >USERNAME  : <input type="text"  name="un" required value="" > </p>

                      <p align="center" >PASSWORD <input type="password"  name="pwd" required value="" ></p>
                      <p align="center" >CONFIRM PASSWORD <input type="password"  name="pwd2" required value="" ></p>

                      <p align="center"><input type="submit" name="sub" value="Add">
                        <input type="reset" name="reset" value="RESET"></p>
                                </table>    
        </form>
              <?php
              $count=0;

if(isset($_POST["sub"]))
    {
        $nu=$_POST["n"];
        $a=$_POST["un"];
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
            // checks if the username is in use
if (!get_magic_quotes_gpc()) {
    $_POST['un'] = addslashes($_POST['un']);
    }
    $usercheck = $_POST['un'];
    $check = mysql_query("SELECT uname FROM login WHERE uname = '$usercheck'")
    or die(mysql_error());
    $check2 = mysql_num_rows($check);
    //if the name exists it gives an error
    if ($check2 != 0) {
    die('Sorry, the username '.$_POST['un'].' is already in use.');
    }



else{
     
//mysql_query("update login set pwd='$b1' where uname='$a'");
//add into user table--->
$r=mysql_query("insert into login(uname,pwd,utype)values('$a','$b','user')");
mysql_query("insert into user(uname,pwd,name)values('$a','$b','$nu')");
if($r)
echo "<script>alert('User is added')</script>";
 
 
 }
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