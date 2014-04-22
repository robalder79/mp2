<?php
$url = "http://robert.alder.net.au/";
$cat = $_POST['category'];

function check_url($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    $headers = curl_getinfo($ch);
    curl_close($ch);
    return $headers['http_code'];
}

$myurl = $url;
$status = check_url($myurl);
if($status == '200'){
	$my_var = file_get_contents($myurl."php-CreateMenuGET.php?category=$cat");
	//$my_var = file_get_contents($myurl."php-UpdateMediaLibrary.php?category=$cat");
	echo $my_var;
}else{
    echo "Error: Cannot connect to the server";
}
?>