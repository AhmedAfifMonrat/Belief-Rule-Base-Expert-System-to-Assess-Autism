


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/java.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

</script>
<title>Autism Detection</title>
<body>
<div id="wrapper">
<div id="header" style="height:30px; width:100%; background-color:#0033CC; font-size:24px; color:#FFFFFF; text-align:center; padding-top:5px">
BRB Expert System for the Detection of Autism
</div>



<svg height="1000" width="800" style="position:absolute;top:0px;left:400px">
  <line x1="100" y1="200" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="300" y1="220" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="500" y1="200" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
</svg>


<svg height="210" width="800" style="top:115px;position:absolute;left:200px">
  <line x1="200" y1="170" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
  <line x1="400" y1="300" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
</svg>

<svg height="210" width="800" style="top:205px;position:absolute;left:95px">
  <line x1="200" y1="250" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="300" y1="220" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="400" y1="250" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
</svg>

<svg height="210" width="800" style="top:233px;position:absolute;left:260px">
  <line x1="200" y1="270" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="300" y1="220" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="400" y1="250" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
</svg>

<svg height="210" width="800" style="top:137px;position:absolute;left:400px">
  <line x1="200" y1="250" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="300" y1="220" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="400" y1="250" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
</svg>

  <svg height="210" width="700" style="top:115px;position:absolute;left:600px">
  <line x1="200" y1="300" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />

<line x1="400" y1="230" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
</svg>

<svg height="1000" width="700" style="position:absolute;top:244px;left:546px">
<line x1="300" y1="200" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
</svg>


<svg height="1000" width="600" style="position:absolute;top:245px;left:690px">
  <line x1="220" y1="200" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="300" y1="200" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
<line x1="400" y1="200" x2="300" y2="100" style="stroke:rgb(255,0,0);stroke-width:2" />
</svg>

<input type="button" value="Autism" style="position:absolute;top:78px;left:675px;" id="aut"/>
<div id="autism" style="position:absolute;top:50px;left:735px; width:100px; height:70px; background-color:#0066FF;color:#FFFFFF;
 display:none;text-align:center; padding-top:10px">
<script type="text/javascript">aut();</script>
</div> 
<input type="button" name="ver" id="ver" value="verbal/non-verbal" style="position:absolute;top:195px;left:450px;cursor:pointer" onClick="verb()"  />
<div id="verbal" style="position:absolute;top:110px;left:460px; width:100px; height:70px; background-color:#0066FF;color:#FFFFFF;
display:none; text-align:center; padding-top:10px">
<script type="text/javascript">vrb();</script>
</div> 
<input type="button" value="Spoken" style="position:absolute;top:285px;left:370px;cursor:pointer;" onClick="spoken()" id="spk"/>
<div id="spoken" style="position:absolute;top:260px;left:270px; width:100px; height:70px; background-color:#0066FF;color:#FFFFFF;
display:none; text-align:center; padding-top:10px">
<script type="text/javascript">spoke();</script>
</div> 

<input type="button" value="Responding" style="position:absolute;top:315px;left:525px;cursor:pointer" onClick="responding()" id="res"/>
<div id="respond" style="position:absolute;top:230px;left:495px; width:100px; height:70px; background-color:#0066FF;color:#FFFFFF;
 display:none;text-align:center; padding-top:10px">
<script type="text/javascript">respond();</script>
</div> 
<input type="button" value="Interaction" style="position:absolute;top:218px;left:670px;cursor:pointer" onClick="interaction()" id="int"/>
<div id="interact" style="position:absolute;top:135px;left:650px; width:100px; height:70px; background-color:#0066FF;color:#FFFFFF;
 display:none;text-align:center; padding-top:10px">
