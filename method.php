<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<!-----------------------Display Rule base table----------------------->
<?php
if(isset($_POST['rule']))
{
$db="brb";
$rule_3="k_rule_3";
$con=mysqli_connect("localhost","root","",$db);
if(!$con)
{
die("Connection not established".mysqli_connect_error());
}
else
{
//mysql_select_db($db,$con);
$sql="select * from $rule_3";
$result=mysqli_query($con,$sql);
echo "<table width='1312' border='1' cellspacing='0' style='text-align:center'>";
  echo "<tr>";
    echo "<td>Serial</td>";
    echo "<td>Rule Weight</td>";
    echo "<td>Not Babbling</td>";
    

    echo "<td>Toddling</td>";
	
    echo "<td>Frequent Repetition</td>";
	 echo "<td colspan='3'>Consequent (High | Medium | Low)</td>";

  echo"</tr>";
  
  while($row=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$row['sl']."</td>";
  echo "<td>".$row['rule_weight']."</td>";
  
  echo "<td>".$row['an1_title']."</td>";

  echo "<td>".$row['an2_title']."</td>";
 
  
  echo "<td>".$row['an3_title']."</td>";
 
   echo "<td>".$row['an1_ref']."</td>";
   echo "<td>".$row['an2_ref']."</td>";
    echo "<td>".$row['an3_ref']."</td>";
  echo "</tr>";
  }
  echo "</table>";
}
}
?>

<!----------------------------Input transformation----------------------------------------->

<?php
 if(isset($_POST['trans']))
 {
 $d1=$_POST['ant1']/100;
 $d2=$_POST['ant2']/100;
 $d3=$_POST['ant3']/100;
 $db="brb";
 $table="s_trans";
 
 //echo $d1."<br />".$d2."<br />".$d3;
 
 
 //Input Transformation

 //Utility
 	 
	 $high=1;
	 $mid=0.5;
	 $low=0;
	 
	 //DB connect 
	  $con = mysqli_connect("localhost","root","",$db);
      if (!$con)
      {
      die('Could not connect: ' . mysqli_connect_error());
      }
 
    //Previous Record Remove
      //mysql_select_db($db, $con);
      $query="delete from $table";
      mysqli_query($con,$query);
	  
	   //D1 transformation
	 
	 if($d1<=$high && $d1>=$mid)
	   {
	   $m=($high-$d1)/($high-$mid);
	   $h=1-$m;
	   $l=1-($h+$m);
	   }
	   else if($d1<=$mid && $d1>=$low)
	   {
	   $l=($mid-$d1)/($mid-$low);
	   $m=1-$l;
	   $h=1-($m+$l);
	   }
	    
		//echo $h."<br />".$m."<br />".$l."<br/>";
		//mysql_select_db($db, $con);
 
 $query="insert into $table values(1,'$h','$m','$l')";
 mysqli_query($con,$query);
		
		
		 //D2 transformation
	 
	 if($d2<=$high && $d2>=$mid)
	   {
	   $m=($high-$d2)/($high-$mid);
	   $h=1-$m;
	   $l=1-($h+$m);
	   }
	   else if($d2<=$mid && $d2>=$low)
	   {
	   $l=($mid-$d2)/($mid-$low);
	   $m=1-$l;
	   $h=1-($m+$l);
	   }
	    
		//echo $h."<br />".$m."<br />".$l."<br/>";
		//mysql_select_db($db, $con);
 
 $query="insert into $table values(2,'$h','$m','$l')";
 mysqli_query($con,$query);
		
		
			 //D3 transformation
	 
	 if($d3<=$high && $d3>=$mid)
	   {
	   $m=($high-$d3)/($high-$mid);
	   $h=1-$m;
	   $l=1-($h+$m);
	   }
	   else if($d3<=$mid && $d2>=$low)
	   {
	   $l=($mid-$d3)/($mid-$low);
	   $m=1-$l;
	   $h=1-($m+$l);
	   }
	    
		//echo $h."<br />".$m."<br />".$l."<br/>";
		
	 

 
 //mysql_select_db($db, $con);
 
 $query="insert into $table values(3,'$h','$m','$l')";
 mysqli_query($con,$query);
 
 
 //Display Transformation in Tabular Form
 
 
 //mysql_select_db($db,$con);
$sql="select * from $table";
$result=mysqli_query($con,$sql);
echo "<table width='400' border='1' cellspacing='0' style='text-align:center'>";
  echo "<tr>";
    echo "<td>Input</td>";
    echo "<td>High</td>";
    echo "<td>Medium</td>";
    echo "<td>Low</td>";
	 
  echo"</tr>";
  
  while($row=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>"."D".$row['sl']."</td>";
  echo "<td>".$row['high']."</td>";
  echo "<td>".$row['medium']."</td>";
  echo "<td>".$row['low']."</td>"; 
  echo "</tr>";
  }
  echo "</table>";

 }
?>

