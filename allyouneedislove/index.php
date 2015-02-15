<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All you need is love | Postcard Generator</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/allyouneedislove.css" />
	<script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    

    <div id="content" class="row">
   	    <form method="get" action="pdf.php">
        <!-- Grid Example -->
	        <div class="large-5 medium-5 small-12 columns">
    	    <h2>All<br />you need<br />is love</h2>
	        <p>Choose your favorite color and make a postcard for your loved ones. Print it on thick paper with your own printer. Or like I do, get it printed on high quality card stock with <a href="http://www.moo.com/share/d9s8qp" title="Use this link and you'll get 10% off your first order.">Moo</a> or at your local print shop.</p><br />
    	    <h6 class="propTitle">1. Choose a color</h6>
   	        <input type="hidden" name="color" id="color-input"/>
			<div class="container-border">
			    <div class="container" id="hueContainer">
			        <div class="bar" id="hueBar"></div>
			        <div class="dragEl" id="hueDragEl"></div>
			    </div>
			</div>
	        
	        <h6 class="propTitle" style="margin-bottom: 3em;">2. Add an extra line of text<br />if you want</h6>
        </div>
        
        <div class="row">
        	<div class="large-5 large-offset-1 medium-5 medium-offset-1 small-10 small-offset-1 columns">
        	<center>
        	<div id="postcard">
	        	<?php include("img/all-you-need-is-love-2.svg");?><br />
	        	<span id="allyouneedislove">All you need is love</span>
		        <input class="textline" type="text" name="line1" maxlength="36" size="36" placeholder="Add an extra line of text here..." /><br />
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

<script>
updateColor();
</script>

  </body>
</html>
