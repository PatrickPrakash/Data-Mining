<?php
include "cnctn.php";
session_start();
$gh = $_SESSION["uname"];
$a=$_GET["n"];
$ar=mysql_query("select utype from login where uname='$gh'");
while($ara=  mysql_fetch_array($ar))
{
    $a1=$ara['utype'];
}
$i=1;

$ar1=mysql_query("select * from newtb where id='$a' ");
     while($ara2=  mysql_fetch_array($ar1))
        {
         $re=$ara2["regname"];
         $nf=$ara2["nofields"];
         $f1=$ara2["field1"];
         $f2=$ara2["field2"];
         $f3=$ara2["field3"];
         $f4=$ara2["field4"];
         $f5=$ara2["field5"];
         $f6=$ara2["field6"];
         $f7=$ara2["field7"];
         $f8=$ara2["field8"];
         $f9=$ara2["field9"];
         $f10=$ara2["field10"];
         $f11=$ara2["field11"];
         $f12=$ara2["field12"];
         $f13=$ara2["field13"];
         $f14=$ara2["field14"];
         $f15=$ara2["field15"];
         $f16=$ara2["field16"];
         $f17=$ara2["field17"];
         $f18=$ara2["field18"];
         $f19=$ara2["field19"];
         $f20=$ara2["field20"];
         $f21=$ara2["field21"];


        }
$arra=array($re,$nf,$f1,$f2,$f3,$f4,$f5,$f6,$f7,$f8,$f9,$f10,$f11,$f12,$f13,$f14,$f15,$f16,$f17,$f18,$f19,$f20,$f21);


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

    </div>
    <!-- /. header-section-->
    <!-- <form method="POST" action="add_data.php?n=<?php echo $re; ?>"> -->
    <form method="POST">
    <div class="main">
    <span style="font-size:20px;font-weight:bold;"><?php echo$arra[0];?><hr style="margin:10px; margin-bottom:30px;"></span>
    <table align="center" border="1">
                <tr>
                    



                <?php
                    $i=2;
                    $j=$arra[1]+1;
                    while($i<=$j){
                    ?>
                    <th><?php echo $arra[$i];?></th>
                   <?php 
                    $i++;
                    }
?>
                
                </tr>
                 <tr>
                 <?php
                 $i=2;
                 $j=$arra[1];
                 $j=$j+1;
                            $sql1 = mysql_query("select * from `{$re}`");
                        //    $sql1 = mysql_query("select * from mainstock");
//                     $num_rows = mysql_num_rows($sql1);

//  echo "$num_rows Rows\n";
                     while($ar8=  mysql_fetch_array($sql1))
                     {
                        // echo $arra[$i];
                         while($i<=$j)
                         {
                       $a3=$ar8[$arra[$i]];
                       ?>
                                           <td><?php echo $a3?></td>
                                          

                    <?php $i++;
                    }
                   
                    if ($a1 == 'admin'){ ?>
                                   <td><a href="update_data.php?n=<?php echo $e; ?>" style='pointer-events:none;cursor:default;'>Update </a></td>
                  <?php
                 
                 
                    }else{?>
                                   <td><a href="update_data.php?n=<?php echo $e; ?>" >Update </a></td>
                   <?php
                 }
                 ?>
                 </tr> 
        <?php  }?>
                                </table> 

<?php
   if ($a1 == 'admin'){ ?>
    <p align="center" style="margin-top:40px;"><input type="submit" class="button" name="sub1" value="Add" disabled>
<?php


   }
else{?>
    <p align="center" style="margin-top:40px;"><input type="submit" class="button" name="sub" value="Add"  >
  
    <?php
    }
      
?>
    

    </div>
    </form>
    <div style="background-color: #333;
    color: #888f8f;position:fixed;bottom:0;left:0;right:0;text-align:center;font-size:15px;padding:12px;">
            <p>Copyright &copy; 2019 - Register of Registers<br>All Rights Reserved.</p>
        </div>
</body>

</html>
<?php
if(isset($_POST["sub"]))
{
    header("location:add_data.php?n=$re;");
}
?>