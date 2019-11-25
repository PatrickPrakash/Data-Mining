<?php
include "cnctn.php";
session_start();
?>


<html>

<head meta charset="utf-8">
    <title>Login Page</title>

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
            padding:20px;
        }
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

/* body { overflow-x: scroll; } */

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

    <form>

    <div class="main">
    <span style="font-size:20px;font-weight:bold;"><a href="users.php">* Users</a></span><br>
        <span style="font-size:20px;font-weight:bold;">* Registers<hr style="margin:10px; margin-bottom:30px;"></span>    


<?php
        
                $ar2 = mysql_query("select * from newtb");
                while ($ara2 =  mysql_fetch_array($ar2)) {
                $n = $ara2["id"];
                $a1 = $ara2["regname"];
                ?>
                <li>
                                <a href="sh_tb.php?n=<?php echo $n; ?>"><?php echo $a1;?></a>
                             </li>

            <?php    }


            ?>
<hr>
<span style="font-size:20px;font-weight:bold;"><a href="addreg.php">* Add Register</a></span><br>
<span style="font-size:20px;font-weight:bold;"><a href="adduser.php">* Add User</a></span><br>
<span style="font-size:20px;font-weight:bold;"><a href="addincharge.php">* Add Incharger</a></span><br>


</div>
    </form>

    <div style="background-color: #333;
    color: #888f8f;position:fixed;bottom:0;left:0;right:0;text-align:center;font-size:15px;padding:12px;">
            <p>Copyright &copy; 2019 - Register of Registers<br>All Rights Reserved.</p>
        </div>
        </body>

</html>