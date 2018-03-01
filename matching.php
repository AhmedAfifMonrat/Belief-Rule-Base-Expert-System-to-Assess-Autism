<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
$con = mysqli_connect("localhost","root","","brb");
 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
 
 //mysql_select_db("brb", $con);
 
 $result = mysqli_query($con,"SELECT * FROM s_trans");
$i=0;
 while($row = mysqli_fetch_array($result))
 {
 
 $a[$i]=$row['high'];
 $b[$i]=$row['medium'];
 $c[$i]=$row['low'];
 $i++;
 }

 //$a=high $b=Mid $c=Low
 $i=0;
$s=array("D1"=>array($a[$i],$b[$i],$c[$i]),
"D2"=>array($a[$i+1],$b[$i+1],$c[$i+1]),"D3"=>array($a[$i+2],$b[$i+2],$c[$i+2]
));




//D1=row1(h,m,l);D2=row2(h,m,l);D3=row3(h,m,l)



//Matching Degree Calculation alpha1-alpha27

$i=0;
$j=0;
$k=0;
$t=0;
$n=3;
while($i<$n)
{
$j=0;
while($j<$n)
{
$k=0;
while($k<$n)
{
$x[$t]=$s["D1"][$i]*$s["D2"][$j]*$s["D3"]["$k"];
$k++;
$t++;
}
$j++;
}
$i++;
}

    //Matching degree show
	
	/*for($i=0;$i<27;$i++)
    {
        echo $x[$i];
			echo "<br />";
			}
			*/
			
			?>
</body>
</html>
