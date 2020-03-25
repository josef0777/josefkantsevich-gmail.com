<?php
require_once 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="work.js"></script>
</head>

<body>
<?php

$api_url = 'https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=rTLEfaht49A&key=AIzaSyAN-01RpgevVLqx1NLl33Z1Quj0Z3Kdjf0';
$data= json_decode(file_get_contents($api_url));

$api_url2 = 'https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCRqeNRsHCfLh8OoIA9Mv9DQ&key=AIzaSyAN-01RpgevVLqx1NLl33Z1Quj0Z3Kdjf0';
$data2= json_decode(file_get_contents($api_url2));
// echo '<pre>';
// print_r($data);

$view = $data->items[0]->statistics->viewCount;
$view2 = $data2->items[0]->statistics->subscriberCount;
$view3 = $data->items[0]->snippet->title;
$view4 = $data2->items[0]->statistics->videoCount;
$view5 = $data2->items[0]->id;
$view6 = $data->items[0]->statistics->likeCount;
$view7 = $data->items[0]->statistics->commentCount;

?>
   
<fieldset class="access">
  <legend class="legend">Statistics on Youtube</legend>
    <div class="nav">
        <label class="label-size" [b]for="title">Title: </label>
        <input class="input-size" type="text" id="title" name="bday" value="<?php echo $view3?>" readonly>
        <label class="label-size" [b]for="ID">ID: </label>
        <input class="input-size" type="text" id="ID" name="bday" value="<?php echo $view5?>" readonly>
        <label class="label-size" [b]for="Subscribes">Subscribes: </label>
        <input class="input-size" type="text" id="subscribes" name="bday" value="<?php echo $view2?>" readonly>
        <label class="label-size" [b]for="Videos">Videos: </label>
        <input class="input-size" type="text" id="videos" name="bday" value="<?php echo $view4?>" readonly> 
        <label class="label-size" [b]for="Like">Like: </label>
        <input class="input-size" type="text" id="like" name="bday" value="<?php echo $view6?>" readonly>
        <label class="label-size" [b]for="Comment">Comment: </label>
        <input class="input-size" type="text" id="comment" name="bday" value="<?php echo $view7?>" readonly>
        <label class="label-size" [b]for="Subscribes">View Count: </label>
        <input class="input-size" type="text" id="viewcount" name="bday" value="<?php echo $view?>" readonly>
    </div>
</fieldset>
  
<div id="column"></div>   
</body>
</html>