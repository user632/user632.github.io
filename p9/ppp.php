<?php
$url= 'http://www.sejm-wielki.pl/s/i.php?qt=Szembek&rozwin=1&ad_closed=true';

$arrContextOptions=array(
      "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );  

$response = file_get_contents($url, false, stream_context_create($arrContextOptions));
$dom = new DOMDocument();
$dom->loadHTML($response);

 $collection = $dom->getElementsByTagName('li');

echo "lista osób z mojej rodziny dostepna na psw bez zalogowania<br>";
foreach ($collection as $ll) {
try{
$elo = $ll->firstChild;
$lb=$elo->getAttribute('href');
$dd=$elo->nodeValue;
$cc=trim($lb);
if($cc[1]=="b"){
$eee=strpos($dd,"h. ");
$df=substr($dd,0,$eee);
echo  "<a href='http://www.sejm-wielki.pl".$cc."'>".$df."</a><br>";
}

}catch(Exception $e){}

}

?><?php

function aaa($url){
echo "1";
$html = file_get_contents($url);
echo "1";
if ($html === false) return;


$dom = new DOMDocument();
echo "1";
@$dom->loadHTML($html);


foreach ($dom->getElementsByClassName('sw1') as $link) {
echo "1";
$href = $link->getAttribute('href');
echo $href;
//f2($href);
}}


function crawl($url, $depth = 1, $maxDepth = 2, &$visited = []) {
if ($depth > $maxDepth || in_array($url, $visited)) {
return;
}


$visited[] = $url;
echo "<b>Crawluję:</b> $url<br>";


$html = @file_get_contents($url);
if ($html === false) return;


$dom = new DOMDocument();
@$dom->loadHTML($html);


foreach ($dom->getElementsByTagName('a') as $link) {
$href = $link->getAttribute('href');


if (!str_starts_with($href, 'http')) continue;

sleep(1);
crawl($href, $depth + 1, $maxDepth, $visited);
}
}


//aaa("http://www.sejm-wielki.pl/s/i.php?qt=Szembek");
?>