<script type="text/javascript">interact();</script>
</div> 
<input type="button" value="Risk Factor" style="position:absolute;top:195px;left:855px;cursor:pointer" onClick="risk_factor()" id="ris" />
<div id="risk" style="position:absolute;top:110px;left:843px; width:100px; height:70px; background-color:#0066FF;color:#FFFFFF;
display:none;text-align:center; padding-top:10px">
<script type="text/javascript">risk();</script>
</div> 
<input type="button" value="Parental" style="position:absolute;top:325px;left:815px;cursor:pointer" onClick="parental()" id="par"/>
<div id="parent" style="position:absolute;top:240px;left:795px; width:100px; height:70px; background-color:#0066FF;color:#FFFFFF;
display:none;text-align:center; padding-top:10px">
<script type="text/javascript">par();</script>
</div> 
<input type="button" value="Genetic" style="position:absolute;top:325px;left:963px;cursor:pointer" onClick="genetic()" id="gen"/>
<div id="genetic" style="position:absolute;top:240px;left:935px; width:100px; height:70px; background-color:#0066FF;color:#FFFFFF;
display:none;text-align:center; padding-top:10px">
<script type="text/javascript">gen();</script>
</div> 

  <input type="button" value="D1" style="position:absolute;top:411px;left:310px; "/>
<input type="button" value="D2" style="position:absolute;top:411px;left:384px"/>
<input type="button" value="D3" style="position:absolute;top:411px;left:454px"/>
 <input type="button" value="D4" style="position:absolute;top:442px;left:485px"/>
<input type="button" value="D5" style="position:absolute;top:442px;left:547px"/>
<input type="button" value="D6" style="position:absolute;top:442px;left:620px"/>
 <input type="button" value="D7" style="position:absolute;top:342px;left:620px"/>
<input type="button" value="D8" style="position:absolute;top:342px;left:687px"/>
<input type="button" value="D9" style="position:absolute;top:342px;left:758px"/>
 <input type="button" value="D10" style="position:absolute;top:440px;left:830px"/>
<input type="button" value="D11" style="position:absolute;top:440px;left:895px"/>
<input type="button" value="D12" style="position:absolute;top:440px;left:975px"/>
<input type="button" value="D13" style="position:absolute;top:440px;left:1070px"/>

<!-----------input Antecedents------------------->

<span id="D1" style="height:25px; width:40px; position:absolute; top:431px; left:300px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D2" style="height:25px; width:40px; position:absolute; top:431px; left:374px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D3" style="height:25px; width:40px; position:absolute; top:431px; left:444px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D4" style="height:25px; width:40px; position:absolute; top:462px; left:475px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D5" style="height:25px; width:40px; position:absolute; top:462px; left:537px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D6" style="height:25px; width:40px; position:absolute; top:462px; left:610px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D7" style="height:25px; width:40px; position:absolute; top:362px; left:610px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D8" style="height:25px; width:40px; position:absolute; top:362px; left:677px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D9" style="height:25px; width:40px; position:absolute; top:362px; left:748px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D10" style="height:25px; width:40px; position:absolute; top:460px; left:820px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D11" style="height:25px; width:40px; position:absolute; top:460px; left:885px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D12" style="height:25px; width:40px; position:absolute; top:460px; left:965px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>
<span id="D13" style="height:25px; width:40px; position:absolute; top:460px; left:1060px; color:#0066FF; font-size:13px; padding-top:2px; text-align:center"></span>

<div id="syntax">
      <div class="syntax">   
           <div class="syn1">
           <ul>
           <li>D1: Not Babbling</li>
           <li>D2: Toddling</li>
           <li>D3: Frequent Repetition</li>
           <li>D4: Not Responsive</li>
           </ul>
           </div>
           <div class="syn2">
           <ul>
           <li>D5: Rejecting Cuddles</li>
           <li>D6: Reacting Negatively</li>
           <li>D7: Bitterness</li>
           <li>D8: Avoiding Eye Contact</li>
           </ul>
                      </div>
           <div class="syn3">
             <ul >
           <li class="last">D9: Less Interested Towards Parties & Friends</li>
           <li class="last">D10: Inheritance</li>
           <li class="last">D11: Chromosomal Abnormality</li>
           <li class="last">D12: Viral Agent</li>
            <li class="last">D13: Immune Intolerance</li>
           </ul>
           </div>
         </div>
</div>

<form action="index.php" method="post">
         <input type="submit" id="convert"  name="convert" value="Convert Result" style="background-color:#999999; height:40px; width:200px; font-size:24px; color:#FFFFFF; top:750px; left:470px; position:absolute; cursor:pointer" />
         </form>
         <form action="index.php" method="post">
          <input type="submit" id="clear" name="clear" value="Clear DataBase" style="background-color:#999999; height:40px; width:200px; font-size:24px; color:#FFFFFF; top:750px; left:750px; position:absolute; cursor:pointer" />
          </form>
          
