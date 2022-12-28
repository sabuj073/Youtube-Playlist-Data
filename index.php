<?php
  $playlist_id = "PLraJmOvF9eeGyVClKdBaVU6O_XqQjNboS";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Youtube PLaylist example</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<div id="root">
  <input type="hidden" value="<?=$playlist_id; ?>" id='playlist_id'>
  <iframe         
          src="https://www.youtube.com/embed?listType=playlist&list=<?=$playlist_id?>&index=0" 
          frameborder="0" 
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen="1"
          id="iframe_yt"
          ></iframe>
  <div>
    <div class="center_arrow">
      <img src="http://aux.iconspalace.com/uploads/drop-down-vector-icon-256.png" width="25px" style="transform: scaleY(-1);" onClick="goUp();"/>
    </div>
    <div class="playlist"></div>
    <div class="center_arrow">
      <img src="http://aux.iconspalace.com/uploads/drop-down-vector-icon-256.png" width="25px" onClick="goDown();"/>
      </div>
  </div>
</div>

  <script src='https://apis.google.com/js/api.js'></script><script  src="./script.js"></script>

</body>
</html>
