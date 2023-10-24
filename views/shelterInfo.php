<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelter info</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script defer src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link href="css\shelterInfoStyle.css" rel="stylesheet" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- <script defer src="models/sheltersScript.js"></script> -->
</head>
<body>
<label for="search"><object data="img\search.svg" class="label-before" class = "label"> </object></label>

<input type="text" id="search" name="search" class="search" placeholder="Meklēt"></input>
<object data="img\list.svg" class="fake-label"> </object><br>

    <h1>Animal friend</h1>

    <div>
    <object data="img\address.svg" class="img-svg"> </object>
    <p class="description">Fridriha Candera iela 4, Zemgales priekšpilsēta, Rīga, LV-1046</p>
    </div>

    <div>
    <object data="img\phone-filled.svg" class="img-svg"> </object>
    <p class="description">67500491</p>
    </div>

    <div>
    <object data="img\globe.svg" class="img-svg"> </object>
    <p class="description">http://www.dzd.lv/</p>
    </div>
    
    <div>
    <object data="img\time.svg" class="img-svg"> </object>
    <p class="description">Pirmdiena Slēgts<br>Otrdiena 11:00–17:00<br>Trešdiena 11:00–17:00<br>Ceturtdiena 11:00–17:00<br>Piektdiean 11:00–17:00<br>Sestdiena 11:00–17:00<br>Svētdiena 11:00–17:00</p>
    </div>
    
</body>
</html>