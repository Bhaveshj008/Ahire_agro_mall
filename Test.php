<?php
 $urlTemplate = 'https://api.ip2location.com/v2/?' . 'ip=%s&key=YOUR_API_KEY&package=WS25&format=json';
 $host= gethostname();
 $ipAddress = gethostbyname($host);
 
 // replace the "%s" with real IP address
 $urlToCall = sprintf( $urlTemplate, $ipAddress);
 
 $rawJson = file_get_contents( $urlToCall );
 
 $geoLocation = json_decode( $rawJson, true );
 
 if(isset($geoLocation['city_name'])){
 
    if($geoLocation['city_name']!="-"){
        echo '<script language="javascript">';
        echo 'alert("Welcome Visitors from ' . $geoLocation['city_name'] . '")';
        echo '</script>';
    }else
    {
        echo '<center>You are in local server!</center><br>';
        echo '<script language="javascript">';
        echo 'alert("You are in local server!")';
        echo '</script>';
    }
 }else{
     echo 'IP Address parsing error!';
 }
?>
<html>
<head>
<title>IP2Location Web Service</title>
    </head>
<body>
<div>
<center>Hello World!</center><br>
</div>
<div>
<center>Your IP address <?php echo $ipAddress; ?></center>
<center>
<br />
<?php
echo 'country_code: ' . (isset($geoLocation['country_code']) ? $geoLocation['country_code'] : '') . "\n<br />";
echo 'country_name: ' . (isset($geoLocation['country_name']) ? $geoLocation['country_name'] : '') . "\n<br />";
echo 'region_name: ' . (isset($geoLocation['region_name']) ? $geoLocation['region_name'] : '') . "\n<br />";
echo 'city_name: ' . (isset($geoLocation['city_name']) ? $geoLocation['city_name'] : '') . "\n<br />";
echo 'latitude: ' . (isset($geoLocation['latitude']) ? $geoLocation['latitude'] : '') . "\n<br />";
echo 'longitude: ' . (isset($geoLocation['longitude']) ? $geoLocation['longitude'] : '') . "\n<br />";
echo 'zip_code: ' . (isset($geoLocation['zip_code']) ? $geoLocation['zip_code'] : '') . "\n<br />";
echo 'time_zone: ' . (isset($geoLocation['time_zone']) ? $geoLocation['time_zone'] : '') . "\n<br />";
echo 'isp: ' . (isset($geoLocation['isp']) ? $geoLocation['isp'] : '') . "\n<br />";
echo 'domain: ' . (isset($geoLocation['domain']) ? $geoLocation['domain'] : '') . "\n<br />";
echo 'net_speed: ' . (isset($geoLocation['net_speed']) ? $geoLocation['net_speed'] : '') . "\n<br />";
echo 'idd_code: ' . (isset($geoLocation['idd_code']) ? $geoLocation['idd_code'] : '') . "\n<br />";
echo 'area_code: ' . (isset($geoLocation['area_code']) ? $geoLocation['area_code'] : '') . "\n<br />";
echo 'weather_station_code: ' . (isset($geoLocation['weather_station_code']) ? $geoLocation['weather_station_code'] : '') . "\n<br />";
echo 'weather_station_name: ' . (isset($geoLocation['weather_station_name']) ? $geoLocation['weather_station_name'] : '') . "\n<br />";
echo 'mcc: ' . (isset($geoLocation['mcc']) ? $geoLocation['mcc'] : '') . "\n<br />";
echo 'mnc: ' . (isset($geoLocation['mnc']) ? $geoLocation['mnc'] : '') . "\n<br />";
echo 'mobile_brand: ' . (isset($geoLocation['mobile_brand']) ? $geoLocation['mobile_brand'] : '') . "\n<br />";
echo 'elevation: ' . (isset($geoLocation['elevation']) ? $geoLocation['elevation'] : '') . "\n<br />";
echo 'usage_type: ' . (isset($geoLocation['usage_type']) ? $geoLocation['usage_type'] : '') . "\n<br />";
echo 'address_type: ' . (isset($geoLocation['address_type']) ? $geoLocation['address_type'] : '') . "\n<br />";
echo 'category: ' . (isset($geoLocation['category']) ? $geoLocation['category'] : '') . "\n<br />";
echo 'category_name: ' . (isset($geoLocation['category_name']) ? $geoLocation['category_name'] : '') . "\n<br />";
?>
</center>
</div>
</body>
</html>