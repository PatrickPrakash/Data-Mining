<?php
include "cnctn.php";
session_start();
$gh = $_SESSION["uname"];
//echo $gh;
$sql = mysql_query("select name from user where uname='$gh'");

while ($ar = mysql_fetch_array($sql)) {
    // echo $a;
    $a = $ar["name"];
    // echo "<script>alert('$a')</script>";
}
?>
<html>

<head meta charset="utf-8">
    <title>ShowTable</title>

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

    </div>
    <?php
        $ar1 = mysql_query("select regname from regincharge where incharger='$a' order by regname");
            while ($ara =  mysql_fetch_array($ar1)) {
                $a1 = $ara["regname"];
                $ar2 = mysql_query("select id from newtb where regname='$a1'");
                while ($ara2 =  mysql_fetch_array($ar2)) {
                $n = $ara2["id"];

                ?>
                <li>
                                <a href="sh_tb.php?n=<?php echo $n; ?>"><?php echo $a1;?></a>
                             </li>

            <?php    }


            }?>
    </div>
    <!-- /. header-section-->
    <!-- <form method="POST" action="add_data.php?n=<?php echo $re; ?>"> -->
    <form method="POST">

    </form>

<div style="background-color: #333;
color: #888f8f;position:fixed;bottom:0;left:0;right:0;text-align:center;font-size:15px;padding:12px;">
        <p>Copyright &copy; 2019 - Register of Registers<br>All Rights Reserved.</p>
    </div>
</body>

</html>