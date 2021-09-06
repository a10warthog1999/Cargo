<div id="slider">

	<div id="mover">

		<div id="slide-1" class="slide">
		
			<h1>Garden Rack</h1>
			
			<p>Donec gravida posuere arcu. Nulla facilisi. Phasellus imperdiet. Vestibulum at metus. Integer euismod. Nullam placerat rhoncus sapien. Ut euismod. Praesent libero. Morbi pellentesque libero sit amet ante. Maecenas tellus.</p>
			
			<a href="#"<img src="bmw3.jpg"></a>
			 <img src="bmwx1.jpg">
			 <img src="bmw5.jpg">
			
		</div>

		... additional slides follow format of this one, except no need for ID ... 
	
	</div>

</div>

<style>
#slider          { background: white url(../images/slider-bg.jpg); height: 227px; overflow: hidden;
                   position: relative; margin: 50px 0; }
#mover           { width: 2880px; position: relative; }
.slide           { padding: 40px 30px; width: 900px; float: left; position: relative; }
.slide h1        { font-family: Helvetica, Sans-Serif; font-size: 30px; letter-spacing: -1px;
                   color: #ac0000; }
.slide p         { color: #999; font-size: 12px; line-height: 22px; width: 300px; }
.slide img       { position: absolute; top: 20px; left: 400px; }
#slider-stopper  { position: absolute; top: 1px; right: 20px; background: #ac0000; color: white;
                   padding: 3px 8px; font-size: 10px; text-transform: uppercase; z-index: 1000;
                    }
                    </style>

                    <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
<script>
// SET THIS VARIABLE FOR DELAY, 1000 = 1 SECOND
var delayLength = 4000;

$(function() {

	$("#slider").append('Stop');

});

var $slide1 = $("#slide-1");

var panelWidth = $slide1.css("width");
var panelPaddingLeft = $slide1.css("paddingLeft");
var panelPaddingRight = $slide1.css("paddingRight");

panelWidth = parseFloat(panelWidth, 10);
panelPaddingLeft = parseFloat(panelPaddingLeft, 10);
panelPaddingRight = parseFloat(panelPaddingRight, 10);

panelWidth = panelWidth + panelPaddingLeft + panelPaddingRight;
	
var numPanels = $(".slide").length;
var tooFar = -(panelWidth * numPanels);

function doMove(panelWidth, tooFar) {
	var leftValue = $("#mover").css("left");
	
	// Fix for IE
	if (leftValue == "auto") { leftValue = 0; };
	
	var movement = parseFloat(leftValue, 10) - panelWidth;
	
	if (movement == tooFar) {
		$(".slide img").animate({
			"top": -200
		}, function() {
			$("#mover").animate({
				"left": 0
			}, function() {
				$(".slide img").animate({
					"top": 20
				});
			});
		});
	}
	else {
		$(".slide img").animate({
			"top": -200
		}, function() {
			$("#mover").animate({
				"left": movement
			}, function() {
				$(".slide img").animate({
					"top": 20
				});
			});
		});
	}
}

sliderIntervalID = setInterval(function(){
	doMove(panelWidth, tooFar);
}, delayLength);

$("#slider-stopper").click(function(){
	if ($(this).text() == "Stop") {
		clearInterval(sliderIntervalID);
	 	$(this).text("Start");
	}
	else {
		sliderIntervalID = setInterval(function(){
			doMove(panelWidth, tooFar);
		}, delayLength);
	 	$(this).text("Stop");
	}
});
</script>