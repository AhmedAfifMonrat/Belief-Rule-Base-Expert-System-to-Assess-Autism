// JavaScript Document
function verb()
{
	window.location="verbal.php";
	}
	function spoken()
    {
	window.location="spk_interface.php";
	}
		function responding()
{
	window.location="verbal.php";
	}
			function interaction()
{
	window.location="verbal.php";
	}
			function risk_factor ()
{
	window.location="verbal.php";
	}
			function parental()
{
	window.location="verbal.php";
	}
		
		
		function genetic()
          {
	            window.location="verbal.php";
		  }
		  
	// Showing Hidden Panel
	
	
	function show1()
	{
		$(".hid_details1").show("slow");
		
	}
	function hide1()
	{
		$(".hid_details1").hide("slow");
	}
	function show2()
	{
		$(".hid_details2").show("slow");
	}
	function hide2()
	{
		$(".hid_details2").hide("slow");
	}
	function show3()
	{
		$(".hid_details3").show("slow");
	}
	function hide3()
	{
		$(".hid_details3").hide("slow");
	}
	function show_result()
	{
		$(".output_details").show("slow");
	    $("body").css("background-color","#FFFFCC");
		$(".output_details").load("spoken.php",{show:'show'});
	}
	function hide4()
	{
		$(".output_details").hide("slow");
		$("body").css("background-color","white");
	}
	
	
	//Show rule Base table
	
	function show_result_spk()
	{
		var a=document.getElementById("an1").value;
		var b=document.getElementById("an2").value;
        var c=document.getElementById("an3").value;
		  
		  if(isDigit(a,b,c))
		  {
			  if(inRange(a,b,c))
                {
			     $("#workview").load("method.php",{rule:'rule'});
			    }
			else
			{
				//not necessary
			}

		  }
		
	}
	
	//Input transformation
	
	function transform()
	{
		var a=document.getElementById("an1").value;
		var b=document.getElementById("an2").value;
        var c=document.getElementById("an3").value;
		  
		  if(isDigit(a,b,c))
		  {
			  if(inRange(a,b,c))
                {
			     $("#workview").load("method.php",{ant1:a,ant2:b,ant3:c,trans:'trans'});
			    }
			else
			{
				//not necessary
			}

		  }
	}
	
	//Input matching Degree
	
	function matching()
	{
	 $("#workview").load("method.php",{matching:'matching'});
	}
	
	
	//Activation Weight
	
	function activation()
	{
	
	 $("#workview").load("method.php",{activation:'activation'});
	
	}
	
	//Update Believe Degree
	
	function update()
	{
		 $("#workview").load("method.php",{update:'update'});
	}
	
	//Agregation
	
	function aggregation()
	{
		$("#workview").load("method.php",{aggregate:'aggregate'});
	}
	

function closeWin() {
window.open();
window.close();

}
     //validation Function
	 
	 function isDigit(a,b,c)
	 {
		 var Exp = /^[0-9]+$/;
		if((a.match(Exp)) && (b.match(Exp)) && (c.match(Exp)))
		{
			return true;
		}
		else
		{
			
			alert("Please Enter valid input");
		    document.getElementById("an1").value="";
            document.getElementById("an2").value="";
			document.getElementById("an3").value="";
			return false;
		}
	 }
	 function inRange(a,b,c)
	 {
		 if((a<100) && (b<100) && (c<100))
		 {
			 return true;
			
		 }
		 else
		 {
            alert("Please see the Range");
			document.getElementById("an1").value="";
			document.getElementById("an2").value="";
			document.getElementById("an3").value="";
			return false;
		 }
	 }
	 
	 //spoken Display
	 
	 function spoke()
{
$("#spoken").load("spoken.php",{spk:'spk'});
}
//Back

function bck()
{
	window.location="index.php";
}

//-----------------------------------------------------------------Responding----------------------------------------------------------------------

function responding()
{
	window.location="res_interface.php";
}

//Show rule Base Table

