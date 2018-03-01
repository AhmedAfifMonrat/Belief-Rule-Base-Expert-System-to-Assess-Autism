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
if(isset($_POST['res']))
{
$con = mysql_connect("localhost","root","");
 if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
 
 mysql_select_db("brb", $con);
 
 $sql = "SELECT count(high) FROM res_d_value";
 $result=mysql_query($sql);
 $row=mysql_fetch_array($result);
 
 $a=$row[0];
 if($a>0)
 {
 echo "<script type='text/javascript'>document.getElementById('respond').style.display='block';</script>";
  echo "<script type='text/javascript'>document.getElementById('res').style.border='groove 3px #0033CC';</script>";
 $sql="select * from res_d_value";
 $result=mysql_query($sql);
 while($row = mysql_fetch_array($result))
 { 
 $a=$row['high'];
 $b=$row['medium'];
 $c=$row['low'];
 }
  echo $a."%<br />".$b."%<br />".$c."%"; 
 
  }
 else
 {
echo "<script type='text/javascript'>document.getElementById('respond').style.display='none';</script>";
 }
 }
?>
</body>
</html>
<?php
if(isset($_POST['show']))
{
$con = mysql_connect("localhost","root","");
 if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
 else
 {
 mysql_select_db("brb", $con);
 $sql="select * from res_d_value";
 $result=mysql_query($sql);
 while($row = mysql_fetch_array($result))
 { 
 $a=$row['high'];
 $b=$row['medium'];
 $c=$row['low'];
 }
    echo $a."%<br />".$b."%<br />".$c."%"; 
	 
}
 
}
?>
