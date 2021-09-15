<?php 
    $json = file_get_contents('http://www.boredapi.com/api/activity');
    $jsonArray = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conquer boredom!</title>
    <link rel="stylesheet" href="/app.css">
</head>
    
<body>

    <div class="topics">
        <div><a href="/education">Education</a></div>
        <div><a href="/recreational">Recreactional</a></div>
        <div><a href="/social">Social</a></div>
        <div><a href="/diy">DIY</a></div>
        <div><a href="/charity">Charity</a></div>
        <div><a href="/cooking">Cooking</a></div>
        <div><a href="/relaxation">Relaxation</a></div>
        <div><a href="/music">Music</a></div>
        <div><a href="/busywork">Busywork</a></div>
    </div>


    <div class="main">
        <h2> <?php echo $jsonArray["activity"] ?>. </h2>
    </div>

    <div class="button1">
        <button onclick="location.reload()">Something new?</button>
    </div>

    <div class="foot">
       <p>Powered by <a href="http://www.boredapi.com">Bored API</a></p>
    </div>

</body>

</html>