</div>

</body>
</html>


<!------------------------------------------------------------Node test---------------------------------------------------------------------->
<?php

$db="brb";
$table="consequent";
$con=mysqli_connect("localhost","root","",$db);
if(!$con)
{
die("Connection not established".mysqli_connect_error());
}
else
{
//mysql_select_db($db,$con);
$sql="select * from $table";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$spoken=$row['spoken'];
$responding=$row['responding'];
$interaction=$row['interaction'];
$parental=$row['parental'];
$genetic=$row['genetic'];
$verbal=$row['verbal'];
$risk=$row['risk'];
}
if($spoken='active' && $responding=='active')
{
$db="brb";
$table="s_d_value";
$table1="res_d_value";
$con=mysqli_connect("localhost","root","",$db);
if(!$con)
{
die("Connection not established".mysqli_connect_error());
}
else
{
//mysql_select_db($db,$con);
$sql="select * from $table";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$input1=$row['crisp'];
}
mysql_select_db($db,$con);
$sql="select * from $table1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$input2=$row['crisp'];
}

$d1=$input1/100;
 $d2=$input2/100;
//echo $d1."<br />".$d2."<br />";

 
 
 //echo $d1."<br />".$d2."<br />".$d3;
 
 
 //Input Transformation

 //Utility
 	 
	 $high=1;
	 $mid=0.5;
	 $low=0;
	 
	 
	  
 
    //Previous Record Remove
      //mysql_select_db($db, $con);
      $query="delete from v_trans";
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
 
 $query="insert into v_trans values(1,'$h','$m','$l')";
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
 
 $query="insert into v_trans values(2,'$h','$m','$l')";
 mysqli_query($con,$query);
		
		mysql_select_db("brb", $con);
 
 $result = mysqli_query("SELECT * FROM v_trans");
$i=0;
 while($row = mysqli_fetch_assoc($result))
 {
 
 $a[$i]=$row['high'];
 $b[$i]=$row['medium'];
 $c[$i]=$row['low'];
 $i++;
 }
		
	 //$a=high $b=Mid $c=Low
 $i=0;
$s=array("D1"=>array($a[$i],$b[$i],$c[$i]),
"D2"=>array($a[$i+1],$b[$i+1],$c[$i+1]));

//echo $s["D1"][0]."<br />".$s["D1"][1]."<br />".$s["D1"][2];

//Matching Degree Calculation alpha1-alpha27

$i=0;
$j=0;
$t=0;
$n=3;
while($i<$n)
{
$j=0;
while($j<$n)
{
$x[$t]=$s["D1"][$i]*$s["D2"][$j];
$t++;
$j++;
}
$i++;
}

//Matching degree show
	/*echo "Matching<br />";
	for($i=0;$i<9;$i++)
    {
        echo $x[$i];
			echo "<br />";
			}*/
			
			
			
			//Activation weight Determination
			
			//sum(alpha()1-9)
			$add=0;
			for($i=0;$i<9;$i++)
			{
			$add=$add+$x[$i];
			}
			//echo "ADD:".$add."<br />";
			
			//wi=alphai*rule_weight(1)/$add
			
			for($i=0;$i<9;$i++)
			{
			$w[$i]=$x[$i]/$add;
			}
			// echo "activation weight"."<br />";
		/*	for($i=0;$i<9;$i++)
   {
        echo $w[$i];
			echo "<br />";
			}*/
			
			//mysql_select_db("brb", $con);
 
 $result = mysqli_query("SELECT * FROM k_rule_2");
$i=0;
 while($row = mysqli_fetch_assoc($result))
 {
 
 $b1[$i]=$row['c_1'];
 $b2[$i]=$row['c_2'];
 $b3[$i]=$row['c_3'];
 $i++;
 }
 /*
 echo "initial B1<br />";
 for($i=0;$i<9;$i++)
 {
 echo $b1[$i]."<br />";
 }
 echo "initial B2<br />";
 for($i=0;$i<9;$i++)
 {
 echo $b2[$i]."<br />";
 }
 echo "initial B3<br />";
 for($i=0;$i<9;$i++)
 {
 echo $b3[$i]."<br />";
 }
 */
 //mysql_select_db("brb", $con);
 
 $result = mysqli_query("SELECT * FROM v_trans");
