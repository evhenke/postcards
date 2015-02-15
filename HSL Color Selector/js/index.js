/*
-----------------------------------------
		COMPLETE HSL OBJECT
-----------------------------------------
*/
var colorHSL = {h:18, s:70, l:60};


/*
-----------------------------------------
		HUE SLIDER - BAR
-----------------------------------------
*/
var hueContainer = $("div#hueContainer"),
    hueDragEl = $("div#hueDragEl"),
    hueBar = $("div#hueBar"),
    hueLogDiv = $("div#hueLogDiv"),
    hueCurrentLeft,hueCurrentPosition,hueDraggable,
    leftLimit = hueContainer.width() - hueDragEl.width();

hueLogDiv.html('0');

hueDraggable = Draggable.create(hueDragEl,
{
	type:'left',
	bounds:hueContainer,
	edgeResistance:1,
	onDrag:function()
	{
		hueCurrentLeft = this.x;
		hueCurrentPosition = Math.round( (hueCurrentLeft / leftLimit) * 360 );
		hueLogDiv.html(hueCurrentPosition);
		TweenLite.set(hueBar, {width:this.x + 10});
		colorHSL.h = hueCurrentPosition;
		updateColor();
	}
});


/*
-----------------------------------------
		SATURATION SLIDER - BAR
-----------------------------------------

var satContainer = $("div#satContainer"),
    satDragEl = $("div#satDragEl"),
    satBar = $("div#satBar"),
    satLogDiv = $("div#satLogDiv"),
    satCurrentLeft,satCurrentPosition,satDraggable;

TweenLite.set(satDragEl, {left:leftLimit});
TweenLite.set(satBar, {width:leftLimit + 10});
satLogDiv.html('100');

satDraggable = Draggable.create(satDragEl,
{
	type:'left',
	bounds:satContainer,
	edgeResistance:1,
	onDrag:function()
	{
		satCurrentLeft = this.x;
		satCurrentPosition = Math.round( (satCurrentLeft / leftLimit) * 100 );
		satLogDiv.html(satCurrentPosition);
		TweenLite.set(satBar, {width:this.x + 10});
		colorHSL.s = satCurrentPosition;
		updateColor();
	}
});
*/

/*
-----------------------------------------
		LUMINOSITY SLIDER - BAR
-----------------------------------------

var lumContainer = $("div#lumContainer"),
    lumDragEl = $("div#lumDragEl"),
    lumBar = $("div#lumBar"),
    lumLogDiv = $("div#lumLogDiv"),
    lumCurrentLeft,lumCurrentPosition,lumDraggable;

TweenLite.set(lumDragEl, {left:leftLimit / 2});
TweenLite.set(lumBar, {width:( (leftLimit / 2) + 10 )});
lumLogDiv.html('50');

lumDraggable = Draggable.create(lumDragEl,
{
	type:'left',
	bounds:lumContainer,
	edgeResistance:1,
	onDrag:function()
	{
		lumCurrentLeft = this.x;
		lumCurrentPosition = Math.round( (lumCurrentLeft / leftLimit) * 100 );
		lumLogDiv.html(lumCurrentPosition);
		TweenLite.set(lumBar, {width:this.x + 10});
		colorHSL.l = lumCurrentPosition;
		updateColor();
	}
});
*/

function updateColor()
{
	newColor = 'hsl(' + colorHSL.h + ',' + colorHSL.s + '%,' + colorHSL.l + '%)';
	
	$("div.bar").css('background-color',newColor);  
  	$("h3.propTitle").css('color', newColor);
  	$("h2").css('color', newColor);
  	$(".heart1").css('fill','hsl(' + colorHSL.h + ',' + 60 + '%,' + 50 + '%)');
  	$(".heart2").css('fill','hsl(' + colorHSL.h + ',' + 65 + '%,' + 54 + '%)');
  	$(".heart3").css('fill','hsl(' + colorHSL.h + ',' + 60 + '%,' + 58 + '%)');
  	$(".heart4").css('fill','hsl(' + colorHSL.h + ',' + 65 + '%,' + 62 + '%)');
  	$(".heart5").css('fill','hsl(' + colorHSL.h + ',' + 70 + '%,' + 70 + '%)');
}


updateColor();