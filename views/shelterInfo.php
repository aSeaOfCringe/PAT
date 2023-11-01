<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelter info</title>

    <link href="css\shelterInfoStyle.css" rel="stylesheet" />
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge" /> -->
</head>
<body>

<?php
    $var_value = $_SESSION['shelter_id'];
    $i = $var_value - 1;
    if(array_key_exists($i, $this->sh) && $this->sh[$i]['id'] === $var_value){
        echo "<h1>" . $this->sh[$i]['nosaukums'] . "</h1>
        <div class='left'>
        <object data='img\address.svg' class='img-svg'> </object><br>
        <object data='img\phone-filled.svg' class='img-svg'> </object><br>
        <object data='img\globe.svg' class='img-svg'> </object><br>
        <object data='img\time.svg' class='img-svg'> </object><br>
    
        </div>
        <div class='right'>
        <p class='description'>" . $this->sh[$i]['adrese'] . "</p>
        <p class='description'>" . $this->sh[$i]['telefons']. "</p>
        <p class='description'>" . $this->sh[$i]['majaslapa'] . "</p>
        <p class='description'>" . $this->sh[$i]['info'] . "</p>
        </div>";
    }
    else{
        echo '<script>alert("Informācija par patversmi nav atrasta \u{1F62D}")</script>';
    }
    
?>
</body>
</html>