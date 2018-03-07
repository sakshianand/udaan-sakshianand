<?php
ini_set("allow_url_fopen", 1);
$json = file_get_contents('https://newsapi.org/v2/top-headlines?apiKey=cd1db87dec794c2288c915ba6abeee94&country=in');
$data = json_decode($json);
 $arrlength = count($data->articles);
//echo $_POST['q'];
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
    //echo $data->articles[$x]->title;
    for($i = 0; $i<strlen($data->articles[$x]->title); $i++)
    {
    if($data->articles[$x]->title[$i]==$_POST['q'])
    {
    	echo $data->articles[$x]->title;
    }	
    }
   /* if($articles[$x]->title[$i]=='$_POST['q']' )
    {
    	echo $articles[$x]->title;
    }*/
    echo "<br>";
}
echo $data->articles[0]->title; 

?>