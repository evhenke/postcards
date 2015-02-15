<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All you need is love | Postcard Generator</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/allyouneedislove.css" />
	<script src="js/vendor/modernizr.js"></script>
	<script src="js/colorpicker.js"></script>
	<!--script src="js/colorslider.js"></script-->
  </head>
  <body>
    

    <div id="content" class="row">
   	    <form method="get" action="pdf.php">
        <!-- Grid Example -->
	        <div class="large-5 medium-5 small-12 columns">
    	    <h2>All<br />you need<br />is love</h2>
	        <p>Choose your favorite color and make a postcard for your loved or little ones. Use the pdf to get it printed at your local printer.<br />Or like I do, get it printed at <a href="http://www.moo.com/share/d9s8qp" title="Use this link and you'll get 10% off your first order.">Moo</a>.</p><br />
    	    <label>1. Choose a color</label><br />
	        <input type="hidden" name="color" id="color-input"/>
	        <?php include 'colorpicker.php';?>
	        <!--?php include 'colorslider.php';?-->
	        
	        <!-- Even Button Groups >
	        <ul class="button-group even five-up">
		        <li><a id="dark" title="dark" href="#" name="color" value="145-152-167" class="button"></a></li>
		        <li><a id="light" title="light" href="#" name="color" value="227-227-230" class="button"></a></li>
		        <li><a id="gold" title="gold" href="#" name="color" value="217-195-122" class="button"></a></li>
		        <li><a id="pink" title="pink" href="#" name="color" value="218-179-212" class="button"></a></li>
		        <li><a id="mint" title="mint" href="#" name="color" value="216-237-226" class="button"></a></li>
	        </ul-->
	        <label>2. Add an extra line of text if you want</label><br />
        </div>
        
        <div class="row">
        	<div class="large-5 large-offset-1 medium-5 medium-offset-1 small-10 small-offset-1 columns">
        	<center>
        	<div id="postcard">
	        	<?php include("img/all-you-need-is-love-2.svg");?><br />
	        	<span id="allyouneedislove">All you need is love</span>
		        <input class="textline" type="text" name="line1" maxlength="36" size="36" placeholder="Add an extra line of text here..." /><br />
	        </div>
	        <input type="submit" id="create" value="Generate pdf of your card" disabled/>
        	</center>
	        </div>
        </div>
        </form>
	</div>
	

	<footer class="row">
        <small>Built by <a href="https://twitter.com/evStyleDesign">@evStyle</a> and <a href="https://twitter.com/aurelient">@aurelient</a>.</small>
    </footer>
				       

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    
    <script>
      $(document).foundation();
      
//      $(.)
      
	  $( ".button" ).hover(function(event) {
		console.log(event.target.id);
		$("#color-input").val(event.target.id);
//		console.log($("#color-input").val()));
		switch(event.target.id) {
			case "dark" :
				txtColor= "#9198A7";
				break;
			case "light" : 
				txtColor= "#E3E3E6";
				break;
			case "gold" :
				txtColor= "#D9C37A";
				break;
			case "pink" : 
				txtColor= "#DAB3D4";
				break;
			case "mint" :
				txtColor= "#D8EDE2";
				break;
		}
		document.body.style.color= txtColor;
		$("#allyouneedislove").css("color",txtColor);
		$("input").css("color",txtColor);
		$("#create").css("border-color",txtColor);	
        $("#create").removeAttr('disabled');
	  });
    </script>
  </body>
</html>
