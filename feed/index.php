<?php 
header('Content-Type: text/plain');
$url = 'https://tiramisu.fansub.id/feed';
function wordFilter($text)
{
    $sed = $text;
    $sed = str_replace('https://tiramisu.fansub.id/', 'https://trmsbs.sinkaroid.org/application/controllers/get.php?anti=', $sed);
    return $sed;
}
echo wordFilter(file_get_contents($url));