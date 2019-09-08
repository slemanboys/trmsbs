<title>trmsbs</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/src/style.css">
<font face=Ubuntu>
<style>
  body { 
    background: white url("/src/ra.png") no-repeat fixed center; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.memek {
  margin: auto;
  background-color: #f7f3f3;
  width: 45%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.pepek {
  margin: auto;
  background-color: #f7f3f3;
  width: 30%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

</style>
<div class="memek">
<?php

if(isset($_GET['page'])){

    function sedx($text)
    {
        $sed = $text;
        $sed = str_replace('h3', 'h5', $sed);
    $sed = str_replace('<h5><a', '<h5>[#] <a', $sed);
    $sed = str_replace(' <a href="https://tiramisu.fansub.id/', ' <a href="/application/controllers/get.php?anti=', $sed);
        return $sed;
    }

$babi = "/page/" . $_GET['page'] . "/";
$bangsat = 'https://tiramisu.fansub.id';
$kontol = $bangsat . $babi; 
$curl = curl_init($kontol); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$target = curl_exec($curl); 
if(curl_errno($curl))
{
	echo 'error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$tag = '/<div class="col s12 xl12 l12 butirpost">(.*?)<div id="disqus_thread">/s';
if ( preg_match($tag, $target, $udah) )
	
    echo sedx($udah[0]);
else 
    print "error";    
}

if(isset($_GET['home'])){
function wordFilter($text)
{
    $sed = $text;
    $sed = str_replace('h3', 'h5', $sed);
    $sed = str_replace('<h5><a', '<h5>[#] <a', $sed);
    $sed = str_replace('class="right-align">', '> // ', $sed);
    $sed = str_replace(' <a href="https://tiramisu.fansub.id/', ' <a href="/application/controllers/get.php?anti=', $sed);
  
    return $sed;
}
$curl = curl_init('https://tiramisu.fansub.id/'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$regex = '/<div class="col s12 xl12 l12 butirpost">(.*?)<div id="disqus_thread">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter($list[0]); 
else 
    print "Not found"; 

}


if(isset($_GET['search'])){

    function sedx($text)
    {
        $sed = $text;
        $sed = str_replace('h3', 'h5', $sed);
        $sed = str_replace('<h5><a', '<h5>[#] <a', $sed);
        $sed = str_replace(' <a href="https://tiramisu.fansub.id/', ' <a href="/application/controllers/get.php?anti=', $sed);
        return $sed;
    }

$babi = "?s=" . $_GET['search'];
$bangsat = 'https://tiramisu.fansub.id/';
$kontol = $bangsat . $babi; 
$curl = curl_init($kontol); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$target = curl_exec($curl); 
if(curl_errno($curl))
{
	echo 'error: ' . curl_error($curl);
	exit;
}
curl_close($curl);
echo '<center><div id="steal">back to ..<a href="/"><b>/home<b/></a>
</div></center>';
$tag = '/<div class="col s12 xl12 l12 butirpost">(.*?)<div id="disqus_thread">/s';
if ( preg_match($tag, $target, $udah) )
	
    echo 'searched > ',$_GET['search'],sedx($udah[0]);
else 
    print "error";    
}


?>
</div></div></div></div>
</font>
<p>
<div class="pepek">
<font face=Ubuntu size=3>
<font color=red><b>

<?php
$bc = basename(__FILE__);
echo "SITE: ".$_SERVER['SERVER_NAME']."<br>";
echo "FILE: ".$bc."<br>";
echo "params argument: <br><br>";
echo "
/$bc?home [mainpage]<br>
/$bc?page={1..99) [otherpages]";

    echo'
    <form action="/application/views/welcome_message.php?search=" method="get">
    <font face="Consolas" size="2" color="green"><p>
    SEARCH QUERY: <input type="text" style="width:20%;" placeholder="ie: kaguya sama" name="search">
    <input type="submit" value=" > ">
    </font>
    <br>
    </form><p>';
    
    echo'
    <center>
<div class="dog">
<div class="page">
<a href="/application/views/welcome_message.php?page=1">1</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=2"><span class="pg">2</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=3"><span class="pg">3</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=4"><span class="pg">4</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=5"><span class="pg">5</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=6"><span class="pg">6</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=7"><span class="pg">7</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=8"><span class="pg">8</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=9"><span class="pg">9</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=10"><span class="pg">10</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=11"><span class="pg">&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="/application/views/welcome_message.php?page=87"><span class="pg">Last</span></a> </div>
<div>
</div></div>
    ';
    
echo'</div>';
?>


    