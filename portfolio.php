<?php
include 'header.php';
?>


				<div class="navbar navbar-fixed-top" role="navigation">
					

			<div class="container">
					<div class="navbar-header">
					<!-- COLLAPSE BUTTON -->
						 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars fa-2x"></i>
						</button>
						<!-- LOGO -->
					<div id="mylogol"><a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" /></a> </div>
					
					</div>
					<div class="navbar-collapse collapse">
					
						<!-- MENU -->
						<ul style="margin-right:0px;" class="nav navbar-nav navbar-right">
							<li>
							<a  href="index.php">Home</a>					
							</li>
							<li><a href="about.php">About</a>
								
							</li>
							<li><a href="services.php">Services</a>
							</li>
							<li><a class="active" href="portfolio.php">Portfolio</a>
							</li>
							<li><a href="contact.php">Contact</a>
							</li>
						</ul>
						</div>
							</div>
						</div>
					</header>
				<!-- //HEADER -->
		
		<!-- REVOLUTION SLIDER -->
	<!--page-->
  <!--work container-->		
				<div class="container pad90">
	<div class="col-md-12">
<ul class="media-boxes-filter" id="filter">
					<li><a class="selected" href="#" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".Poster">Creatives</a></li>
					<li><a href="#" data-filter=".Brochure">Brochure</a></li>
				<li><a href="#" data-filter=".Pack">Packaging</a></li>
					<li><a href="#" data-filter=".Others">Others</a></li>
					</ul>
	
	<div id="work1">

	<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	include 'db.php';
    
	$results = mysqli_query($con,"SELECT * FROM gallery order by id");
	//$results = $mysqli->query("SELECT * FROM  `product` WHERE procategory = '" . $myvar . "'");
	
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
		$catid=''.$obj->id.'';
		
		$f=''.$obj->category.'';
		
		echo' <div  class="media-box '.$f.'">
	            <div class="media-box-image">
	                <div data-width="570px" data-height="380px" data-thumbnail="http://www.sparksdesignsolutions.com/admin/gallery/'.$obj->simage.'"></div>
	                <div data-popup="http://www.sparksdesignsolutions.com/admin/galleryd/'.$obj->bimage.'"></div>
	                
	                <div class="thumbnail-overlay">
                      	<i id="hide" class="fa fa-plus mb-open-popup"></i>
                     
	                </div>
	            </div>
			 </div>';
		
					
        }
    
    }
    ?>
	
	

		</div> <!-- #work -->
	</div>
		</div><!-- #container --> 
	
	<!--<div class="push"></div>-->
		</div>

<?php include("footer.php"); ?>