<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shops for animals</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script defer src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link href="css\shopsStyles.css" rel="stylesheet" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- <script defer src="models/sheltersScript.js"></script> -->
</head>
<body>

<div class="main-field">
<?php
          
  foreach ($this->shops as $row) {
    echo "<div class='shop'>
      <img src='img\shops\\" . $row['logo'] . "' class='logo'> </img>
      <a href=" . $row['majaslapa'] . " target='_blank' class='titles'><p>" . $row['nosaukums'] . "</p></a>
    </div>
    ";
  }
?> 
</div>
    
</body>
</html>