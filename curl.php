<?php 

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.twitter.com/1.1/statuses/update.json?status=Hello%20world');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Authorization: OAuth oauth_consumer_key=\"CONSUMER_API_KEY\", oauth_nonce=\"OAUTH_NONCE\", oauth_signature=\"OAUTH_SIGNATURE\", oauth_signature_method=\"HMAC-SHA1\", oauth_timestamp=\"OAUTH_TIMESTAMP\", oauth_token=\"ACCESS_TOKEN\", oauth_version=\"1.0\"';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

var_dump($result);
?>