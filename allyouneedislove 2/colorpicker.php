<div style="position:relative;height:286px;width:531px;font-size: small;margin-bottom:2em;">
  <div id="gradientBox" style="cursor:crosshair;position:absolute;top:15px;width:256px;height:256px;">
    <img id="gradientImg" style="display:block;width:256px;height:256px;" src="img/colorpicker/color_picker_gradient.png" />
    <img id="circle" style="position:absolute;height:11px;width:11px;" src="img/colorpicker/color_picker_circle.gif" />
  </div>
  <div id="hueBarDiv" style="position:absolute;left:274px;width:8px;height:256px;top:15px;">
    <img style="position:absolute;height:256px;width:19px;" src="img/colorpicker/color_picker_bar.png" />
    <img id="arrows" style="position:absolute;height:9px;width:35px;left:0px;" src="img/colorpicker/color_picker_arrows.gif" />
    <br />
  </div>
  <div style="position:absolute;left:300px;width:145px;height:256px;top:15px;">
  <div style="position:absolute;height:40px;width:150px;top:0px;left:0px;">
    <div id="quickColor" style="position:absolute;height:40px;width:80px;top:0px;left:0px;"></div>
    <div id="staticColor" style="position:absolute;height:40px;width:80px;top:0px;left:73px;"></div>
  </div>
  <br />
<table width="100%" style="position:absolute;top:48px;">
    <tr>
      <td>Hex: </td>
      <td>
        <input style="margin:0.2em;" size="8" type="text" id="hexBox" onchange="hexBoxChanged();" />
      </td>
    </tr>
    <tr>
      <td>Red: </td>
      <td>
        <input style="margin:0.2em;" size="8" type="text" id="redBox" onchange="redBoxChanged();" />
      </td>
    </tr>
    <tr>
      <td>Green: </td>
      <td>
        <input style="margin:0.2em;" size="8" type="text" id="greenBox" onchange="greenBoxChanged();" />
      </td>
    </tr>
    <tr>
      <td>Blue: </td>
      <td>
        <input style="margin:0.2em;" size="8" type="text" id="blueBox" onchange="blueBoxChanged();" />
      </td>
    </tr>
    <tr>
      <td>Hue: </td>
      <td>
        <input style="margin:0.2em;" size="8" type="text" id="hueBox" onchange="hueBoxChanged();" />
      </td>
    </tr>
    <tr>
      <td>Saturation: </td>
      <td>
        <input style="margin:0.2em;" size="8" type="text" id="saturationBox" onchange="saturationBoxChanged();" />
      </td>
    </tr>
    <tr>
      <td>Value: </td>
      <td>
        <input style="margin:0.2em;" size="8" type="text" id="valueBox" onchange="valueBoxChanged();" />
      </td>
    </tr>
  </table>
  </div>
</div>
</center>
<script type="text/javascript">
fixGradientImg();
var currentColor = Colors.ColorFromRGB(237,31,36);
new dragObject("arrows", "hueBarDiv", arrowsLowBounds, arrowsUpBounds, arrowsDown, arrowsMoved, endMovement);
new dragObject("circle", "gradientBox", circleLowBounds, circleUpBounds, circleDown, circleMoved, endMovement);
colorChanged('box');
</script>