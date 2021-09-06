<html>
	<head>
		<title>BMW Series</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
body { margin: 0; }

.container {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}


[data-am-gallery] {
 position: relative;
 width: 100%;
 height: 100%;
 background-color: #fff;
/* Navigation */
}

[data-am-gallery] input[type="radio"] {
  position: fixed;
  top: -9999px;
}
[data-am-gallery] input[type="radio"]:checked:nth-child(6) ~ .images .image:nth-child(6) { opacity: 1; }
[data-am-gallery] input[type="radio"]:checked:nth-child(6) ~ .navigation .dot:nth-child(6) { background-color: #29acbb; }
[data-am-gallery] input[type="radio"]:checked:nth-child(6) ~ .navigation .dot:nth-child(6):hover { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(5) ~ .images .image:nth-child(5) { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(5) ~ .navigation .dot:nth-child(5) { background-color: #29acbb; }

[data-am-gallery] input[type="radio"]:checked:nth-child(5) ~ .navigation .dot:nth-child(5):hover { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(4) ~ .images .image:nth-child(4) { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(4) ~ .navigation .dot:nth-child(4) { background-color: #29acbb; }

[data-am-gallery] input[type="radio"]:checked:nth-child(4) ~ .navigation .dot:nth-child(4):hover { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(3) ~ .images .image:nth-child(3) { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(3) ~ .navigation .dot:nth-child(3) { background-color: #29acbb; }

[data-am-gallery] input[type="radio"]:checked:nth-child(3) ~ .navigation .dot:nth-child(3):hover { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(2) ~ .images .image:nth-child(2) { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(2) ~ .navigation .dot:nth-child(2) { background-color: #29acbb; }

[data-am-gallery] input[type="radio"]:checked:nth-child(2) ~ .navigation .dot:nth-child(2):hover { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(1) ~ .images .image:nth-child(1) { opacity: 1; }

[data-am-gallery] input[type="radio"]:checked:nth-child(1) ~ .navigation .dot:nth-child(1) { background-color: #29acbb; }

[data-am-gallery] input[type="radio"]:checked:nth-child(1) ~ .navigation .dot:nth-child(1):hover { opacity: 1; }

[data-am-gallery] .image {
  
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: opacity 400ms ease;
  transition: opacity 400ms ease;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

[data-am-gallery] .navigation {
  position: absolute;
  bottom: 15px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}

[data-am-gallery] .dot {
  display: inline-block;
  width: 15px;
  height: 15px;
  margin: 0 2px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.8);
  cursor: pointer;
  -webkit-transition: opacity 200ms ease;
  transition: opacity 200ms ease;
}

[data-am-gallery] .dot:hover { opacity: 0.8; }
</style>
</head>
	<body>
    <div class="container">
      
  
  <div data-am-gallery>

    <!-- Radio -->
    <input type="radio" name="gallery" id="img-1" checked />
    <input type="radio" name="gallery" id="img-2" />
    <input type="radio" name="gallery" id="img-3" />
     <input type="radio" name="gallery" id="img-4" />
      <input type="radio" name="gallery" id="img-5" />
       <input type="radio" name="gallery" id="img-6" />

    <!-- Images -->
    <div class="images">
      <div class="image" style="background-image: url(bmw3.jpg);">BMW3</div>
      <div class="image"  style="background-image: url(bmwx1.jpg);">BMW X1</div>
      <div class="image" style="background-image: url(bmw5.jpg);">BMW 5</div>
       <div class="image"  style="background-image: url(bmwz4.jpg);">BMW Z4</div>
        <div class="image" style="background-image: url(bmwm4.jpg);">BMW M4</div>
        <div class="image" style="background-image: url(bmwi8.jpg);">BMW I8</div>
    </div>

    <!-- Navigation -->
    <div class="navigation">
      <label class="dot" for="img-1"></label>
      <label class="dot" for="img-2"></label>
      <label class="dot" for="img-3"></label>
       <label class="dot" for="img-4"></label>
        <label class="dot" for="img-5"></label>
         <label class="dot" for="img-6"></label>
    </div>

  </div>

  
</div>
    
	
	</body>
	</html>