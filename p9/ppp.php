<?php

function aaa($url){
$html = @file_get_contents($url);
if ($html === false) return;


$dom = new DOMDocument();
@$dom->loadHTML($html);


foreach ($dom->getElementsByClassName('sw1') as $link) {
$href = $link->getAttribute('href');
echo $href;
}
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


aaa("https://www.sejm-wielki.pl/s/i.php?qt=Szembek&rozwin=1");
?>