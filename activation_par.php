<?php
//Activation weight Determination
			
			//sum(alpha()1-27)
			$add=0;
			for($i=0;$i<3;$i++)
			{
			$add=$add+$x[$i];
			}
			//echo "ADD:".$add."<br />";
			
			//wi=alphai*rule_weight(1)/$add
			
			for($i=0;$i<3;$i++)
			{
			$w[$i]=$x[$i]/$add;
			}
			 /*echo "activation weight"."<br />";
			for($i=0;$i<27;$i++)
   {
        echo $w[$i];
			echo "<br />";
			}*/
?>