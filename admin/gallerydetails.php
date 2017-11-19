<?php
include("mychk.php");
include("header.php");
include 'db.php';
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sparks Design Solutions.com - View Photos</title>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.autocomplete.js"></script>
<script>
$(document).ready(function(){
 $("#tag").autocomplete("autocompletecatname.php", {
		selectFirst: true
	});
});

</script>
</head>

       <div id="content" class="inp-page">
 
	 <form action="offerdetails.php" method="post">
     
	  <input type="text" name="cname" id="tag" class="g5" placeholder="Offer Name">
	  
	 <button name="Search" class="glow g2">Search</button>
	  <button onClick="window.location.reload()" class="glow g2">Refresh</button>
	 </form>
	 
	  <div id="table-box" class="box g16 ov-no">
            	<table id="table" class="tablesorter"> 
            	<thead class="header">
    	           <tr><th>ID</th><th>Category</th><th>Image</th><th>Date</th><th>Action</th></tr>
    	         </thead>
    	         <tbody>
    	          
				  							<?php
/* if(isset($_POST['Search'])) 
{
$cname=$_POST['cname'];
$SQL = "SELECT * FROM offer WHERE pname='".$cname."'";
}
else
{ */

$SQL = "SELECT * FROM gallery order by id desc";
/* } */

$result = mysqli_query($con,$SQL);

$count = 0;
while ($db_field = mysqli_fetch_assoc($result)) {
	$a = $db_field['id']; 
	
	$b = $db_field['category'];
	$c = $db_field['simage'];
	
	$d = $db_field['regdate'];
  $count++;
	
	print("<tr ><td align = 'center'><b>$count</b></td>");

		print("<td align = 'center'>$b</td>");
	
		
		
		print("<td align = 'center'><img src='gallery/".$c."' height='150'/></td>");
	
	print("<td align = 'center'>$d</td>");
		
	/* print("<td width = '70px' align = 'center'><span class='btn-group'><a href = 'offeredit.php?catid=".$a."' class='btn btn-small' title='Edit' alt='Edit'><i class='icon-pencil'></i></a>");
	print("&nbsp;&nbsp;&nbsp;&nbsp;");
	 *///print("<a href='#myModal'  alt='Delete' title='Delete' role='button' data-toggle='modal'><i class='icon-remove'></i></a>");
	print("<td width = '70px' align = 'center'><a href = 'gallerydelete.php?catid=".$a."' class='btn btn-small' title='Delete' alt='Delete'><i class='icon-remove'></i></a>");
}


?>
				  
				  
				  
    	         </tbody>
            	</table>
            </div>
	  
	  
	  
	  
	  
                
            </div>

      

	</div><!--END WRAPPER

	<div id="load"><div id="spinner"></div></div>-->


	<?php
include("footer.php");
?>