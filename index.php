<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">    
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <style>
          #map{
              top:100px;
              height: 600px;
              border-radius: 20px;
          }
      </style>
    <?php
		
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db_name = "location";
 
		$con = new mysqli($host, $user, $pass, $db_name);
		?>
    </head>
  <body>
      
<div class="area" >          
 <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    <div id="map"></div>   
    
    <br><br><br><br>
         <div class="menu">
            <ul>
                <li><a href="LoginRegistrationForm/index2.html" class="register-btn"><span>Sign Up for notifications</span></a></li>
                <li><a href="Chat1/index.php" class="register-btn"><span>Distress Chat</span></a></li>
                <li><a href="javascript:sendEmail()" class="register-btn"><span>Distress signal</span></a></li>
            </ul>
         </div>
      <div id="slideshow">
  <div class="slide-wrapper">
    <div class="slide"><img src="1.jpeg"></div>
    <div class="slide"><img src="2.jpg"></div>
    <div class="slide"><img src="5.webp"></div>
    <div class="slide"><img src="4.jpeg"></div>
  </div>
</div>      
      </div>
      <div class="social-icons">
            <ul>
                <li><i class="fa fa-phone-square" aria-hidden="true" style="font-size: 25px"></i> <p>Emergency contacts</p></li>
                <li> <i class="fa fa-ambulance" aria-hidden="true" style="font-size: 25px"></i><p>Ambulance<br>108</p></li>
                <li><img src="pol.png" height=25px><p>Police<br>100</p></li>
                <li><img src="ff.png" height=25px><p>Fire service<br>101</p></li>
            </ul>
    </div>
       <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 13.0827, lng: 80.2707},
          mapTypeId: 'terrain'
        });
          var cityCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.6,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
			center:{lat: 13.0827, lng: 80.23},
            radius: 8000
          });
          var cityCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
            center: {lat: 13.0, lng: 79.23},
            radius: 8000
          }); 
          var cityCircle = new google.maps.Circle({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: map,
            center: {lat: 12.59, lng: 79.87},
            radius: 8000
          });
      }
		function sendEmail() {
			Email.send({
				Host: "smtp.gmail.com",
				Username : "suryasivaram357@gmail.com",
				Password : "password357",
				To : 'rocknithesh@gmail.com',
				From : "suryasivaram357@gmail.com",
				Subject : "Distress Call!",
				Body : "Calamity Detected.",
			})
			.then(function(message){
				alert("mail sent successfully")
			});
		}
	</script>
	
      <script src="https://smtpjs.com/v3/smtp.js"></script> 
	   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUoqWDMGwYsnCb-TQO7hzuYjMOtXF_VEY&callback=initMap">
    </script> 
  </body>
</html>
