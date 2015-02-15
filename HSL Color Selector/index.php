<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>All you need is love | Postcard Generator</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

    <script src="js/modernizr.js"></script>

</head>

<body>

<div class="section group">
	<div class="col span_1_of_3">

		<h2 class="propTitle">All<br />you need<br />is love</h2>
		<p>Choose your favorite color and make a postcard for your loved or little ones. Use the pdf to get it printed at your local printer.<br />Or like I do, get it printed at <a href="http://www.moo.com/share/d9s8qp" title="Use this link and you'll get 10% off your first order.">Moo</a>.<br />
		
		
		
		<h3 class="propTitle">Choose a color</h3>
		<div class="container-border">
		    <div class="container" id="hueContainer">
		        <div class="bar" id="hueBar"></div>
		        <div class="dragEl" id="hueDragEl"></div>
		    </div>
		</div>
		<div class="logDiv" id="hueLogDiv">&nbsp;</div>
		
		  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
		  <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script><script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/utils/Draggable.min.js'></script>
		  
		<input type="submit" id="btn_submit" value="Generate pdf of your card" disabled/>
	</div>
	
	<div class="col span_2_of_3">
	<div id="postcard">
		<center>
	        	<?php include("img/all-you-need-is-love-2.svg");?><br />
		</center>
	</div>
	</div>
	
</div>

<div id="footer">
Built by <a href="https://twitter.com/evStyleDesign">@evStyle</a> and <a href="https://twitter.com/aurelient">@aurelient</a>.</small>
</div>


<script src="js/index.js"></script>

</body>

</html>