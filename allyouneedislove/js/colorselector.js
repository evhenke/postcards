/*
-----------------------------------------
		COMPLETE HSL OBJECT
-----------------------------------------
*/
var colorHSL = {h:1, s:65, l:70};


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
*/
/*
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
*/
/*
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
	console.log(newColor);
	$("div.bar").css('background-color', newColor);
	$("h2").css('color', newColor);
	$("#allyouneedislove").css('color',newColor);
	$("#create").css('border-color',newColor);	
    $("#create").removeAttr('disabled');
	$(".heart1").css('fill',newColor);
  	$(".heart2").css('fill','hsl(' + colorHSL.h + ',' + 58 + '%,' + 70 + '%)');
  	$(".heart3").css('fill','hsl(' + colorHSL.h + ',' + 65 + '%,' + 75 + '%)');
  	$(".heart4").css('fill','hsl(' + colorHSL.h + ',' + 58 + '%,' + 75 + '%)');
  	$(".heart5").css('fill','hsl(' + colorHSL.h + ',' + 65 + '%,' + 80 + '%)');

	$("#color-input").val(""+ colorHSL.h + ',' + colorHSL.s + ',' + colorHSL.l);

  	$("#btn_submit").css('color',newColor);
	$("#btn_submit").css('border-color',newColor);
	$("#btn_submit").mouseover(function(){
		$(this).css('background-color',newColor);
		$(this).css('color',"#F7F7F7");
	}).mouseout(function() {
		$(this).css('color',newColor);
	   	$(this).css("background-color","transparent");
	});
	
}


