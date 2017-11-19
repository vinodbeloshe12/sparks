<?php
include("mychk.php");
include("header.php");
include 'db.php';
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sparks Design Solutions - Add New Photos</title>

<script type="text/javascript">
function showimagepreview(input) {
if (input.files && input.files[0]) {
var filerdr = new FileReader();
filerdr.onload = function(e) {
$('#imgprvw').attr('src', e.target.result);
}
filerdr.readAsDataURL(input.files[0]);
}
}
</script>

<script type="text/javascript">
function showimagepreview1(input) {
if (input.files && input.files[0]) {
var filerdr = new FileReader();
filerdr.onload = function(e) {
$('#imgprvw1').attr('src', e.target.result);
}
filerdr.readAsDataURL(input.files[0]);
}
}
</script>
</head>

       <div id="content" class="inp-page">

			
      <div id="inp-form-box" class="box g10">
                <div class="header">Add New Photos</div>
                <div class="gcont no-pad-btm">
      
                    <form  action="offeradded.php"  class="content form big-label label-pad-m"  method="post" enctype="multipart/form-data" name="form1">  
						
						<div class="row inp-cont">
                        <label>Category Name</label>
                       <select name="catname" id="catname" onchange="myf()" style="width:250px;">
					   <option value="Poster">Select...</option>
  <option value="Brochure">Poster</option>
    <option value="Pack">Brochure</option>
	  <option value="Others">Pack Design</option>
	    <option value="">Others</option>
 
					   </select>
					  <!-- <script>
					   function myf()
					   {
 var x = document.getElementById("catname").value;
 document.getElementById("d").value = x;
 }
</script>		

<input type="text" name="d" id="d"/>-->
			   </div>
					<br/>
						<center><p><b style="color:red;">Ideal Size is Width="217px" and Height="144px"</b></p></center>
						<br/>
					<div class="row inp-cont">
                        <label>Program Small Image</label>
                   
									
									<input type="file" name="image" id="image" onchange="showimagepreview1(this)" required />
						<br/><br/><br/>
								 <label for="picture" class="error required" generated="true"></label>
								 <br/><center>
<img id="imgprvw1" width="217"  height="144" /></center>
          </div>	
					
<br/>
							<br/>
<div class="row inp-cont">
                        <label>Program Big Image</label>
                   
									
									<input type="file" name="bimage" id="bimage" onchange="showimagepreview(this)" required />
						<br/><br/><br/>
								 <label for="picture" class="error required" generated="true"></label>
								 <br/><center>
<img id="imgprvw" width="400"  height="300" /></center>
          </div>					
                                   
              				   <script>
function myFunction() {
    var x = document.getElementById("image").required;
    document.getElementById("demo").innerHTML = x;
}
</script>

                       
                        <button name="submit"  type="submit" class="green flt-r g3">Submit</button>
                    </form>
                </div>
            </div>

      

	</div><!--END WRAPPER

	<div id="load"><div id="spinner"></div></div>-->


	<?php
include("footer.php");
?>