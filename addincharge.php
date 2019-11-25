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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <div class="main">
    <span style="font-size:20px;font-weight:bold;">Add Incharge for Register<hr style="margin:10px; margin-bottom:30px;"></span>
    <table align="center">
                <!-- <tr><th>Register Name<br><br></th>
                    <td><input type="text" name="n1" value="" required><br><br></td>
                </tr> -->
                
                <tr><th>Register Name<br><br></th>
                    <td><select name="to_user" class="form-control" required >
                            <option value="Choose Register"></option><br><br>
                        <?php

                        $sql = mysql_query("SELECT regname From newtb where regname not in(select regname from regincharge)");
                        $row = mysql_num_rows($sql);
                        while ($row = mysql_fetch_array($sql))
                                    {
                                echo "<option value='". $row['regname'] ."'>" .$row['regname'] ."</option>" ;
                            }
                           

                        ?>

                        </select></td>
                </tr>
                
                <tr>
                    <th>Name <br><br></th>
                    <td><input type="text" name="n3" value="" required><br><br></td>
                </tr>
                
                <tr>
                    <th>User Name<br><br></th>
                    <td><input type="text" name="n4" value="" required><br><br></td>
                </tr>
                <tr><td></td>
                        <th><input type="submit" name="add1" value="Add"></th></tr>
        
                                </table> 

    </div>
    </form>
    <?php
$count=0;
if(isset($_POST["add1"]))
    {
        // $firstname=isset($_POST['firstname'])?$_post['firstname']:"";

    $c=isset($_POST["to_user"])?$_post['to_user']:"";  
    $v=$_POST["n3"];  

    $e=$_POST["n4"]; 
   
    echo "<script>alert($c );</script>";

//     $sql2 = mysql_query("select name from user where uname =$e");
//         while ($ar2 = mysql_fetch_array($sql2)) {
//            $d3=$ar2["name"];
//            $ch2 = mysql_num_rows($sql2);

//     if($d3==$v)
//         $count++;

// }

       
            //  if($ch2==0)
            //  {           echo "<script>alert();</script>";

            // // echo "<script>alert('Incorrect UserName');</script>";
            //  }elseif($count==0)
            // echo "<script>alert('UserName and Incharger name are mismatched');</script>";
            // else
            // mysql_query("insert into regincharge(regname,incharger,uname)values('$c','$v','$e')");

    
}
?>
    <div style="background-color: #333;
    color: #888f8f;position:fixed;bottom:0;left:0;right:0;text-align:center;font-size:15px;padding:12px;">
            <p>Copyright &copy; 2019 - Register of Registers<br>All Rights Reserved.</p>
        </div>
</body>


</html>
