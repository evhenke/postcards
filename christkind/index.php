<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>May all your wishes come true | Postcard Generator</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/christkind.css" />
    <link href='http://fonts.googleapis.com/css?family=Sue+Ellen+Francisco' rel='stylesheet' type='text/css'>
	<script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    

    <div id="content" class="row">
   	    <form method="get" action="pdf.php">
        <!-- Grid Example -->
	        <div class="large-5 medium-5 small-12 columns">
    	    <h2>May all<br />your wishes<br />come true</h2>
	        <p>You still have some wishes left for Christmas? Hurry and send a postcard to Santa Claus!</p>
    	   	<h6>1. Fill out the postcard</h6>
	        <h6>2. Print the postcard on heavy paper</h6>
	        <h6>3. Put a stamp on and send it off!</h6>
	        <h6 class="propTitle" style="margin-top: 5em;">P.S. If you'd like to hear back from Santa, make sure to put your address on the postcard!<br />Make also sure to share your wishes via #dearsanta</h6>
        </div>
        
        <div class="row">
        	<div class="large-5 large-offset-1 medium-5 medium-offset-1 small-10 small-offset-1 columns">
        	<center>
        	<div id="postcard">
	        	<!--?php include("img/all-you-need-is-love-2.svg");?><br /-->
	        	<span id="liebes_christkind">Dear Santa Claus</span>
	        	<textarea class="textline" cols="44" rows="4" placeholder="May I please have..." /></textarea>
	        	
	        	<div id="adresse_christkind">
		        	<span id="line1">Santa Claus</span><br />
		        	<span id="line2">Joulupukin Pajakylä</span><br />
		        	<span id="line3">Tähtikuja 1</span><br />
		        	<span id="line4">FI-96930 Arctic Circle</span>
	        	</div>
	        </div>
	        <input type="submit" id="btn_submit" value="Generate pdf of your card" />
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
    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/utils/Draggable.min.js'></script>
	
	
    
<script>
$(document).foundation();
</script>
	
	<script src='js/colorselector.js'></script>	

  </body>
</html>
