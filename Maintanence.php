<?php
include "cnctn.php";
session_start();
$gh = $_SESSION["uname"];
$ar=mysql_query("select utype from login where uname='$gh'");
while($ara=  mysql_fetch_array($ar))
{
    $a1=$ara['utype'];
}
?>


<html>

<head meta charset="utf-8">
    <title>Table</title>

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
    <form method="POST">

    <div class="main">
    <span style="font-size:20px;font-weight:bold;">Maintenance<hr style="margin:10px; margin-bottom:30px;"></span>
    <table align="center" border="1">
                <tr>
                    <th>Si.No</th>
                    <th>Purchase date</th>
                    <th>Item Name</th>
                    <th>Item Serial No.</th>
                    <th>Item Price</th>
                    <th>Date Of fault Reporting</th>
                    <th>Date Of Completion</th>
                    <th>Complaint</th>
                    <th>Details Of Repair</th>

                 </tr>
                 <?php
                  $ar=mysql_query("select * from maintanence order by dateoffault");
                  while($ara=  mysql_fetch_array($ar))
                     {
                      $a=$ara["si.no"];
                      $b=$ara["p_date"];
                      $c=$ara["itemname"];
                      $d=$ara["item_si_no"];
                      $e=$ara["item_price"];
                      $f=$ara["dateoffault"];
                      $g=$ara["dateofcompletion"];
                      $h=$ara["complaintdetails"];
                      $i=$ara["repairdetails"];
                       
                 ?>
                 <tr>
                    <td><?php echo $a?></td>
                    <td><?php echo $b?></td>
                    <td><?php echo $c?></td>
                    <td><?php echo $d?></td>
                    <td><?php echo $e?></td>
                    <td><?php echo $f?></td>
                    <td><?php echo $g?></td>
                    <td><?php echo $h?></td>
                    <td><?php echo $i?></td>
                 </tr>
        
                                </table> 
                                <?php }
?>

<?php
   if ($a1 == 'admin'){ ?>
    <p align="center" style="margin-top:40px;"><input type="submit" class="button" name="sub" value="Add" disabled>
<?php

}
else{?>
    <p align="center" style="margin-top:40px;"><input type="submit" class="button" name="sub" value="Add" >

    <?php
}?>
    
    <!--p align="center" style="margin-top:40px;"><input type="submit" class="button" name="sub" value="Add"-->

    </div>
    </form>
    <div style="background-color: #333;
    color: #888f8f;position:fixed;bottom:0;left:0;right:0;text-align:center;font-size:15px;padding:12px;">
            <p>Copyright &copy; 2019 - Register of Registers<br>All Rights Reserved.</p>
        </div>
</body>

</html>