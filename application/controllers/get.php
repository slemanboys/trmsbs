
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/src/style.css">
<script type="text/javascript" src="/src/rain.js"></script> 
<font face=Ubuntu>
<style>
  body { 
    background: white url("/src/ra.png") no-repeat fixed center; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
}
</style>
<center><div id="steal"><a href="/"><b>/home<b/></a>
</div>
<?php
$form = '<form action="get.php" method="get">
<input type="hidden" style="width:40%;" name="anti">
<input type="hidden" name="fansub">
</center>
</form>';

print $form;

if(isset($_GET['anti'])){
  $anti = $_GET['anti'];
  $bangsat = 'https://tiramisu.fansub.id/';
  $kontol = $bangsat . $anti; 
  $curl = curl_init($kontol); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

print '<div class="memek"><br>';
 
   
$regex = '/<div class="row isipost">(.*?)<div id="disqus_thread">/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center>',$list[0],'</div><br>'; 
else 
    print "Not found";

}

function sed($text)
{
    $sed = $text;
    $sed = str_replace('-', ' ', $sed);
    $sed = str_replace('/', ' - Download ', $sed);
    return $sed;
}

$judul = sed(strtoupper($_GET['anti']));

?>
<title><?php echo $judul; ?></title>
</div></div></div>
<p><center>
 <div class="pepek">
<font color=crimson face=consolas size=2>

<b>&copy; Sin,</b>

<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/trmsbs</font>
</font>
</div>   