$i=0;
 while($row = mysqli_fetch_assoc($result))
 {
 
 $a1[$i]=$row['high'];
 $a2[$i]=$row['medium'];
 $a3[$i]=$row['low'];
 $i++;
 }
//echo "update<br />";
 $j=0;
 for($i=0;$i<9;$i++)
    {
	
        $b1[$i]=($b1[$i]*((($a1[$j]+$a2[$j]+$a3[$j])+($a1[$j+1]+$a2[$j+1]+$a3[$j+1]))/2));
      // echo $b1[$i];
		//echo "<br />";
			}
			//echo "an2";
			//			echo "<br />";

			for($i=0;$i<9;$i++)
    {
	    $b2[$i]=($b2[$i]*((($a1[$j]+$a2[$j]+$a3[$j])+($a1[$j+1]+$a2[$j+1]+$a3[$j+1]))/2));
        //echo $b2[$i];
		//	echo "<br />";
			}
			//echo "an3";
			//echo "<br />";
			for($i=0;$i<9;$i++)
    {
	    $b3[$i]=($b3[$i]*((($a1[$j]+$a2[$j]+$a3[$j])+($a1[$j+1]+$a2[$j+1]+$a3[$j+1]))/2));
       // echo $b3[$i];
			//echo "<br />";
			}
			
			$i=0;
$j=0;

while($i<9)
{
$match[$j]=$w[$i]*$b1[$i];
$i++;
$j++;
}
$i=0;
while($i<9)
{
$match[$j]=$w[$i]*$b2[$i];
$i++;
$j++;
}
$i=0;
while($i<9)
{
$match[$j]=$w[$i]*$b3[$i];
$i++;
$j++;
}
	//echo "matched(1-81)"."<br />";
/*for($i=0;$i<27;$i++)
    {
        echo $match[$i];
			echo "<br />";
			}	*/

//unassigned value
//echo "unassigned matched value";
$i=0;
while($i<9)
{
$un[$i]=1-($match[$i]+$match[$i+9]+$match[$i+18]);
$i++;
}
//echo "<br />"."Unassigned"."<br />";
/*for($i=0;$i<9;$i++)
    {
        echo $un[$i];
			echo "<br />";
			}	*/

$i=0;
while($i<9)
{
$D1[$i]=$match[$i];
$i++;
}

$j=0;
while($j<9)
{
$D2[$j]=$match[$i];
$i++;
$j++;
}
$j=0;
while($j<9)
{
$D3[$j]=$match[$i];
$i++;
$j++;
}	
//echo "D1"."<br />";
/*for($i=0;$i<9;$i++)
    {
        //echo $D1[$i];
			//echo "<br />";
			}
			//echo "D2"."<br />";
			for($i=0;$i<9;$i++)
    {
        echo $D2[$i];
			echo "<br />";
			}
			echo "D3"."<br />";
			for($i=0;$i<9;$i++)
    {
        echo $D3[$i];
			echo "<br />";
			}	*/	
			
			$i=0;
			while($i<8)
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
			
			//Final Result
		
		
		$high=round((($D1[$i]/(1-$new_un))*100),3);
		
		
		$medium=round((($D2[$i]/(1-$new_un))*100),3);
		
	
		
				$low=round((($D3[$i]/(1-$new_un))*100),3);
		
include('normal.php');


/*echo "<br />"."high :".$high."%"."<br />";
echo "<br />"."medium :".$medium."%"."<br />";
		echo "<br />"."low :".$low."%"."<br />";*/
		
		$crisp=$high*1+$medium*.5+$low*0;
		//echo $crisp;

$con = mysqli_connect("localhost","root","",$db);
 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
  //mysql_select_db("brb", $con);
  
  mysqli_query("delete from v_d_value");
 
// mysql_select_db("brb", $con);
 
 $result = mysqli_query("insert into v_d_value values('$high','$medium','$low','$crisp')");
 
  //mysql_select_db("brb", $con);
 
 $result = mysqli_query("update consequent set verbal='active'");

		
}

}
else
{

}

}
?>

