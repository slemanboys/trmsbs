<?php
$html = file_get_contents('https://trmsbs.sinkaroid.org/home/index.php?home');


function wordFilter($text)
{
    $sed = $text;
    $sed = str_replace('/application/', 'https://trmsbs.sinkaroid.org/application/', $sed);
    $sed = str_replace('(Subtitle Indonesia)', '', $sed);

    return $sed;
}

//Create a new DOM document
$dom = new DOMDocument;

//Parse the HTML. The @ is used to suppress any parsing errors
//that will be thrown if the $html string isn't valid XHTML.
@$dom->loadHTML($html);

//Get all links. You could also use any other tag name here,
//like 'img' or 'table', to extract other tags.
$links = $dom->getElementsByTagName('a');

//Iterate over the extracted links and display their URLs
foreach ($links as $link){
    //Extract and show the "href" attribute.
    echo "\n",'[',wordFilter($link->nodeValue,']'),' => ';
    echo wordFilter($link->getAttribute('href')),"\n";
}