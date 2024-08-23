<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed YouTube Video</title>
</head>
<body>

<h1>Watch this video:</h1>

<div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;max-width:100%;background:#000;">
    <iframe src="https://www.youtube.com/embed/<?php echo getYouTubeID($youtube_link); ?>?autoplay=1&mute=1" 
            style="position:absolute;top:0;left:0;width:100%;height:100%;" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
    </iframe>
</div>

<?php
function getYouTubeID($url)
{
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
    return $matches[1];
}
?>

</body>
</html>
