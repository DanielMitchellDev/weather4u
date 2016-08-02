<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Weather4U</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid" id="holder">
		<div class="row">
			<h1 class="text-center">Weather For <?php echo $_SESSION['cityName']; ?></h1>
			<h2 class="text-center">Your 7 Day Forecast</h2>
		</div>

		<!-- day 1 -->	
		<div class="row">	
			<div class="panel panel-default col-md-4 col-md-offset-4 plate">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center"><?php echo $_SESSION['date1']; ?></h3>
			  	</div>
			  	<div class="panel-body">
					<h1 class="main-temp text-center"><div class="fix"><?php echo $_SESSION['dayTemp1']  . '&#176;'; ?></div></h1>
					<img class="img-responsive center-block" src="" id="pic1">
					<h3 class="text-center main-weather" id="day1"><?php echo $_SESSION['weather1']; ?></h3>
					<div class="row">
						<h3 class="col-md-4 text-center main-min">Min</h3>
						<h4 class="col-md-4 text-center main-humidity">Humidity</h4>
						<h3 class="col-md-4 text-center main-max">Max</h3>
			  		</div>

					<div class="row">
						<h3 class="col-md-4 text-center main-min-value"><div class="fix1"><?php echo $_SESSION['minTemp1'] . '&#176;'; ?></div></h3>
						<h4 class="col-md-4 text-center main-humidity-value"><div class="fix2"><?php echo $_SESSION['humidity1'] . '%'; ?></div></h4>
						<h3 class="col-md-4 text-center main-max-value"><div class="fix3"><?php echo $_SESSION['maxTemp1'] . '&#176;'; ?></div></h3>
			  		</div>
				</div><!--end of panel body -->
			</div><!--end of panel-->
		</div>	
		<!--day 2 -->
		<div class="row">
			<div class="panel panel-default col-md-4 col-md-offset-4 plate">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center"><?php echo $_SESSION['date2']; ?></h3>
			  	</div>
			  	<div class="panel-body">
					<h1 class="main-temp text-center"><div class="fix"><?php echo $_SESSION['dayTemp2']  . '&#176;'; ?></div></h1>
					<img class="img-responsive center-block" src="" id="pic2">
					<h3 class="text-center main-weather" id="day2"><?php echo $_SESSION['weather2']; ?></h3>

					<div class="row">
						<h3 class="col-md-4 text-center main-min">Min</h3>
						<h4 class="col-md-4 text-center main-humidity">Humidity</h4>
						<h3 class="col-md-4 text-center main-max">Max</h3>
			  		</div>

					<div class="row">
						<h3 class="col-md-4 text-center main-min-value"><div class="fix1"><?php echo $_SESSION['minTemp2'] . '&#176;'; ?></div></h3>
						<h4 class="col-md-4 text-center main-humidity-value"><div class="fix2"><?php echo $_SESSION['humidity2'] . '%'; ?></div></h4>
						<h3 class="col-md-4 text-center main-max-value"><div class="fix3"><?php echo $_SESSION['maxTemp2'] . '&#176;'; ?></div></h3>
			  		</div>
				</div><!-- end of panel body -->
			</div><!-- end of panel -->
		</div>
		<!--day 3 -->
		<div class="row">
			<div class="panel panel-default col-md-4 col-md-offset-4 plate">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center"><?php echo $_SESSION['date3']; ?></h3>
			  	</div>
			  	<div class="panel-body">
					<h1 class="main-temp text-center"><div class="fix"><?php echo $_SESSION['dayTemp3']  . '&#176;'; ?></div></h1>
					<img class="img-responsive center-block" src="" id="pic3">
					<h3 class="text-center main-weather" id="day3"><?php echo $_SESSION['weather3']; ?></h3>

					<div class="row">
						<h3 class="col-md-4 text-center main-min">Min</h3>
						<h4 class="col-md-4 text-center main-humidity">Humidity</h4>
						<h3 class="col-md-4 text-center main-max">Max</h3>
			  		</div>

					<div class="row">
						<h3 class="col-md-4 text-center main-min-value"><div class="fix1"><?php echo $_SESSION['minTemp3'] . '&#176;'; ?></div></h3>
						<h4 class="col-md-4 text-center main-humidity-value"><div class="fix2"><?php echo $_SESSION['humidity3'] . '%'; ?></div></h4>
						<h3 class="col-md-4 text-center main-max-value"><div class="fix3"><?php echo $_SESSION['maxTemp3'] . '&#176;'; ?></div></h3>
			  		</div>
				</div><!-- end of panel body -->
			</div><!-- end of panel -->
		</div>

		<!--day 4 -->
		<div class="row">
			<div class="panel panel-default col-md-4 col-md-offset-4 plate">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center"><?php echo $_SESSION['date4']; ?></h3>
			  	</div>
			  	<div class="panel-body">
					<h1 class="main-temp text-center"><div class="fix"><?php echo $_SESSION['dayTemp4']  . '&#176;'; ?></div></h1>
					<img class="img-responsive center-block" src="" id="pic4">
					<h3 class="text-center main-weather" id="day4"><?php echo $_SESSION['weather4']; ?></h3>

					<div class="row">
						<h3 class="col-md-4 text-center main-min">Min</h3>
						<h4 class="col-md-4 text-center main-humidity">Humidity</h4>
						<h3 class="col-md-4 text-center main-max">Max</h3>
			  		</div>

					<div class="row">
						<h3 class="col-md-4 text-center main-min-value"><div class="fix1"><?php echo $_SESSION['minTemp4'] . '&#176;'; ?></div></h3>
						<h4 class="col-md-4 text-center main-humidity-value"><div class="fix2"><?php echo $_SESSION['humidity4'] . '%'; ?></div></h4>
						<h3 class="col-md-4 text-center main-max-value"><div class="fix3"><?php echo $_SESSION['maxTemp4'] . '&#176;'; ?></div></h3>
			  		</div>
				</div><!-- end of panel body -->
			</div><!-- end of panel -->
		</div>
		
		<!-- day 5 -->
		<div class="row">
			<div class="panel panel-default col-md-4 col-md-offset-4 plate">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center"><?php echo $_SESSION['date5']; ?></h3>
			  	</div>
			  	<div class="panel-body">
					<h1 class="main-temp text-center"><div class="fix"><?php echo $_SESSION['dayTemp5']  . '&#176;'; ?></div></h1>
					<img class="img-responsive center-block" src="" id="pic5">
					<h3 class="text-center main-weather" id="day5"><?php echo $_SESSION['weather5']; ?></h3>

					<div class="row">
						<h3 class="col-md-4 text-center main-min">Min</h3>
						<h4 class="col-md-4 text-center main-humidity">Humidity</h4>
						<h3 class="col-md-4 text-center main-max">Max</h3>
			  		</div>

					<div class="row">
						<h3 class="col-md-4 text-center main-min-value"><div class="fix1"><?php echo $_SESSION['minTemp5'] . '&#176;'; ?></div></h3>
						<h4 class="col-md-4 text-center main-humidity-value"><div class="fix2"><?php echo $_SESSION['humidity5'] . '%'; ?></div></h4>
						<h3 class="col-md-4 text-center main-max-value"><div class="fix3"><?php echo $_SESSION['maxTemp5'] . '&#176;'; ?></div></h3>
			  		</div>
				</div><!-- end of panel body -->
			</div><!-- end of panel -->
		</div>

		<!-- day 6 -->
		<div class="row">
			<div class="panel panel-default col-md-4 col-md-offset-4 plate">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center"><?php echo $_SESSION['date6']; ?></h3>
			  	</div>
			  	<div class="panel-body">
					<h1 class="main-temp text-center"><div class="fix"><?php echo $_SESSION['dayTemp6']  . '&#176;'; ?></div></h1>
					<img class="img-responsive center-block" src="" id="pic6">
					<h3 class="text-center main-weather" id="day6"><?php echo $_SESSION['weather6']; ?></h3>

					<div class="row">
						<h3 class="col-md-4 text-center main-min">Min</h3>
						<h4 class="col-md-4 text-center main-humidity">Humidity</h4>
						<h3 class="col-md-4 text-center main-max">Max</h3>
			  		</div>

					<div class="row">
						<h3 class="col-md-4 text-center main-min-value"><div class="fix1"><?php echo $_SESSION['minTemp6'] . '&#176;'; ?></div></h3>
						<h4 class="col-md-4 text-center main-humidity-value"><div class="fix2"><?php echo $_SESSION['humidity6'] . '%'; ?></div></h4>
						<h3 class="col-md-4 text-center main-max-value"><div class="fix3"><?php echo $_SESSION['maxTemp6'] . '&#176;'; ?></div></h3>
			  		</div>
				</div><!-- end of panel body -->
			</div><!-- end of panel -->
		</div>
		<!-- day 7 -->
		<div class="row">
			<div class="panel panel-default col-md-4 col-md-offset-4 plate">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center"><?php echo $_SESSION['date7']; ?></h3>
			  	</div>
			  	<div class="panel-body">
					<h1 class="main-temp text-center"><div class="fix"><?php echo $_SESSION['dayTemp7']  . '&#176;'; ?></div></h1>
					<img class="img-responsive center-block" src="" id="pic7">
					<h3 class="text-center main-weather" id="day7"><?php echo $_SESSION['weather7']; ?></h3>

					<div class="row">
						<h3 class="col-md-4 text-center main-min">Min</h3>
						<h4 class="col-md-4 text-center main-humidity">Humidity</h4>
						<h3 class="col-md-4 text-center main-max">Max</h3>
			  		</div>

					<div class="row">
						<h3 class="col-md-4 text-center main-min-value"><div class="fix1"><?php echo $_SESSION['minTemp7'] . '&#176;'; ?></div></h3>
						<h4 class="col-md-4 text-center main-humidity-value"><div class="fix2"><?php echo $_SESSION['humidity7'] . '%'; ?></div></h4>
						<h3 class="col-md-4 text-center main-max-value"><div class="fix3"><?php echo $_SESSION['maxTemp7'] . '&#176;'; ?></div></h3>
			  		</div>
				</div><!-- end of panel body -->
			</div><!-- end of panel -->
		</div>

		
	</div><!-- end of container -->	

