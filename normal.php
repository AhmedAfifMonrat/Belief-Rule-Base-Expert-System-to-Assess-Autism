<?php
		
				$total=($high+$medium+$low);
				$exceed=100-$total;
				if($exceed>0)
				{
				$salt=$exceed/3;
				
				$high=round(($high+$salt),3);
				$medium=round(($medium+$salt),3);
				$low=round(($low+$salt),3);
				}
				else if($exceed<0)
				{
								$salt=$exceed/3;

				$high=round(($high-$salt),3);
				$medium=round(($medium-$salt),3);
				$low=round(($low-$salt),3);
				}
?>