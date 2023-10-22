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
    <link rel="shortcut icon" type="image/png" href="/icon.png" />

    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap"
      rel="stylesheet"
    /> -->

    <script defer src="models/sheltersScript.js"></script>

</head>
<body>

<div id="wrapper">
    <div class="sidebar">
      <ul class="shelters">
        <li class="workout workout--running" data-id="1234567890">

          <div class="division">
            <h1>The shelter</h1>
            <p class="description">This is the infromation about the shelter.</p>
            <p class="more">more...</p>
          </div>

        </li>

        <li class="workout workout--running" data-id="1234567890">

          <div class="division">
            <h1>The shelter</h1>
            <p class="description">This is the infromation about the shelter.</p>
            <p class="more">more...</p>
          </div>

        </li>

        <li class="workout workout--running" data-id="1234567890">

          <div class="division">
            <h1>The shelter</h1>
            <p class="description">This is the infromation about the shelter.</p>
            <p class="more">more...</p>
          </div>

        </li>

      </ul>

    </div>

    <div id="map"></div>
</div>
</body>
</html>