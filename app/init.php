<?php
session_start();

if(!empty($_GET['city'])){

	$weather_url = "http://api.openweathermap.org/data/2.5/forecast/daily?APPID=a8157ffade7c0058bf043371f9bc3ac1&q=" . urlencode($_GET['city']) . "&cnt=7";

	$weather_json = file_get_contents($weather_url);

	$weather_array = json_decode($weather_json, true);




	//CONVERSION FUNCTIONS
	function toFahrenheit($k){
		return round((1.8 * ($k - 273)) + 32);
	}
	function convertToDate($dt){
		return date('M d', $dt);
	};



	//DAY 1 SESSION VARIABLES
	$_SESSION['cityName'] = $weather_array['city']['name'];
	$_SESSION['date1'] = convertToDate($weather_array['list'][0]['dt']);//1
	$_SESSION['dayTemp1'] = toFahrenheit($weather_array['list'][0]['temp']['day']);
	$_SESSION['minTemp1'] = toFahrenheit($weather_array['list'][0]['temp']['min']);
	$_SESSION['maxTemp1'] = toFahrenheit($weather_array['list'][0]['temp']['max']);
	$_SESSION['humidity1'] = $weather_array['list'][0]['humidity'];
	$_SESSION['weather1'] = $weather_array['list'][0]['weather'][0]['main'];

	//Day 2 SESSION VARIABLES
	$_SESSION['date2'] = convertToDate($weather_array['list'][1]['dt']);
	$_SESSION['dayTemp2'] = toFahrenheit($weather_array['list'][1]['temp']['day']);
	$_SESSION['minTemp2'] = toFahrenheit($weather_array['list'][1]['temp']['min']);
	$_SESSION['maxTemp2'] = toFahrenheit($weather_array['list'][1]['temp']['max']);
	$_SESSION['humidity2'] = $weather_array['list'][1]['humidity'];
	$_SESSION['weather2'] = $weather_array['list'][1]['weather'][0]['main'];

	//DAY 3 SESSION VARIABLES 
	$_SESSION['date3'] = convertToDate($weather_array['list'][2]['dt']);
	$_SESSION['dayTemp3'] = toFahrenheit($weather_array['list'][2]['temp']['day']);
	$_SESSION['minTemp3'] = toFahrenheit($weather_array['list'][2]['temp']['min']);
	$_SESSION['maxTemp3'] = toFahrenheit($weather_array['list'][2]['temp']['max']);
	$_SESSION['humidity3'] = $weather_array['list'][2]['humidity'];
	$_SESSION['weather3'] = $weather_array['list'][2]['weather'][0]['main'];


	//DAY 4 SESSION VARIABLES 
	$_SESSION['date4'] = convertToDate($weather_array['list'][3]['dt']);
	$_SESSION['dayTemp4'] = toFahrenheit($weather_array['list'][3]['temp']['day']);
	$_SESSION['minTemp4'] = toFahrenheit($weather_array['list'][3]['temp']['min']);
	$_SESSION['maxTemp4'] = toFahrenheit($weather_array['list'][3]['temp']['max']);
	$_SESSION['humidity4'] = $weather_array['list'][3]['humidity'];
	$_SESSION['weather4'] = $weather_array['list'][3]['weather'][0]['main'];


	//DAY 5 SESSION VARIABLES 
	$_SESSION['date5'] = convertToDate($weather_array['list'][4]['dt']);
	$_SESSION['dayTemp5'] = toFahrenheit($weather_array['list'][4]['temp']['day']);
	$_SESSION['minTemp5'] = toFahrenheit($weather_array['list'][4]['temp']['min']);
	$_SESSION['maxTemp5'] = toFahrenheit($weather_array['list'][4]['temp']['max']);
	$_SESSION['humidity5'] = $weather_array['list'][4]['humidity'];
	$_SESSION['weather5'] = $weather_array['list'][4]['weather'][0]['main'];


	//DAY 6 SESSION VARIABLES 
	$_SESSION['date6'] = convertToDate($weather_array['list'][5]['dt']);
	$_SESSION['dayTemp6'] = toFahrenheit($weather_array['list'][5]['temp']['day']);
	$_SESSION['minTemp6'] = toFahrenheit($weather_array['list'][5]['temp']['min']);
	$_SESSION['maxTemp6'] = toFahrenheit($weather_array['list'][5]['temp']['max']);
	$_SESSION['humidity6'] = $weather_array['list'][5]['humidity'];
	$_SESSION['weather6'] = $weather_array['list'][5]['weather'][0]['main'];


	//DAY 7 SESSION VARIABLES 
	$_SESSION['date7'] = convertToDate($weather_array['list'][6]['dt']);
	$_SESSION['dayTemp7'] = toFahrenheit($weather_array['list'][6]['temp']['day']);
	$_SESSION['minTemp7'] = toFahrenheit($weather_array['list'][6]['temp']['min']);
	$_SESSION['maxTemp7'] = toFahrenheit($weather_array['list'][6]['temp']['max']);
	$_SESSION['humidity7'] = $weather_array['list'][6]['humidity'];
	$_SESSION['weather7'] = $weather_array['list'][6]['weather'][0]['main'];


	header('Location: ../forecast.php');
}