<!---------------------------------------------------------------Risk factor-------------------------------------------------------------------->

<?php

$db="brb";
$table="consequent";
$con=mysqli_connect("localhost","root","",$db);
if(!$con)
{
die("Connection not established".mysqli_connect_error());
}
else
{
//mysql_select_db($db,$con);
$sql="select * from $table";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$spoken=$row['spoken'];
$responding=$row['responding'];
$interaction=$row['interaction'];
$parental=$row['parental'];
$genetic=$row['genetic'];
$verbal=$row['verbal'];
$risk=$row['risk'];
}
if($parental='active' && $genetic=='active')
{
$db="brb";
$table="gen_d_value";
$table1="p_d_value";
$con=mysqli_connect("localhost","root","",$db);
if(!$con)
{
die("Connection not established".mysqli_connect_error());
}
else
{
//mysql_select_db($db,$con);
$sql="select * from $table";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$input1=$row['crisp'];
}
//mysql_select_db($db,$con);
$sql="select * from $table1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$input2=$row['crisp'];
}

$d1=$input1/100;
 $d2=$input2/100;
 
//echo $d1."<br />".$d2."<br />";

 
 
 //echo $d1."<br />".$d2."<br />".$d3;
 
 
 //Input Transformation

 //Utility
 	 
	 $high=1;
	 $mid=0.5;
	 $low=0;
	 
	 
	  
 
    //Previous Record Remove
      //mysql_select_db($db, $con);
      $query="delete from r_trans";
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
 
 $query="insert into r_trans values(1,'$h','$m','$l')";
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
 
 $query="insert into v_trans values(2,'$h','$m','$l')";
 mysqli_query($con,$query);
		
		//mysql_select_db("brb", $con);
 
 $result = mysqli_query("SELECT * FROM r_trans");
$i=0;
 while($row = mysqli_fetch_assoc($result))
 {
 
 $a[$i]=$row['high'];
 $b[$i]=$row['medium'];
 $c[$i]=$row['low'];
 $i++;
 }
		
	 //$a=high $b=Mid $c=Low
 $i=0;
$s=array("D1"=>array($a[$i],$b[$i],$c[$i]),
"D2"=>array($a[$i+1],$b[$i+1],$c[$i+1]));

//echo $s["D1"][0]."<br />".$s["D1"][1]."<br />".$s["D1"][2];

//Matching Degree Calculation alpha1-alpha27

$i=0;
$j=0;
$t=0;
$n=3;
while($i<$n)
{
$j=0;
while($j<$n)
{
$x[$t]=$s["D1"][$i]*$s["D2"][$j];
$t++;
$j++;
}
$i++;
}

//Matching degree show
	/*echo "Matching<br />";
	for($i=0;$i<9;$i++)
    {
        echo $x[$i];
			echo "<br />";
			}*/
			
			
			
			//Activation weight Determination
			
			//sum(alpha()1-9)
			$add=0;
			for($i=0;$i<9;$i++)
			{
			$add=$add+$x[$i];
			}
			//echo "ADD:".$add."<br />";
			
			//wi=alphai*rule_weight(1)/$add
			
			for($i=0;$i<9;$i++)
			{
			$w[$i]=$x[$i]/$add;
			}
			// echo "activation weight"."<br />";
		/*	for($i=0;$i<9;$i++)
   {
        echo $w[$i];
			echo "<br />";
			}*/
			
			//mysql_select_db("brb", $con);
 
 $result = mysqli_query("SELECT * FROM k_rule_2");
$i=0;
 while($row = mysqli_fetch_assoc($result))
 {
 
 $b1[$i]=$row['c_1'];
 $b2[$i]=$row['c_2'];
 $b3[$i]=$row['c_3'];
 $i++;
 }
 /*
 echo "initial B1<br />";
 for($i=0;$i<9;$i++)
 {
 echo $b1[$i]."<br />";
 }
 echo "initial B2<br />";
 for($i=0;$i<9;$i++)
 {
 echo $b2[$i]."<br />";
 }
 echo "initial B3<br />";
 for($i=0;$i<9;$i++)
 {
 echo $b3[$i]."<br />";
 }
 */
// mysql_select_db("brb", $con);
 
 $result = mysqli_query("SELECT * FROM r_trans");
