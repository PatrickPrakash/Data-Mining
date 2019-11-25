<?php
include "cnctn.php";
session_start();
$a=$_GET["n"];

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
            padding:40px;
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

    </style>

    <link href="css/style.css" rel="stylesheet">


</head>
<!-- <script type="text/javascript">
//document.getElementById("user").onchange = function() {myFunction()};

function myFunction() {
 var x = document.getElementById("passwd");
  x.disabled = true;
// document.getElementById("passwd").disabled = true;
}
</script>  -->

<body>


    <div class="topbar">
        <div class="topbarelement"><img src="mecsym.jpg" width="20px" align="middle"> Govt. Model Engineering College</div>
        <div class="topbarelement" style="text-align:right;"> 0484-2577379 <a href="logout.php" style="color:white;margin-left:15px;">Logout</a></div>
    </div>

    <div style="background-color:white;padding:30px;">
        <h1 style="text-align:center;color:#777;">Register Of Registers</h1>
        <p class="welcome-text"><b>Hi admin.....</b></p>

    </div>

    </div>
    <!-- /. header-section-->
    <form method="POST">

    <div class="main">
    <span style="font-size:20px;font-weight:bold;">Change Incharge for Register<hr style="margin:10px; margin-bottom:30px;"></span>
    <table align="center">
                
                <tr>
                    <th>User Name<br><br></th>
                    <td><input type="text" id="user" name="n4" value="" required><br><br></td>
                </tr>
                <!-- <tr>
                    <th>Password<br><br></th>
                    <td><input type="text" id="pwd" name="n3" value="<?php //echo $d?>"><br><br></td>
                </tr> -->
                <tr>
                    <th>Register Name<br><br></th>
                    <td><?php echo $a?><br><br></td>
                </tr>
                <tr><td></td>
                        <th><input type="submit" name="n10" value="UPDATE"  ></th></tr>
        
                                </table> 
      
    </div>
    </form>
    <div style="background-color: #333;
    color: #888f8f;position:fixed;bottom:0;left:0;right:0;text-align:center;font-size:15px;padding:12px;">
            <p>Copyright &copy; 2019 - Register of Registers<br>All Rights Reserved.</p>
        </div>
</body>

</html>
<?php
$count=0;
$i=0;
if(isset($_POST["n10"]))
    {
    $e=$_POST["n4"]; 
   
    $sql2 = mysql_query("select name from user where uname = $e");
//         $ch2 = mysql_num_rows($sql2);
// echo $ch2;
        while ($ar2 = mysql_fetch_array($sql2)) {   
            $d3=$ar2["name"];
 mysql_query("update regincharge set incharger='$d3',uname='$e' where regname='$a'");
 echo "<script>alert('Register inchanrger changed');</script>";
        }
        }
    //}
        
?>