<?php
//belief rule update
 $con = mysql_connect("localhost","root","");
 if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
 else
 {
mysql_select_db("brb", $con);
 
 $result = mysql_query("SELECT * FROM k_rule_3");
$i=0;
 while($row = mysql_fetch_array($result))
 {
 
 $b1[$i]=$row['an1_ref'];
 $b2[$i]=$row['an2_ref'];
 $b3[$i]=$row['an3_ref'];
 $i++;
 }
 //echo "an1";
 	//		echo "<br />";


 mysql_select_db("brb", $con);
 
 $result = mysql_query("SELECT * FROM res_trans");
$i=0;
 while($row = mysql_fetch_array($result))
 {
 
 $a1[$i]=$row['high'];
 $a2[$i]=$row['medium'];
 $a3[$i]=$row['low'];
 $i++;
 }

$j=0;
 for($i=0;$i<27;$i++)
    {
	
        $b1[$i]=($b1[$i]*((($a1[$j]+$a2[$j]+$a3[$j])+($a1[$j+1]+$a2[$j+1]+$a3[$j+1])+($a1[$j+2]+$a2[$j+2]+$a3[$j+2]))/3));
      //  echo $b1[$i];
		//	echo "<br />";
			}
			//echo "an2";
			//			echo "<br />";

			for($i=0;$i<27;$i++)
    {
	    $b2[$i]=($b2[$i]*((($a1[$j]+$a2[$j]+$a3[$j])+($a1[$j+1]+$a2[$j+1]+$a3[$j+1])+($a1[$j+2]+$a2[$j+2]+$a3[$j+2]))/3));
        //echo $b2[$i];
			//echo "<br />";
			}
			//echo "an3";
			//echo "<br />";
			for($i=0;$i<27;$i++)
    {
	    $b3[$i]=($b3[$i]*((($a1[$j]+$a2[$j]+$a3[$j])+($a1[$j+1]+$a2[$j+1]+$a3[$j+1])+($a1[$j+2]+$a2[$j+2]+$a3[$j+2]))/3));
        //echo $b3[$i];
			//echo "<br />";
			}
			
			
			//Matched value
			include('matching_res.php');
			include('activation_res.php');
$i=0;
$j=0;

while($i<27)
{
$match[$j]=$w[$i]*$b1[$i];
$i++;
$j++;
}
$i=0;
while($i<27)
{
$match[$j]=$w[$i]*$b2[$i];
$i++;
$j++;
}
$i=0;
while($i<27)
{
$match[$j]=$w[$i]*$b3[$i];
$i++;
$j++;
}

//matched value 1-81
//echo "matched(1-81)"."<br />";
for($i=0;$i<81;$i++)
    {
        //echo $match[$i];
			//echo "<br />";
			}
//unassigned value
//echo "unassigned matched value";
$i=0;
while($i<27)
{
$un[$i]=1-($match[$i]+$match[$i+27]+$match[$i+54]);
$i++;
}
/*echo "<br />"."Unassigned"."<br />";
for($i=0;$i<27;$i++)
    {
        echo $un[$i];
			echo "<br />";
			}*/
		}	
			
            ?>