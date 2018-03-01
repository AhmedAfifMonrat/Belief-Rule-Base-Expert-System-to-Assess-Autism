<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/verbal.css" />
<script type="text/javascript" src="js/java.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<title>Autism Detection</title>
</head>

<body>
<div id="wrap">
  <div id="header">
       <h1 style="color:#FFFFFF; font-size:30px; font-family:'Myriad Pro'; padding-left:20px; padding-top:20px">BRB Expert System for the Detection of Autism</h1> 
  </div>
  
  <div id="Determinents">
  <p style="color:#FFFFFF; font-size:18px; font-family:'Times New Roman', Times, serif; padding-left:20px; padding-top:4px">Responding</p>
  </div>
  
  <!---------Antecedent & Consequent-------------->
  
  <div id="box">
  <p style="padding:5px; font-size:20px; padding-bottom:20px">Antecedent 1: </p>
  <form>
  <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Not Responsive</p></td>
  <td><input type="text" id="not_resp" name="not_resp" value="D4" style="padding-left:5px; margin-left:5px; "/></td>
  </tr>
  <tr>
  <td>
   <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Attribute Weight</p></td>
  <td><input type="text" id="d4" name="d4" value="1" style="padding-left:5px; margin-left:5px"/></td>
  </tr>
  <tr>
  <td>
     <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Ref. Value</p></td>
  <td><select id="d4" name="d4" style="padding-left:5px; margin-left:5px"><option value="3">Default</option></select></td></tr>
  
  </table>
  </form>
  </div>
  <div id="box">
    <p style="padding:5px; font-size:20px; padding-bottom:20px">Antecedent 2: </p>
  <form>
  <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Rejecting Cuddles</p></td>
  <td><input type="text" id="rej" name="rej" value="D5" style="padding-left:5px; margin-left:5px; "/></td>
  </tr>
  <tr>
  <td>
   <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Attribute Weight</p></td>
  <td><input type="text" id="d5" name="d5" value="1" style="padding-left:5px; margin-left:5px"/></td>
  </tr>
  <tr>
  <td>
     <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Ref. Value</p></td>
  <td><select id="d5" name="d5" style="padding-left:5px; margin-left:5px"><option value="3">Default</option></select></td></tr>
  
  </table>
  </form>
  </div>
  <div id="box">
    <p style="padding:5px; font-size:20px; padding-bottom:20px">Antecedent 3: </p>
  <form>
 <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Reacting Neagatively</p></td>
  <td><input type="text" id="react" name="react" value="D6" style="padding-left:5px; margin-left:5px; "/></td>
  </tr>
  <tr>
  <td>
   <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Attribute Weight</p></td>
  <td><input type="text" id="d6" name="d6" value="1" style="padding-left:5px; margin-left:5px"/></td>
  </tr>
  <tr>
  <td>
     <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Ref. Value</p></td>
  <td><select id="d6" name="d6" style="padding-left:5px; margin-left:5px"><option value="3">Default</option></select></td></tr>
  
  </table>
  </form>
  </div>
  <div id="box">
  <p style="padding:5px; font-size:20px; padding-bottom:20px">Consequent </p>
  <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Consequent</p></td>
  <td><input type="text" id="res" name="res" value="responding" style="padding-left:5px; margin-left:5px; "/></td>
  </tr>
 
  <tr>
  <td>
     <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Ref. Value</p></td>
  <td><select id="res" name="res" style="padding-left:5px; margin-left:5px"><option value="3">Default</option></select></td></tr>
  
  </table>
  </div>
  
  <!----------------------Input---------------------------------->
  
  
  
  <div id="mid">
  <div id="input_div" style="margin-left:20px;">
  <div id="input_box">
  <p style="padding:5px; font-size:20px; padding-bottom:10px">Input 1: </p>
  <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:14px; padding-left:10px;">Input of Antecedent 1:</p></td>
  <td><input type="text" id="an1" name="an1" value="" style="padding-left:5px; margin-left:5px;" onfocus="show1()" onblur="hide1();" /></td>
  </tr>
  </table>
  </div>
   <div class="hid_details1">
   <table style="padding:10px" width="300">
   <tr >
   <td >High</td>
   <td>Range(80-100)</td>
   </tr>
   <tr>
   <td>Medium</td>
   <td>Range(50-70)</td>
   </tr>
   <tr>
   <td>Low</td>
   <td>Range(0-20)</td>
   </tr>
   </table>
     </div>
  </div>
  <div id="input_div" style="margin-left:23px;">
  <div id="input_box">
  <p style="padding:5px; font-size:20px; padding-bottom:10px">Input 2: </p>
  <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:14px; padding-left:10px;">Input of Antecedent 2:</p></td>
  <td><input type="text" id="an2" name="an2" value="" style="padding-left:5px; margin-left:5px; " onfocus="show2()" onblur="hide2()"/></td>
  </tr>
  </table>
        </div>
         <div class="hid_details2">
         <table style="padding:10px" width="300">
   <tr >
   <td >High</td>
   <td>Range(80-100)</td>
   </tr>
   <tr>
   <td>Medium</td>
   <td>Range(50-70)</td>
   </tr>
   <tr>
   <td>Low</td>
   <td>Range(0-20)</td>
   </tr>
   </table>
         </div>
  </div>
  <div id="input_div" style="margin-left:24px;">
  <div id="input_box">
  <p style="padding:5px; font-size:20px; padding-bottom:10px">Input 3: </p>
  <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:14px; padding-left:10px;">Input of Antecedent 3:</p></td>
  <td><input type="text" id="an3" name="an3" value="" style="padding-left:5px; margin-left:5px; " onfocus="show3()" onblur="hide3();show_result_res()"/></td>
  </tr>
  </table>
  </div>
      <div class="hid_details3">
      <table style="padding:10px" width="300">
   <tr >
   <td >High</td>
   <td>Range(80-100)</td>
   </tr>
   <tr>
   <td>Medium</td>
   <td>Range(50-70)</td>
   </tr>
   <tr>
   <td>Low</td>
   <td>Range(0-20)</td>
   </tr>
   </table>
      </div>
  </div>    
  <div id="input_div" style="margin-left:24px;">
  <div id="input_box">
  <p style="padding:5px; font-size:20px; padding-bottom:10px"> Consequent(Responding): </p>
  <input type="button" name="out_spoken" id="out_spoken" value="OUTPUT" style="cursor:pointer; margin-left:5px; background-color:#FF6600; color:#FFFFFF; height:25px; width:100px; padding:5px" onfocus="show_res()" onblur="hide4()" />
      </div>
 <div class="output_details" style="text-align:center; padding-top:10px">
    </div>
  </div>
  <!-----------------Rule Base Update------------------------->
  <div id="rule_base_update">
       <p style="padding:5px; font-size:20px; padding-bottom:20px">Rule Base Update </p>
       <form>
       <span style="padding-left:10px">IF D4<select id="d4" name="d4" style="padding-left:5px; margin-left:5px"><option value="3">Default</option></select>
                D5 <select id="d5" name="d5" style="padding-left:5px; margin-left:5px"><option value="3">Default</option></select>
                D6<select id="d6" name="d6" style="padding-left:5px; margin-left:5px"><option value="3">Default</option></select>
                Then <input type="text" id="" name="" value="" style="padding-left:5px; margin-left:5px; "/>
                <input type="text" id="" name="" value="" style="padding-left:5px; margin-left:5px; "/>
                <input type="text" id="" name="" value="" style="padding-left:5px; margin-left:5px; "/>
                <input type="button" name="" id="" value="Update This Rule Base" style="cursor:pointer; margin-left:5px; background-color:#FF6600; color:#FFFFFF; height:30px; width:150px; padding:5px"  />
                
                </span></form>
     </div>
     
     <!----------------------------Workview------------------------>
   
       <div id="workview">
       </div> 
       
       <!----------Function Buttons---------------->
       
       <input type="button" name="bck" id="bck" value="Back" style="cursor:pointer; margin-left:20px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:150px; padding:5px; margin-top:10px; font-size:20px" onclick="bck()"  />
       <input type="button" name="trns" id="trns" value="Input Transformation" style="cursor:pointer; margin-left:20px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:260px; padding:5px; margin-top:10px; font-size:20px" onclick="res_trans()"  />
        <input type="button" name="match" id="match" value="Matching Degree" style="cursor:pointer; margin-left:20px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px; font-size:20px" onclick="res_matching()"  />
        <input type="button" name="aw" id="aw" value="Activation Weight" style="cursor:pointer; margin-left:15px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px; font-size:20px"  onclick="res_activation()"  />
        <input type="button" name="up" id="up" value="Update" style="cursor:pointer; margin-left:15px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px; font-size:20px" onclick="res_update()"  />
        <input type="button" name="agg" id="agg" value="Aggregation" style="cursor:pointer; margin-left:15px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px; font-size:20px" onclick="res_aggregation()"  />
       
</div>
</div>
</body>
</html>
