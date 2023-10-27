<?php
// require_once("controls\DB.php");
// echo $connection;
?>


<!-- ! and tab -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelters list</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script defer src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link href="css\sheltersStyles.css" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script defer src="models/sheltersScript.js"></script>

</head>
<body>

<div id="wrapper">
    <div class="sidebar">
      <ul class="shelters" action="fetchShelters" method="post">
        <?php
          print_r($this->shelters);
          foreach ($this->shelters as $row) {

            // echo "<li>

            //   <div class='division'>
            //     <h1>" . $row['nosaukums'] . "</h1>
            //     <p class='description'>" . $row['adrese'] . "</p>
            //     <p class='more'>more...</p>
            //   </div>
  
            // </li>";
          }
        // function fetchShelter($db){
          // $Query = mysqli_query($db->connection,"SELECT `nosaukums` FROM `patversmes`");
          // $result = $db->connection->query($Query);
          // while($row = $result->fetch_assoc()){
          //   echo "<li>

          //   <div class='division'>
          //     <h1>" . $row['nosaukums'] . "</h1>
          //     <p class='description'>" . $row['adrese'] . "</p>
          //     <p class='more'>more...</p>
          //   </div>

          // </li>";
          // }
        // }
        ?>

        <li data-id="1">

          <script>
            setMarker(56.9412114762812, 24.049200662617682, 'Animal Friend');
          </script>

          <div class="division">
            <h1>Animal Friend</h1>
            <p class="description">Fridriha Candera iela 4, Zemgales priekšpilsēta, Rīga, LV-1046</p>
            <a href='shelter'><p class="more">vairāk...</p></a>
          </div>

        </li>

        <li>
          <a href='profileChange'><button>Edit profile</button></a>
        </li>

        <!-- <li  data-id="2">

          <div class="division">
            <h1>Juglas Dzivnieku aizsardzibas grupa</h1>
            <p class="description">Mežapurva iela 2, Vidzemes priekšpilsēta, Rīga, LV-1064</p>
            <a href='shelter'><p class="more">vairāk...</p></a>
          </div>

        </li>

        <li data-id="3">

          <div class="division">
            <h1>Ulubele dzīvnieku patversme Līči</h1>
            <p class="description">Ozolaine, Stopiņu pagasts, Ropažu novads, LV-2118</p>
            <a href='shelter'><p class="more">vairāk...</p></a>
          </div>

        </li>

        <li data-id="4">

          <div class="division">
            <h1>Rigas pilsetas Dzivnieku patversme</h1>
            <p class="description">Ozolaine, Līči, Stopiņu pagasts, Ropažu novads, LV-2118</p>
            <a href='shelter'><p class="more">vairāk...</p></a>
          </div>

        </li>

        <li data-id="5">

          <div class="division">
            <h1>Dzīvnieku Patversme Mežavairogi</h1>
            <p class="description">Ķekava Parish, Ķekava Municipality, LV-2123</p>
            <a href='shelter'><p class="more">vairāk...</p></a>
          </div>

        </li> -->

      </ul>

    </div>

    <div id="map"></div>
</div>
</body>
</html>