function show_result_res()
	{
		var a=document.getElementById("an1").value;
		var b=document.getElementById("an2").value;
        var c=document.getElementById("an3").value;
		  
		  if(isDigit(a,b,c))
		  {
			  if(inRange(a,b,c))
                {
			     $("#workview").load("method1.php",{rule:'rule'});
			    }
			else
			{
				//not necessary
			}

		  }
		
	}
	
	//Input transformation
	
	function res_trans()
	{
		var a=document.getElementById("an1").value;
		var b=document.getElementById("an2").value;
        var c=document.getElementById("an3").value;
		  
		  if(isDigit(a,b,c))
		  {
			  if(inRange(a,b,c))
                {
					
			     $("#workview").load("method1.php",{ant1:a,ant2:b,ant3:c,trans:'trans'});
			    }
			else
			{
				//not necessary
			}

		  }
	}
	
	
	
	//Input matching Degree
	
	function res_matching()
	{
	 $("#workview").load("method1.php",{matching:'matching'});
	}
	

		//Activation Weight
	
	function res_activation()
	{
	
	 $("#workview").load("method1.php",{activation:'activation'});
	
	}
	
	//Update Believe Degree
	
	function res_update()
	{
		 $("#workview").load("method1.php",{update:'update'});
	}
	
	//Agregation
	
	function res_aggregation()
	{
		$("#workview").load("method1.php",{aggregate:'aggregate'});
	}
	//output
	
	function show_res()
	{
		$(".output_details").show("slow");
	    $("body").css("background-color","#FFFFCC");
		$(".output_details").load("responding.php",{show:'show'});
	}
	
	//Display Respond
	
		 //spoken Display
	 
	 function respond()
{
$("#respond").load("responding.php",{res:'res'});
}


//-----------------------------------------------------------Interaction--------------------------------------------------------------------------

function interaction()
{
	window.location="int_interface.php";
}

//Show rule Base Table

function show_result_int()
	{
		var a=document.getElementById("an1").value;
		var b=document.getElementById("an2").value;
        var c=document.getElementById("an3").value;
		  
		  if(isDigit(a,b,c))
		  {
			  if(inRange(a,b,c))
                {
			     $("#workview").load("method3.php",{rule:'rule'});
			    }
			else
			{
				//not necessary
			}

		  }
		
	}
	
	//Input transformation
	
	function int_trans()
	{
		var a=document.getElementById("an1").value;
		var b=document.getElementById("an2").value;
        var c=document.getElementById("an3").value;
		  
		  if(isDigit(a,b,c))
		  {
			  if(inRange(a,b,c))
                {
					
			     $("#workview").load("method3.php",{ant1:a,ant2:b,ant3:c,trans:'trans'});
			    }
			else
			{
				//not necessary
			}

		  }
	}
	
	
	
	//Input matching Degree
	
	function int_matching()
	{
	 $("#workview").load("method3.php",{matching:'matching'});
	}
	

		//Activation Weight
	
	function int_activation()
	{
	
	 $("#workview").load("method3.php",{activation:'activation'});
	
	}
	
	//Update Believe Degree
	
	function int_update()
	{
		 $("#workview").load("method3.php",{update:'update'});
	}
	
	//Agregation
	
	function int_aggregation()
	{
		$("#workview").load("method3.php",{aggregate:'aggregate'});
	}
	//output
	
	function show_int()
	{
		$(".output_details").show("slow");
	    $("body").css("background-color","#FFFFCC");
		$(".output_details").load("interaction.php",{show:'show'});
	}
	
	//Display Interact
	
		
	 
	 function interact()
{
$("#interact").load("interaction.php",{int:'int'});
}

//-----------------------------------------------------------Genetic------------------------------------------------------------------

function genetic()
{
	window.location="gen_interface.php";
}

//Show rule Base Table

