<?php
//aggregation 
include('update_b_degree.php');
//echo "<br />"."Aggregation"."<br />";


$i=0;
while($i<27)
{
$D1[$i]=$match[$i];
$i++;
}

$j=0;
while($j<27)
{
$D2[$j]=$match[$i];
$i++;
$j++;
}
$j=0;
while($j<27)
{
$D3[$j]=$match[$i];
$i++;
$j++;
}
/*
echo "D1"."<br />";
for($i=0;$i<27;$i++)
    {
        echo $D1[$i];
			echo "<br />";
			}
			echo "D2"."<br />";
			for($i=0;$i<27;$i++)
    {
        echo $D2[$i];
			echo "<br />";
			}
			echo "D3"."<br />";
			for($i=0;$i<27;$i++)
    {
        echo $D3[$i];
			echo "<br />";
			}
			*/
			//KI factoring
//echo "<br />"."Aggregation Starts"."<br />";
			$i=0;
			while($i<26)
			{
			//echo "<br />".$D1[$i+1]."<br />".$D2[$i+1]."<br />".$D3[$i+1]."<br />".$un[$i+1]."<br />";
			$KI[$i]=round((1/(1-(($D1[$i]*$D2[$i+1]+$D1[$i]*$D3[$i+1])+($D2[$i]*$D1[$i+1]+$D2[$i]*$D3[$i+1])+($D3[$i]*$D1[$i+1]+$D3[$i]*$D2[$i+1])))),5);
			$d1=round(($KI[$i]*(($D1[$i]*$D1[$i+1])+($D1[$i]*$un[$i+1])+($D1[$i+1]*$un[$i]))),5);
			$d2=round(($KI[$i]*($D2[$i]*$D2[$i+1]+$D2[$i]*$un[$i+1]+$D2[$i+1]*$un[$i])),5);
			$d3=round(($KI[$i]*($D3[$i]*$D3[$i+1]+$D3[$i]*$un[$i]+$D3[$i+1]*$un[$i+1])),5);
			$new_un=round(($KI[$i]*$un[$i]*$un[$i+1]),5);
			$i++;
			$D1[$i]=$d1;
			$D2[$i]=$d2;
			$D3[$i]=$d3;
			$un[$i]=$new_un;
			//echo "KI"."<br />".$KI[$i-1]."<br />".$D1[$i]."<br />".$D2[$i]."<br />".$D3[$i]."<br />".$new_un."<br />";
			}
		//	echo "KI"."<br />".$KI[$i-1]."<br />".$D1[$i-1]."<br />".$D2[$i-1]."<br />".$D3[$i-1]."<br />".$new_un;
		
		//Final Result
		
		
		$high=round((($D1[$i]/(1-$new_un))*100),3);
		
		
		$medium=round((($D2[$i]/(1-$new_un))*100),3);
		
	
		
				$low=round((($D3[$i]/(1-$new_un))*100),3);
		
include('normal.php');


//echo "<br />"."high :".$high."%"."<br />";
//echo "<br />"."medium :".$medium."%"."<br />";
		//echo "<br />"."low :".$low."%"."<br />";
		$crisp=$high*1+$medium*.5+$low*0;
		//echo $crisp;

$con = mysqli_connect("localhost","root","","brb");
 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
  //mysql_select_db("brb", $con);
  
  mysqli_query($con,"delete from s_d_value");
 
 //mysql_select_db("brb", $con);
 
 $result = mysqli_query($con,"insert into s_d_value values('$high','$medium','$low','$crisp')");
 
  //mysql_select_db("brb", $con);
 
 $result = mysqli_query($con,"update consequent set spoken='active'");

?>
