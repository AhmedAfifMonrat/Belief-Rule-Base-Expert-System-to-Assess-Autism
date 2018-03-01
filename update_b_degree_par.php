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
 
 $result = mysql_query("SELECT * FROM k_rule_1");
$i=0;
 while($row = mysql_fetch_array($result))
 {
 
 $b1[$i]=$row['c1_high'];
 $b2[$i]=$row['c2_mid'];
 $b3[$i]=$row['c3_low'];
 $i++;
 
 }
 
 /*for($i=0;$i<3;$i++)
 {
 echo $b1[$i]."<br />";
 }
 for($i=0;$i<3;$i++)
 {
 echo $b2[$i]."<br />";
 }
 for($i=0;$i<3;$i++)
 {
 echo $b3[$i]."<br />";
 }*/
 
  mysql_select_db("brb", $con);
 
 $result = mysql_query("SELECT * FROM p_trans");
$i=0;
 while($row = mysql_fetch_array($result))
 {
 
 $a1[$i]=$row['high'];
 $a2[$i]=$row['medium'];
 $a3[$i]=$row['low'];

 }

$j=0;
 for($i=0;$i<3;$i++)
    {
	
        $b1[$i]=($b1[$i]*(($a1[$j]+$a2[$j]+$a3[$j])/1));
      //  echo $b1[$i];
		//	echo "<br />";
			}
			/*echo "update<br />";
			for($i=0;$i<3;$i++)
			{
			echo $b1[$i]."<br />";
			}*/
			
			for($i=0;$i<3;$i++)
    {
	    $b2[$i]=($b2[$i]*(($a1[$j]+$a2[$j]+$a3[$j])/1));
        //echo $b2[$i];
			//echo "<br />";
			}
			
			for($i=0;$i<3;$i++)
    {
	    $b3[$i]=($b3[$i]*(($a1[$j]+$a2[$j]+$a3[$j])/1));
       // echo $b3[$i];
			//echo "<br />";
			}
 //echo "an1";
 	//		echo "<br />";


			
			//Matched value
			include('matching_par.php');
			include('activation_par.php');
$i=0;
$j=0;

while($i<3)
{
$match[$j]=$w[$i]*$b1[$i];
$i++;
$j++;
}
$i=0;
while($i<3)
{
$match[$j]=$w[$i]*$b2[$i];
$i++;
$j++;
}
$i=0;
while($i<3)
{
$match[$j]=$w[$i]*$b3[$i];
$i++;
$j++;
}

//matched value 1-81
/*echo "matched(1-9)"."<br />";
for($i=0;$i<9;$i++)
    {
        echo $match[$i];
			echo "<br />";
			}*/
//unassigned value
//echo "unassigned matched value";
/*
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
			$i=0;
while($i<3)
{
$un[$i]=1-($match[$i]+$match[$i+3]+$match[$i+6]);
$i++;
} 
/*echo "unassigned<br />";
			for($i=0;$i<3;$i++)
    {
        echo $un[$i];
			echo "<br />";
			}*/
		}	
			
            ?>