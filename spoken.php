<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/java.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

</script>
</head>
<body>
<?Php
if(isset($_POST['spk']))
{
$con = mysqli_connect("localhost","root","","brb");
 if (!$con)
 {
 die('Could not connect: ' . mysqli_coonect_error());
 }
 
 //mysql_select_db("brb", $con);
 
 $sql = "SELECT count(high) FROM s_d_value";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 
 $a=$row[0];
 if($a>0)
 {
 echo "<script type='text/javascript'>document.getElementById('spoken').style.display='block';</script>";
  echo "<script type='text/javascript'>document.getElementById('spk').style.border='groove 3px #0033CC';</script>";
 $sql="select * from s_d_value";
 $result=mysqli_query($con,$sql);
 while($row = mysqli_fetch_array($result))
 {
 $crisp=$row["crisp"];	 
 $a=$row['high'];
 $b=$row['medium'];
 $c=$row['low'];
 }
  echo "Crisp: ".$crisp."%<br />";  
 
  }
 else
 {
echo "<script type='text/javascript'>document.getElementById('spoken').style.display='none';</script>";
 }
 }
?>
</body>
</html>
<?php
if(isset($_POST['show']))
{
$con = mysqli_connect("localhost","root","","brb");
 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
 else
 {
 //mysql_select_db("brb", $con);
 $sql="select * from s_d_value";
 $result=mysqli_query($con,$sql);
 while($row = mysqli_fetch_array($result))
 { 
 $crisp=$row["crisp"];
 $a=$row['high'];
 $b=$row['medium'];
 $c=$row['low'];
 }
    echo "Crisp: ".$crisp."%<br />".$a."%<br />".$b."%<br />".$c."%"; 
	 
}
 
}
?>
