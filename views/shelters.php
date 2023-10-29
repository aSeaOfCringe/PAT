<!-- ! and tab -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelters list</title>

    <!-- Importing Leaflet for map and geolocation -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script defer src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link href="css\sheltersStyles.css" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script defer src="models/sheltersScript.js"></script>

</head>
<body>

<div id="wrapper">
    <div class="sidebar">
      <ul class="shelters">
        <?php
          
          foreach ($this->shelters as $row) {
            echo "<li>
              <div class='division'>
              <h1>" . $row['nosaukums'] . "</h1>
              <p class='description'>" . $row['adrese'] . "</p>";

            $name = "id{$row['id']}";
            $$name = $row['id'];

            echo "<form  action='' method='post'>\n";
            echo "<input type='hidden' name='toMore'  value='" .$row['id'] ."'>\n";
            echo "<input class='z' type='submit' name='$name'  value='More ...'>\n";
            echo "</form>\n";
          }

          if(isset($_POST['toMore'])) {
            $_SESSION['id'] = $_POST['toMore'];
            header("Location: shelter");
            die();
         }

        ?>
      </ul>
    </div>

    <div id="map"></div>
</div>
</body>
</html>