function show_result_gen()
	{
		var a=document.getElementById("an1").value;
		var b=document.getElementById("an2").value;
        var c=document.getElementById("an3").value;
		  
		  if(isDigit(a,b,c))
		  {
			  if(inRange(a,b,c))
                {
			     $("#workview").load("method4.php",{rule:'rule'});
			    }
			else
			{
				//not necessary
			}

		  }
		
	}
	//Input transformation
	
	function gen_trans()
	{
		var a=document.getElementById("an1").value;
		var b=document.getElementById("an2").value;
        var c=document.getElementById("an3").value;
		  
		  if(isDigit(a,b,c))
		  {
			  if(inRange(a,b,c))
                {
					
			     $("#workview").load("method4.php",{ant1:a,ant2:b,ant3:c,trans:'trans'});
			    }
			else
			{
				//not necessary
			}

		  }
	}
	
	//Input matching Degree
	
	function gen_matching()
	{
	 $("#workview").load("method4.php",{matching:'matching'});
	}
	
//Activation Weight
	
	function gen_activation()
	{
	
	 $("#workview").load("method4.php",{activation:'activation'});
	
	}	
	//Update Believe Degree
	
	function gen_update()
	{
		 $("#workview").load("method4.php",{update:'update'});
	}
//Agregation
	
	function gen_aggregation()
	{
		$("#workview").load("method4.php",{aggregate:'aggregate'});
	}
		//output
	
	function show_gen()
	{
		$(".output_details").show("slow");
	    $("body").css("background-color","#FFFFCC");
		$(".output_details").load("genetic.php",{show:'show'});
	}
	
	//Display Interact
	
		
	 
	 function gen()
{
$("#genetic").load("genetic.php",{gen:'gen'});
}

//--------------------------------------------------------Parental--------------------------------------------------------------------------------

function parental()
{
	window.location="par_interface.php";
}
function show_result_parent()
{
	var a=document.getElementById("an1").value;
	
	 var Exp = /^[0-9]+$/;
	 
		if(a.match(Exp))
		{
			if(a<=100)
		 {
			 
			     $("#workview_parental").load("method5.php",{rule:'rule'});
			
		 }
		 else
		 {
            alert("Please see the Range");
			document.getElementById("an1").value="";
		 }
		}
		else
		{
			
			alert("Please Enter valid input");
		    document.getElementById("an1").value="";
		}
		  
}
function par_trans()
	{
		var a=document.getElementById("an1").value;
	
	 var Exp = /^[0-9]+$/;
	 
		if(a.match(Exp))
		{
			if(a<=100)
		 {
			 
			     $("#workview_parental").load("method5.php",{ant1:a,trans:'trans'});
			
		 }
		 else
		 {
            alert("Please see the Range");
			document.getElementById("an1").value="";
		 }
		}
		else
		{
			
			alert("Please Enter valid input");
		    document.getElementById("an1").value="";
		}
		  

	}
	
	//Input matching Degree
	
	function par_matching()
	{
	 $("#workview_parental").load("method5.php",{matching:'matching'});
	}
	
	
	//Activation Weight
	
	function par_activation()
	{
	
	 $("#workview_parental").load("method5.php",{activation:'activation'});
	
	}	
	
	
	//Update Believe Degree
	
	function par_update()
	{
		 $("#workview_parental").load("method5.php",{update:'update'});
	}
	
	//Agregation
	
	function par_aggregation()
	{
		$("#workview_parental").load("method5.php",{aggregate:'aggregate'});
	}
	
	function show_par()
	{
		$(".output_details").show("slow");
	    $("body").css("background-color","#FFFFCC");
		$(".output_details").load("parent.php",{show:'show'});
	}
	 function par()
{
$("#parent").load("parent.php",{par:'par'});
}
//--------------------------------------------------------------------Verbal---------------------------------------------------------------------//

function vrb()
{
$("#verbal").load("verbal.php",{verb:'verb'});
}
function risk()
{
$("#risk").load("risk.php",{risk:'risk'});
}
function aut()
{
$("#autism").load("aut.php",{aut:'aut'});
}

