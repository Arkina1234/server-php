<?php

$today = gmdate("n/j/Y g:i:s A");
$ip = $_SERVER['REMOTE_ADDR'];
$key = "defaultpassword";
$validminutes = 20;
$str2hash = $ip . $key . $today . $validminutes;
$md5raw = md5($str2hash, true);
$base64hash = base64_encode($md5raw);
$urlsignature = "server_time=" . $today ."&hash_value=" . $base64hash. "&validminutes=$validminutes";
$base64urlsignature = base64_encode($urlsignature);
if (isset ($_GET['channel']))
{
$get = ($_GET['channel']);
if ( $get == "AETV" ) {
header("Location: https://h1.ustvgo.la/AE/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "AMC" ) {
header("Location: https://h1.ustvgo.la/AMC/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "APL" ) {
header("Location: https://h1.ustvgo.la/Animal/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "BBCA" ) {
header("Location: https://h1.ustvgo.la/BBCAmerica/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "BET" ) {
header("Location: https://h1.ustvgo.la/BET/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "BOOMERANG" ) {
header("Location: https://h1.ustvgo.la/Boomerang/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "BRAVO" ) {
header("Location: https://h1.ustvgo.la/Bravo/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "CBSSN" ) {
header("Location: https://h1.ustvgo.la/CBSSN/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "CINEMAX" ) {
header("Location: https://h1.ustvgo.la/Cinemax/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "CMT" ) {
header("Location: https://h1.ustvgo.la/CMT/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "CN" ) {
header("Location: https://h1.ustvgo.la/CN/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "CNBC" ) {
header("Location: https://h1.ustvgo.la/CNBC/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "CNN" ) {
header("Location: https://h1.ustvgo.la/CNN/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "COMEDY" ) {
header("Location: https://h1.ustvgo.la/Comedy/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "DISCOVERY" ) {
header("Location: https://h1.ustvgo.la/Discovery/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "DISNEY" ) {
header("Location: https://h1.ustvgo.la/Disney/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "DISNEYJR" ) {
header("Location: https://h1.ustvgo.la/DisneyJr/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "DISNEYXD" ) {
header("Location: https://h1.ustvgo.la/DisneyXD/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "E" ) {
header("Location: https://h1.ustvgo.la/E/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "ESPN" ) {
header("Location: https://h1.ustvgo.la/AMC/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "ESPN2" ) {
header("Location: https://h1.ustvgo.la/AMC/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
elseif ( $get == "ESPNU" ) {
header("Location: https://h1.ustvgo.la/AMC/myStream/playlist.m3u8?wmsAuthSign=$base64urlsignature");
exit;
}