<?php
if(isset($_POST['matching']))
{
include('matching.php');
$db="brb";
$rule_3="k_rule_3";
$con=mysqli_connect("localhost","root","",$db);
if(!$con)
{
die("Connection not established".mysqli_connect_error());
}
else
{
//mysql_select_db($db,$con);
$sql="select * from $rule_3";
$result=mysqli_query($con,$sql);
echo "<table width='1312' border='1' cellspacing='0' style='text-align:center'>";
  echo "<tr>";
   echo "<td>Serial</td>";
    echo "<td>Rule Weight</td>";
    echo "<td>Not Babbling</td>";
    

    echo "<td>Toddling</td>";
	
    echo "<td>Frequent Repetition</td>";
	 echo "<td colspan='3'>Consequent (High | Medium | Low)</td>";
	echo "<td>Rule ID</td>";
	echo "<td>Matching Degree</td>";
  echo"</tr>";
  $i=0;
  $j=0;
  while($row=mysqli_fetch_assoc($result))
  {
  
  echo "<tr>";
 echo "<td>".$row['sl']."</td>";
  echo "<td>".$row['rule_weight']."</td>";
  
  echo "<td>".$row['an1_title']."</td>";

  echo "<td>".$row['an2_title']."</td>";
 
  
  echo "<td>".$row['an3_title']."</td>";
 
   echo "<td>".$row['an1_ref']."</td>";
   echo "<td>".$row['an2_ref']."</td>";
    echo "<td>".$row['an3_ref']."</td>";
  echo "<td>".++$i."</td>";
  echo "<td>".$x[$j++]."</td>";
  echo "</tr>";
  }
  echo "</table>";
}
}

?>

<!---------------------Activation Weight Determination-------------------------->


<?php
if(isset($_POST['activation']))
{
include('matching.php');
include('activation.php');
$db="brb";
$rule_3="k_rule_3";
$con=mysqli_connect("localhost","root","",$db);
if(!$con)
{
die("Connection not established".mysqli_connect_error());
}
else
{
//mysql_select_db($db,$con);
$sql="select * from $rule_3";
$result=mysqli_query($con,$sql);
echo "<table width='1312' border='1' cellspacing='0' style='text-align:center'>";
  echo "<tr>";
   echo "<td>Serial</td>";
    echo "<td>Rule Weight</td>";
    echo "<td>Not Babbling</td>";
    

    echo "<td>Toddling</td>";
	
    echo "<td>Frequent Repetition</td>";
	 echo "<td colspan='3'>Consequent (High | Medium | Low)</td>";
	echo "<td>Rule ID</td>";
	echo "<td>Activation Weight</td>";
  echo"</tr>";
  $i=0;
  $j=0;
  while($row=mysqli_fetch_assoc($result))
  {
  
  echo "<tr>";
 echo "<td>".$row['sl']."</td>";
  echo "<td>".$row['rule_weight']."</td>";
  
  echo "<td>".$row['an1_title']."</td>";

  echo "<td>".$row['an2_title']."</td>";
 
  
  echo "<td>".$row['an3_title']."</td>";
 
   echo "<td>".$row['an1_ref']."</td>";
   echo "<td>".$row['an2_ref']."</td>";
    echo "<td>".$row['an3_ref']."</td>";
  echo "<td>".++$i."</td>";
  echo "<td>".$w[$j++]."</td>";
  echo "</tr>";
  }
  echo "</table>";
}

}

?>


<!-----------------------Belief Degree Update---------------------------->
<?php
if(isset($_POST['update']))
{
include('update_b_degree.php');
echo "<table width='1312' border='1' cellspacing='0' style='text-align:center'>";
  echo "<tr>";
  echo "<td width='200'>Rule ID</td>";
  for($i=1;$i<=27;$i++)
  {
    echo "<td width='200'>".$i."</td>";
	}
	echo "</tr>";
	echo "<tr>";
	echo "<td>Initial Belief Degree(B1)</td>";
	 for($i=0;$i<=26;$i++)
  {
    echo "<td>".$b1[$i]."</td>";
	}
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Initial Belief Degree(B2)</td>";
	 for($i=0;$i<=26;$i++)
  {
    echo "<td>".$b2[$i]."</td>";
	}
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Initial Belief Degree(B3)</td>";
	 for($i=0;$i<=26;$i++)
  {
    echo "<td>".$b3[$i]."</td>";
	}
	echo "</tr>";
	
	
		echo "<tr>";
	echo "<td>Updated Belief Degree(B1)</td>";
	 for($i=0;$i<27;$i++)
  {
    echo "<td>".$match[$i]."</td>";
	}
	echo "</tr>";


   	echo "<tr>";
	echo "<td>Updated Belief Degree(B2)</td>";
	 for(;$i<54;$i++)
  {
    echo "<td>".$match[$i]."</td>";
	}
	echo "</tr>";
	
	  	echo "<tr>";
	echo "<td>Updated Belief Degree(B3)</td>";
	 for(;$i<81;$i++)
  {
    echo "<td>".$match[$i]."</td>";
	}
	echo "</tr>";
	
	
	echo "<tr>";
	echo "<td>Unassigned Belief Degree(Dn)</td>";
	for($i=0;$i<27;$i++)
  {
    echo "<td>".$un[$i]."</td>";
	}
	echo "</tr>";

	echo "</table>";
}
?>

<!--------------------------Aggregation---------------------------------->

<?php
if(isset($_POST['aggregate']))
{
include('aggregation.php');
echo "<center>";
echo "<table width='400' border='1' cellspacing='0' style='text-align:center;margin-top:100px'>";
echo "<caption style='font-size:25px;font-weight:bold'>Spoken</caption>";
  echo "<tr>";
  echo "<th>Severe(High)</th>";
    echo "<th>Moderate(Medium)</th>";
	  echo "<th>Mild(Low)</th>";
	  echo "</tr>";
	  
	  echo "<tr>";
  echo "<th>".$high."</th>";
    echo "<th>".$medium."</th>";
	  echo "<th>".$low."</th>";
	  echo "</tr>";
	  echo "</table>";
	  echo "</center>";
	 
	  
}

?>


 
</body>
</html>