<script>


	for(var i = 1; i <= 7; i++){
		var day = document.getElementById('day' + i).innerHTML;

		switch(day){
    		case 'Rain':
        		document.getElementById("pic" + i).src="img/rain.png";
        		break;
   		 	case 'Clouds':
        		document.getElementById("pic" + i).src="img/clouds.png";
        		break;
        	case 'Thunderstorm':
        		document.getElementById("pic" + i).src="img/thunderstorm.png";
        		break;
        	case 'Drizzle':
        		document.getElementById("pic" + i).src="img/drizzle.png";
        		break;
        	case 'Snow':
        		document.getElementById("pic" + i).src="img/snow.png";
        		break;
        	case 'Atmosphere':
        		document.getElementById("pic" + i).src="img/clouds.png";
        		break;
        	case 'Clear':
        		document.getElementById("pic" + i).src="img/clear.png";
        		break;
        	case 'Extreme':
        		document.getElementById("pic" + i).src="img/extreme.png";
        		break;							
   			default:
        	  	console.log("we hit default!");
		}
	}

	var day = document.getElementById('day1').innerHTML;
	var holder = document.getElementById('holder');
	holder.setAttribute('class', 'container-fluid rain-background');

	if(day == 'Rain'){
		holder.setAttribute('class', 'container-fluid rain-background');
	}else if(day == 'Clouds'){
		holder.setAttribute('class', 'container-fluid cloudy-background');
	}else if(day == 'Thunderstorm'){
		holder.setAttribute('class', 'container-fluid thunderstorm-background');
	}else if(day == 'Drizzle'){
		holder.setAttribute('class', 'container-fluid drizzle-background');
	}else if(day == 'Snow'){
		holder.setAttribute('class', 'container-fluid snow-background');
	}else if(day == 'Atmosphere'){
		holder.setAttribute('class', 'container-fluid cloudy-background');
	}else if(day == 'Clear'){
		holder.setAttribute('class', 'container-fluid clear-background');
	}else if(day == 'Extreme'){
		holder.setAttribute('class', 'container-fluid extreme-background');
	}else{
		holder.setAttribute('class', 'container-fluid clear-background');			
	}

</script>

</body>
</html>


