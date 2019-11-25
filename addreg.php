<?php
include "cnctn.php";
session_start();
?>


<html>

<head meta charset="utf-8">
    <title>Add Register</title>

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
  /* <!--border: 2px solid black; */
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

    <div style="background-color:white;padding:10px;">
        <h1 style="text-align:center;color:#777;">Register Of Registers</h1>
        <p class="welcome-text"><b>Hi Admin.....</b></p>

    </div>

    </div>
    <!-- /. header-section-->
    <form method="POST">

    <div class="main">
        <span style="font-size:20px;font-weight:bold;">* New Register Details<hr style="margin:10px; margin-bottom:30px;"></span>
    
       
        <table align="center">
                <tr><th>Register Name<br><br></th>
                    <td><input type="text" class="inputfield" name="field1" required value="" ><br><br></td>
                </tr>
                <tr>
                    <th>No: Of Fields<br><br></th>
                    <td><input type="number" class="inputfield" name="field2" required value=""><br><br></td>
                </tr>
                <!-- <tr>
                    <th>Fields<br><br></th>
                    <td><input type="text" class="inputfield" name="field2" required value=""  placeholder="Format(Field1,Field2,.....)"><br><br></td>
                </tr> -->
                
                <tr>
                        <th colspan="2"><input type="submit" name="n10" value="Add Register" ></th></tr>
        
                                </table>    
              <?php

if(isset($_POST["n10"]))
{
    $a = $_POST["field1"];
    $b = $_POST["field2"];



            // checks if the regname is in use
if (!get_magic_quotes_gpc()) {
    $_POST['field1'] = addslashes($_POST['field1']);
    }
    $usercheck = $_POST['field1'];
    $check = mysql_query("SELECT regname FROM newtb WHERE regname = '$usercheck'")
    or die(mysql_error());
    $check2 = mysql_num_rows($check);
    //if the name exists it gives an error
    if ($check2 != 0) {
    die('Sorry, the register name '.$_POST['field1'].' is already in use.');
    }

$i=1;
$y='y';

while ($i<=$b){
    ?>
              <p align="center" >field<?php echo$i;?><input type="text"  name="<?php $y.$i?>" required value="" ></p>


<?php $i++;}
if($i!=1){
?>
<p align="center" ><input type="submit" name="af" value="Add fields" ></p>

</div>
    </form>
<!-- //     $r=mysql_query("insert into newtb(regname,pwd,utype)values('$a','$b','user')");
// if($r)
// echo "<script>alert('User is added')</script>";
  -->
<?php
}}
// if($a=null & $b=null)
// {
//     echo "Field is not entered";
// }
// else {
    // mysql_query("insert into newtb(regname,nofields)values('$a','$b')");
// }


$i=1;
$c='n';
if(isset($_POST["af"]))    //not complete....156 name chanfe like af.$i..inset into newtb and create tb
{ 
    mysql_query("insert into newtb(regname,nofields)values('$a','$b')");

    while($i<=$b){
    $c.$i=$_POST["$y.$i"];
    mysql_query("alter table newtb set field'".$i=$c.$i."' where regname='".$a."'");
$i++;
}
// $r=mysql_query("create table '".$a."'('si.no' int auto_increment primary key)");

// $sql3=mysql_query("select * from newtb where regname=$a");
// while(){

// }


}

?>  
              
           <div>
               <br>
               <br>
               <div> 
         


    <div style="background-color: #333;
    color: #888f8f;position:fixed;bottom:0;left:0;right:0;text-align:center;font-size:15px;padding:6px;">
            <p>Copyright &copy; 2019 - Register of Registers<br>All Rights Reserved.</p>
        </div>
</body>

</html>