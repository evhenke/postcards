<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landed Postcard Generator</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/landed.css" />
	<script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    

    <div id="content" class="row">
   	    <form method="get" action="pdf.php">
        <!-- Grid Example -->
	        <div class="large-5 medium-5 small-12 columns">
    	    <h2>Landed</h2>
        	<h4>Postcard Generator</h4>
	        <p>A few hours after German astronaut Alexander Gerst <a title="Amazing astronaut" href="https://twitter.com/Astro_Alex">@Astro-Alex</a> came back to Earth, my little nephew landed on Earth too!<br />I made this little Welcome to Earth postcard based on the Krtek character by the Czech illustrator Miler.<br /> Make your own Mole postcard for your little ones. Use the pdf to get it printed at your local printer. Or like Ido, get it printed at <a href="http://www.moo.com/share/d9s8qp" title="Use this link and you'll get 10% off your first order.">Moo</a>.</p><br />
    	    <label>1. Choose your color</label><br />
	        <input type="hidden" name="color" id="color-input"/>
	        <!-- Even Button Groups -->
	        <ul class="button-group even five-up">
		        <li><a id="dark" title="dark" href="#" name="color" value="145-152-167" class="button"></a></li>
		        <li><a id="light" title="light" href="#" name="color" value="227-227-230" class="button"></a></li>
		        <li><a id="gold" title="gold" href="#" name="color" value="217-195-122" class="button"></a></li>
		        <li><a id="pink" title="pink" href="#" name="color" value="218-179-212" class="button"></a></li>
		        <li><a id="mint" title="mint" href="#" name="color" value="216-237-226" class="button"></a></li>
	        </ul>
	        <label>2. Personalize the text on the card &rarr;</label><br />
	        
	        <input type="submit" id="create" value="Generate your pdf" disabled/>
        </div>
        
        <div class="row">
        	<div class="large-5 large-offset-1 medium-5 medium-offset-1 small-10 small-offset-1 columns">
        	<center>
        	<div id="postcard">
	        	<img src="img/kleiner-maulwurf.png" /><br />
	    	    <input class="textline" type="text" name="line1" maxlength="36" size="36" placeholder="Type your text here"><br />
		        <input class="textline" type="text" name="line2" maxlength="36" size="36" placeholder="and here" /><br />
	        </div>
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
				bgColor = "#9198A7"; 
				txtColor= "#D9C37A";
				break;
			case "light" :
				bgColor = "#E3E3E6"; 
				txtColor= "#72747A";
				break;
			case "gold" :
				bgColor = "#D9C37A"; 
				txtColor= "#fff";
				break;
			case "pink" :
				bgColor = "#DAB3D4"; 
				txtColor= "#F2F1F2";
				break;
			case "mint" :
				bgColor = "#D8EDE2"; 
				txtColor= "#72747A";
				break;
		}
		document.body.style.backgroundColor = bgColor; 
		document.body.style.color= txtColor;
		$("h4").css("background-color",bgColor);
		$("h4").css("color",txtColor);
		$("h2").css("background-color",bgColor);
		$("h2").css("color",txtColor);
		$("input").css("background-color",bgColor);
		$("input").css("color",txtColor);
		$("#create").css("border-color",txtColor);	
        $("#create").removeAttr('disabled');
	  });
    </script>
  </body>
</html>
