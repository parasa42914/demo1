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

</head>
<style>
    input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #black;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 1px solid white;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
</style> 
<body id="body">

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
<section class="hero-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-lg-0">
				<div class="video-player">
					<img class="img-fluid rounded w-100" src="images/slider/video-player-thumb.jpg" alt="">
					<h2>Please select the Image</h2>
					<form action="">
						<button class="btn btn-main">Select Image</button>
					</form>
				</div>
			</div>
			<div class="col-lg-6 mb-4 mb-lg-0">
				<div class="block">
                    <!-- <p style="font-size:20px">The image is positive</p> -->
                    <!-- <form method="POST" action="./ver.php">
                    <input type="text" name="text" id="txt"></input>
					<Button onclick="checkForThreeRadioBtns()">submit</button>
                        
					</form>
					<script>
					function checkForThreeRadioBtns() {
						if ($('input[name=1]').is(':checked') && 
							$('input[name=2]').is(':checked') && 
							$('input[name=3]').is(':checked')) {
								 turnSubmitBlue();
						}
					 }</script> -->
                    <!-- <input type="radio" name="emotions" value="Happy" style="font-color:red">Happy<BR>
                    <input type="radio" name="emotions" value="Sad">Sad<BR>
                    <input type="radio" name="emotions" value="Anger">Anger
                    <br> 
                    
                    <button type="button" onclick="displayRadioValue()"> 
                        Submit 
                    </button> 
                    
                    <br> 
                    
                    <div id="result"></div> 
                    
                    <script> 
                        function displayRadioValue() { 
                            var ele = document.getElementsByName('emotions'); 
                            
                            for(i = 0; i < ele.length; i++) { 
                                if(ele[i].checked) 
                                document.getElementById("result").innerHTML
                                        = "Emotion: "+ele[i].value; 
                            } 
                        } 
                    </script>  -->
				</div>
			</div>
		</div>
	</div>
</section>	

</body>
</html>
