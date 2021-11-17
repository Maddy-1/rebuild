<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
<link rel="stylesheet" href="style.css">
<title>The Adventures of You</title>
</head>
<body>

<div class="header" style="margin-bottom:0px;">
  <h1>The Adventures of You</h1>
</div>

<div class="topnav">
  <a href="#" style="float:left; border-right:3px solid;">Welcome User</a>
  <a href="index.php?logout='1'" style= "float:right; border-left:3px solid;">Log out</a>
</div>

<div class = "content">
  <div class = "row">
    <div class = "column left">
      <div class = "box" style="background-color:#e9e9e9;">
        <div class = "header" style = "padding:0px; margin:0px;"><h4>Past Adventures</h4></div>
        <div class ="box"style="margin:0px; margin-top:5px;background-color:#f1f1f1;padding:0px;">
          <div class="box"style="height: 300px; border:0px;padding:0px;">
            <div id="map" ></div>		
            <script>
              // from each feature, get element and assign data vars properly
              mapboxgl.accessToken = 'pk.eyJ1IjoibWFkZHkwMiIsImEiOiJja3cycmYxejQwZDkzMnBxbG9pbTNqemloIn0.FkmVdQSH0FhL5N1SB0hH6Q';
              const map = new mapboxgl.Map({
                container: 'map', // container ID
                style: 'mapbox://styles/mapbox/outdoors-v11', // style URL
                center: [-4.5914, 54.3509], // starting position [lng, lat]
                zoom: 4 // starting zoom
              });
              </script>
          </div>
        </div>
      </div>
      <div class ="postbox">
        <a href="post.php" class="new">Record a new memory</a>
      </div>
    </div>
    
    <div class = "column right">
      <div class="box" style="background-color:#e9e9e9;">
        <div class = "header" style = "padding:0px; margin:0px;"><h4>Write Ups</h4></div>
        <div class = "box" style="margin:0px; margin-top:5px;background-color:#f1f1f1;">
          <p>Write ups will go here<p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<? // access by localhost/rebuild/homepage.php?>
