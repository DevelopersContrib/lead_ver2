<?php
$api_url = "http://www.contrib.com/api/";
$monetize_url = "http://manage.vnoc.com/monetize/getcode";
$error = 0;

require('curl_client.php');
$max_redirect = 3;  // Skipable: default => 3
$client = new Curl_Client(array(
	CURLOPT_FRESH_CONNECT => 1,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_USERAGENT => ''
), $max_redirect);


$domain = $_SERVER["HTTP_HOST"]."".$_SERVER['REQUEST_URI'];//input sitename without www

if(stristr($domain, '~') ===FALSE) {
	$domain = $_SERVER["HTTP_HOST"];
    $domain = str_replace("http://","",$domain);
	$domain = str_replace("www.","",$domain);
	$key = md5($domain);
}else {
    $key = md5('vnoc.com');
   $d = explode('~',$domain);
   $user = str_replace('/','',$d[1]);
   $url = $api_url.'getdomainbyusername?username='.$user.'&key='.$key;
   $client->get($url);
   $result = $client->currentResponse('body');
   $data_domain = json_decode($result,true);
   $error = 0;
   $domain =   $data_domain[0]['domain'];	
}

$url = $api_url.'getdomaininfo?domain='.$domain.'&key='.$key;
$client->get($url);
$result = $client->currentResponse('body');
$data_domain = json_decode($result,true);

if (!$data_domain['error']){
	$domainid = $data_domain[0]['DomainId'];
	$domainname = $data_domain[0]['DomainName'];
	$memberid = $data_domain[0]['MemberId'];
	$title = $data_domain[0]['Title'];
	$logo = $data_domain[0]['Logo'];
	$description = $data_domain[0]['Description'];
	$account_ga = $data_domain[0]['AccountGA'];
	
	$description = stripslashes(str_replace('\n','<br>',$description));
			
	$client2 = new Curl_Client(array(
		CURLOPT_FRESH_CONNECT => 1,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_USERAGENT => ''
	), $max_redirect);
			
	$url2 = $api_url.'getdomainattributes?domain='.$domain.'&key='.$key;
	$client2->get($url2);
	$result2 = $client2->currentResponse('body');
	$data_domain2 = json_decode($result2,true);
			
	
			
	if(!$data_domain2['error']){
		$background_image = $data_domain2[0]['background_image_url'];
		$top_description = $data_domain2[1]['top_description'];
		
		//$background_type = $data_domain2[0]['BackgroundType'];
		//$background_color = $data_domain2[0]['BackgroundColor'];		
		//$image_style = $data_domain2[0]['ImageStyle'];
		
		$top_description = stripslashes(str_replace('\n','<br>',$top_description));
		
	}else{
		$error++;
	}
			
}else {
	$error++;
}


//get monetize ads from vnoc
$url = $monetize_url.'?d='.$team_domain_name.'&p=footer';
$client->get($url);
$result = $client->currentResponse('body');
$data_ads = json_decode($result,true);
$footer_banner = html_entity_decode(base64_decode($data_ads[0]['code']));


//get number of leads for counter
$url = $api_url.'getdomainleadscount?domain='.$domain.'&key='.$key;
$client->get($url);
$result = $client->currentResponse('body');
$data_follow_count = json_decode($result,true);
if (!$data_follow_count['error']){
	$follow_count = ($data_follow_count[0]['total'] + 1 ) * 25;
}else {
	$follow_count = 1 * 25;
}

//get domain affiliate id
$url = $api_url.'getdomainaffiliateid?domain='.$domain.'&key='.$key;
$client->get($url);
$result = $client->currentResponse('body');
$data_domain_affiliate = json_decode($result,true);
if (!$data_domain_affiliate['error']){
	$domain_affiliate_id = $data_domain_affiliate['affiliate_id'];
}else {
	$domain_affiliate_id = '391'; //contrib.com affiliate id
}
$domain_affiliate_link = 'http://referrals.contrib.com/idevaffiliate.php?id='.$domain_affiliate_id.'&url=http://www.contrib.com/signup/firststep?domain='.$domain;

	


/*constants
 to all lead templates
*/

/*
$host = "domaindirectory.com";
$user = "domaindi_maida";
$pwd = "bing2k";
$db = "domaindi_sites";

$link = mysql_connect($host, $user,$pwd);
if (!$link) {
   echo "Error establishing connection.";
}

$db_selected = mysql_select_db($db, $link);

*/

/**
	generate robots.txt if not exist
**/
$filename = '/robots.txt';
//if(!(file_exists($filename))) {
    $my_file = 'robots.txt';
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = '---BEGIN ROBOTS.TXT ---
User-Agent: *
Disallow:

Sitemap: http://'.$domain.'/sitemap.html
--- END ROBOTS.TXT ----';
	fwrite($handle, $data);
//}

?>