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
if(isset($_POST['aut']))
{
$con = mysql_connect("localhost","root","");
 if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
 
 mysql_select_db("brb", $con);
 
 $sql = "SELECT count(high) FROM a_d_value";
 $result=mysql_query($sql);
 $row=mysql_fetch_array($result);
 
 $a=$row[0];
 if($a>0)
 {
 echo "<script type='text/javascript'>document.getElementById('autism').style.display='block';</script>";
  echo "<script type='text/javascript'>document.getElementById('aut').style.border='groove 3px #0033CC';</script>";
 $sql="select * from a_d_value";
 $result=mysql_query($sql);
 while($row = mysql_fetch_array($result))
 { 
 $a=$row['high'];
 $b=$row['medium'];
 $c=$row['low'];
 $crisp=$row['crisp'];
 }
  echo $crisp."% Suspicion of Autism"; 
 
  }
 else
 {
echo "<script type='text/javascript'>document.getElementById('autism').style.display='none';</script>";
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
 $sql="select * from int_d_value";
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
