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

  <div id="head">
       <h1 style="color:#FFFFFF; font-size:30px; font-family:'Myriad Pro'; padding-left:20px; padding-top:35px">BRB Expert System for the Detection of Autism</h1> 
  </div>
  
  <div id="Deter">
  <p style="color:#FFFFFF; font-size:18px; font-family:'Times New Roman', Times, serif; padding-left:20px; padding-top:4px">Parental</p>
  </div>
  
<div id="content">
  
  <div id="part1">
   <div id="box" style="margin-top:20px">
  <p style="padding:5px; font-size:20px; padding-bottom:20px">Antecedent 1: </p>
  <form>
  <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px"> Inheritance</p></td>
  <td><input type="text" id="in" name="in" value="D10" style="padding-left:5px; margin-left:5px; "/></td>
  </tr>
  <tr>
  <td>
   <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Attribute Weight</p></td>
  <td><input type="text" id="d10" name="d10" value="1" style="padding-left:5px; margin-left:5px"/></td>
  </tr>
  <tr>
  <td>
     <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Ref. Value</p></td>
  <td><select id="d10" name="d10" style="padding-left:5px; margin-left:5px"><option value="3">Default</option></select></td></tr>
  
  </table>
  </form>
  </div>
  </div>
  
  <div id="part2">
  <div id="box" style="margin-top:20px">
  <p style="padding:5px; font-size:20px; padding-bottom:20px">Consequent </p>
  <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Consequent</p></td>
  <td><input type="text" id="gen" name="en" value="Parental" style="padding-left:5px; margin-left:5px; "/></td>
  </tr>
 
  <tr>
  <td>
     <p style="padding:3px; font-size:16px; padding-left:10px;margin-top:5px">Ref. Value</p></td>
  <td><select id="gen" name="gen" style="padding-left:5px; margin-left:5px"><option value="3">Default</option></select></td></tr>
  
  </table>
  </div>
  
  
  </div>
  
  <div id="part3">
  
   <div id="input_div" style="margin-left:20px; margin-top:70px">
  <div id="input_box">
  <p style="padding:5px; font-size:20px; padding-bottom:10px">Input 1: </p>
  <table>
  <tr>
  <td>
  <p style="padding:3px; font-size:14px; padding-left:10px;">Input of Antecedent 1:</p></td>
  <td><input type="text" id="an1" name="an1" value="" style="padding-left:5px; margin-left:5px;" onfocus="show1()" onblur="hide1();show_result_parent()" /></td>
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
  </div>
    
    
    <div id="part4">
    
    <input type="button" name="bck" id="bck" value="Back" style="cursor:pointer; margin-left:20px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px; font-size:20px" onclick="bck()"  />
       <input type="button" name="trns" id="trns" value="Transformation" style="cursor:pointer; margin-left:20px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px; font-size:20px" onclick="par_trans()"  />
        <input type="button" name="match" id="match" value="Matching Degree" style="cursor:pointer; margin-left:20px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px; font-size:20px" onclick="par_matching()"  />
      <input type="button" name="aw" id="aw" value="Activation Weight" style="cursor:pointer; margin-left:20px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px;  font-size:20px"  onclick="par_activation()"  />
      <input type="button" name="up" id="up" value="Update" style="cursor:pointer; margin-left:20px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px; font-size:20px" onclick="par_update()"  />
      <input type="button" name="agg" id="agg" value="Aggregation" style="cursor:pointer; margin-left:20px; background-color:#999999; color:#FFFFFF; font-weight:bold; height:50px; width:200px; padding:5px; margin-top:10px; font-size:20px" onclick="par_aggregation()"  />
    </div>
    
</div>  
  
  <div id="workview_parental">  </div>
  
  <div id="input_div" style="margin-left:24px; position:absolute; top:500px; left:1000px">
  <div id="input_box">
  <p style="padding:5px; font-size:20px; padding-bottom:10px"> Consequent(Parental): </p>
  <input type="button" name="out_spoken" id="out_spoken" value="OUTPUT" style="cursor:pointer; margin-left:5px; background-color:#FF6600; color:#FFFFFF; height:25px; width:100px; padding:5px" onclick="show_par()" onblur="hide4()" />
      </div>
 <div class="output_details" style="text-align:center; padding-top:10px">
    </div>
</div>
</body>
</html>  
  
  
  
  
  
  
  
  
  
  
  
  
  
</div>
  </body>
  </html>