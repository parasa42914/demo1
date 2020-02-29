<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" >
  <meta name="author">

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <!-- CSS-->
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>


</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:700,300);
    
.bg-img {
  /* The image used */
  background-image: url("img1.jpg");
  min-height: 700px;
  /* Center and scale the image nicely */
  background-position: center;
  margin: 0px 0px 0px 0px;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.frame {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 400px;
	height: 400px;
	margin-top: 100px;
	margin-left: -200px;
	border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
	overflow: hidden;
	background: linear-gradient(to top left, cyan 0%, violet 100%);
	color: #333;
	font-family: "Open Sans", Helvetica, sans-serif;
}

.center {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 300px;
	height: 260px;
	border-radius: 3px;
	box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
	background: #fff;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}

.title {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #999;
	text-align: center;
}

h1 {
	font-size: 16px;
	font-weight: 300;
	color: #666;
}

.dropzone {
	width: 100px;
	height: 80px;
	border: 1px dashed #999;
	border-radius: 3px;
	text-align: center;
}

.upload-icon {
	margin: 25px 2px 2px 2px;
}

.upload-input {
	position: relative;
	top: -62px;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
}

.btn {
	display: block;
	width: 140px;
	height: 40px;
	background: darkmagenta;
	color: #fff;
	border-radius: 3px;
	border: 0;
	box-shadow: 0 3px 0 0 hotpink;
	transition: all 0.3s ease-in-out;
	font-size: 14px;
}

.btn:hover {
	background: rebeccapurple;
	box-shadow: 0 3px 0 0 deeppink;
}

</style> 
<body id="body" >

<!--
Start Preloader
==================================== -
<div id="preloader">
  <div class="preloader">
    <div class="sk-circle1 sk-child"></div>
    <div class="sk-circle2 sk-child"></div>
    <div class="sk-circle3 sk-child"></div>
    <div class="sk-circle4 sk-child"></div>
    <div class="sk-circle5 sk-child"></div>
    <div class="sk-circle6 sk-child"></div>
    <div class="sk-circle7 sk-child"></div>
    <div class="sk-circle8 sk-child"></div>
    <div class="sk-circle9 sk-child"></div>
    <div class="sk-circle10 sk-child"></div>
    <div class="sk-circle11 sk-child"></div>
    <div class="sk-circle12 sk-child"></div>
  </div>
</div> 
<!--
End Preloader
==================================== -->
 <!--
Welcome Slider
==================================== -->
<!-- <section class="hero-area"> -->

<div class="bg-img">
<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-lg-0">
                <div class="frame">
                    <div class="center">
                        <div class="title">
                            <h1>Drop file to upload</h1>
                        </div>

                        <div class="dropzone">
                            <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                            <input type="file" class="upload-input" />
                        </div>

                        <button type="button" class="btn" name="uploadbutton">Upload file</button>

                    </div>
                </div>
			</div>
			<div class="col-lg-6 mb-4 mb-lg-0">
                <div class="frame">
                    <div class="center">
                        <div class="title">
                            <h1>Open Webcam</h1>
                        </div>

                        <div class="dropzone pt2">
                            <img src="img2.png" class="image-fluid w-75 h-75 mt-2"/>
                            <input type="file" class="upload-input" />
                        </div>

                        <button type="button" class="btn" name="uploadbutton">Webcam</button>

                    </div>
                </div>
			</div>
		</div>
    </div>
</div>
<!-- </section> -->

</body>
</html>
