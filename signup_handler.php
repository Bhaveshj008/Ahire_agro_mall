<?php
$showerror=false;
$signup=false;
require'../db_config.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
 
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $password = $_POST['password'];
   
   $hash_password= password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO `customers` (`password`, `cust_name`, `cust_address`, `cust_phone`, `cust_email`, `cust_pincode`) VALUES ('$hash_password', '$name', '$address', '$phone', '$email', '$pincode')";
    $result = mysqli_query($conn, $sql);
    
       
    
if ($result) {
   
      $_SERVER[HTTP_REFERER];
      function strip_param_from_url( $url, $param ) {
    $base_url = strtok($url, '?');              // Get the base url
    $parsed_url = parse_url($url);              // Parse it 
    $query = $parsed_url['query'];              // Get the query string
    parse_str( $query, $parameters );           // Convert Parameters into array
    unset( $parameters[$param] );               // Delete the one you want
    $new_query = http_build_query($parameters); // Rebuilt query string
    return $base_url.'?'.$new_query;            // Finally url is ready
}

$renew_path=strip_param_from_url($_SERVER[HTTP_REFERER], 'location');
echo $renew_path;
               header("location: '$renew_path?signup=true'");
    }
    else {
     $path=$_SERVER[HTTP_REFERER];
      
      function strip_param_from_url( $url, $param ) {
    $base_url = strtok($url, '?');              // Get the base url
    $parsed_url = parse_url($url);              // Parse it 
    $query = $parsed_url['query'];              // Get the query string
    parse_str( $query, $parameters );           // Convert Parameters into array
    unset( $parameters[$param] );               // Delete the one you want
    $new_query = http_build_query($parameters); // Rebuilt query string
    return $base_url.'?'.$new_query;            // Finally url is ready
}


            $renew_path=strip_param_from_url($_SERVER[HTTP_REFERER], 'category');
           
                header("location: '$path?signup=false'");
    }
    }

?>