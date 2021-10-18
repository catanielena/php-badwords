<?php 
    $paragraph = 'On a dreary, rainy night of November Dr Victor Frankenstein contemplates the result of his experiment: the creation of a human being. By the dull light of a candle he sees that the creature he has made is a monster (yellow watery eyes, dun-white sockets, yellow skin, shrivelled complexion, black lips). He is filled with horror and disgust after realising that his dream of infusing life into an inanimate body has turned out into something he cannot handle. He rushes out of the laboratory and goes to his room to find some rest. He falls asleep.';
    $badword = $_GET["badword"];
    $censured = str_replace($badword, '***', strtolower($paragraph));
    preg_match_all("/\.\s*\w/", $censured, $matches);
    foreach($matches[0] as $match){
        $censured = str_replace($match, strtoupper($match), $censured);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>PHP Badwords</title>
    </head>
    <body>
        <h1>FRANKENSTEIN OR THE MODERN PROMETHEUS__LL . 1 – 30</h1>
        <p><?php echo $paragraph; ?></p>
        <p><strong>Number of characters: </strong><?php echo strlen($paragraph); ?></p>
        <p><?php echo ucfirst($censured); ?></p>
        <p><strong>Number of characters: </strong><?php echo strlen($censured); ?></p>
    </body>
</html>