$i=0;
 while($row = mysqli_fetch_assoc($result))
 {
 
 $a1[$i]=$row['high'];
 $a2[$i]=$row['medium'];
 $a3[$i]=$row['low'];
 $i++;
 }
//echo "update<br />";
 $j=0;
 for($i=0;$i<9;$i++)
    {
	
        $b1[$i]=($b1[$i]*((($a1[$j]+$a2[$j]+$a3[$j])+($a1[$j+1]+$a2[$j+1]+$a3[$j+1]))/2));
      // echo $b1[$i];
		//echo "<br />";
			}
			//echo "an2";
			//			echo "<br />";

			for($i=0;$i<9;$i++)
    {
	    $b2[$i]=($b2[$i]*((($a1[$j]+$a2[$j]+$a3[$j])+($a1[$j+1]+$a2[$j+1]+$a3[$j+1]))/2));
        //echo $b2[$i];
		//	echo "<br />";
			}
			//echo "an3";
			//echo "<br />";
			for($i=0;$i<9;$i++)
    {
	    $b3[$i]=($b3[$i]*((($a1[$j]+$a2[$j]+$a3[$j])+($a1[$j+1]+$a2[$j+1]+$a3[$j+1]))/2));
       // echo $b3[$i];
			//echo "<br />";
			}
			
			$i=0;
$j=0;

while($i<9)
{
$match[$j]=$w[$i]*$b1[$i];
$i++;
$j++;
}
$i=0;
while($i<9)
{
$match[$j]=$w[$i]*$b2[$i];
$i++;
$j++;
}
$i=0;
while($i<9)
{
$match[$j]=$w[$i]*$b3[$i];
$i++;
$j++;
}
	//echo "matched(1-81)"."<br />";
/*for($i=0;$i<27;$i++)
    {
        echo $match[$i];
			echo "<br />";
			}	*/

//unassigned value
//echo "unassigned matched value";
$i=0;
while($i<9)
{
$un[$i]=1-($match[$i]+$match[$i+9]+$match[$i+18]);
$i++;
}
//echo "<br />"."Unassigned"."<br />";
/*for($i=0;$i<9;$i++)
    {
        echo $un[$i];
			echo "<br />";
			}	*/

$i=0;
while($i<9)
{
$D1[$i]=$match[$i];
$i++;
}

$j=0;
while($j<9)
{
$D2[$j]=$match[$i];
$i++;
$j++;
}
$j=0;
while($j<9)
{
$D3[$j]=$match[$i];
$i++;
$j++;
}	
//echo "D1"."<br />";
/*for($i=0;$i<9;$i++)
    {
        //echo $D1[$i];
			//echo "<br />";
			}
			//echo "D2"."<br />";
			for($i=0;$i<9;$i++)
    {
        echo $D2[$i];
			echo "<br />";
			}
			echo "D3"."<br />";
			for($i=0;$i<9;$i++)
    {
        echo $D3[$i];
			echo "<br />";
			}	*/	
			
			$i=0;
			while($i<8)
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
			
			//Final Result
		
		
		$high=round((($D1[$i]/(1-$new_un))*100),3);
		
		
		$medium=round((($D2[$i]/(1-$new_un))*100),3);
		
	
		
				$low=round((($D3[$i]/(1-$new_un))*100),3);
		
include('normal.php');


/*echo "<br />"."high :".$high."%"."<br />";
echo "<br />"."medium :".$medium."%"."<br />";
		echo "<br />"."low :".$low."%"."<br />";*/
		
		$crisp=$high*1+$medium*.5+$low*0;
		//echo $crisp;

$con = mysqli_connect("localhost","root","",$db);
 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
  //mysql_select_db("brb", $con);
  
  mysqli_query("delete from r_d_value");
 
 ////mysql_select_db("brb", $con);
 
 $result = mysqli_query("insert into r_d_value values('$high','$medium','$low','$crisp')");
 
 // mysql_select_db("brb", $con);
 
 $result = mysqli_query("update consequent set risk='active'");

		
}

}
else
{

}

}
?>

<?php
if(isset($_POST['convert']))
{
$db="brb";
$table="consequent";
$con=mysqli_connect("localhost","root","",$db);
//mysql_select_db($db,$con);
$sql="select * from $table";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$spoken=$row['spoken'];
$responding=$row['responding'];
$interaction=$row['interaction'];
$parental=$row['parental'];
$genetic=$row['genetic'];
$verbal=$row['verbal'];
$risk=$row['risk'];
}
if($verbal='active' && $risk=='active' && $interaction='active')
{
$db="brb";
$table="v_d_value";
$table1="r_d_value";
$table2="int_d_value";
$con=mysqli_connect("localhost","root","",$db);
//mysql_select_db($db,$con);
$sql="select * from $table";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$input1=$row['crisp'];
}
//mysql_select_db($db,$con);
$sql="select * from $table1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$input2=$row['crisp'];
}
//mysql_select_db($db,$con);
$sql="select * from $table2";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
$input3=$row['crisp'];
}
$d1=$input1/100;
 $d2=$input2/100;
 $d3=$input3/100;
//echo $d1."<br />".$d2."<br />";

 
 
 //echo $d1."<br />".$d2."<br />".$d3;
 
 
 //Input Transformation

 //Utility
 	 
	 $high=1;
	 $low=0;
	 $mid=0.5;
	 
	 //Previous Record Remove
      //mysql_select_db($db, $con);
      $query="delete from a_trans";
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
 
 $query="insert into a_trans values(1,'$h','$m','$l')";
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
 
 $query="insert into a_trans values(2,'$h','$m','$l')";
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
 
 $query="insert into a_trans values(3,'$h','$m','$l')";
 mysqli_query($con,$query);
		
$con = mysql_connect("localhost","root","",$db);
 
 //mysql_select_db("brb", $con);
 
 $result = mysqli_query("SELECT * FROM a_trans");
$i=0;
 while($row = mysqli_fetch_assoc($result))
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

	$add=0;
			for($i=0;$i<27;$i++)
			{
			$add=$add+$x[$i];
			}
			//echo "ADD:".$add."<br />";
			
			//wi=alphai*rule_weight(1)/$add
			
			for($i=0;$i<27;$i++)
			{
			$w[$i]=$x[$i]/$add;
			}
			
			
			//mysql_select_db("brb", $con);
 
 $result = mysqli_query("SELECT * FROM k_rule_3");
$i=0;
 while($row = mysqli_fetch_assoc($result))
 {
 
 $b1[$i]=$row['an1_ref'];
 $b2[$i]=$row['an2_ref'];
 $b3[$i]=$row['an3_ref'];
 $i++;
 }
 //echo "an1";
 	//		echo "<br />";


 //mysql_select_db("brb", $con);
 
 $result = mysqli_query("SELECT * FROM a_trans");
$i=0;
 while($row = mysqli_fetch_assoc($result))
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

$con = mysql_connect("localhost","root","",$db);
 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
  //mysql_select_db("brb", $con);
  
  mysqli_query("delete from a_d_value");
 
 //mysql_select_db("brb", $con);
 
 $result = mysqli_query("insert into a_d_value values('$high','$medium','$low','$crisp')");
 
 // mysql_select_db("brb", $con);
 
 $result = mysqli_query("update consequent set autism='active'");



}

}
?>

<?php
if(isset($_POST['clear']))
{
$con = mysqli_connect("localhost","root","","brb");
//mysql_select_db("brb", $con);  
mysqli_query($con,"delete from a_d_value");
//mysql_select_db("brb", $con);  
mysqli_query($con,"delete from r_d_value");
//mysql_select_db("brb", $con);  
mysqli_query($con,"delete from gen_d_value");
//mysql_select_db("brb", $con);  
mysqli_query($con,"delete from int_d_value");
//mysql_select_db("brb", $con);  
mysqli_query($con,"delete from p_d_value");
//mysql_select_db("brb", $con);  
mysqli_query($con,"delete from res_d_value");
//mysql_select_db("brb", $con);  
mysqli_query($con,"delete from s_d_value");
//mysql_select_db("brb", $con);  
mysqli_query($con,"delete from v_d_value");
// mysql_select_db("brb", $con);
 
 $result = mysqli_query($con,"update consequent set spoken='inactive',responding='inactive',interaction='inactive',parental='inactive',genetic='inactive',verbal='inactive',risk='inactive'");

}
?>