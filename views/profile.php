<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profils</title>
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <link rel="stylesheet" href="css\profileStyles.css">
</head>
<body>
    <div class="profile">
        <img src="img\no-profile-picture-man.svg" alt="Profile picture" class="profile-pic"/>

        <div class="person-info">
            <h1><?=$data['vards']." ".$data['uzvards'] ?></h1>
            <h2>Patversmes nosaukums</h2>
            <div>
                <img src="img\at-sign.svg" alt="E-pasts" class="helper-icon"/>
                <p><?=$data['epasts']?></p><br>
                <img src="img\location-pin.svg" alt="Adrese" class="helper-icon"/>
                <p>Zunda krastmala 10, Kurzemes rajons, Rīga, LV-1048</p><br>
                <img src="img\phone-light.svg" alt="Telefona nr." class="helper-icon"/>
                <p><?=$data['telefona_nr']?></p><br>
            </div>
        </div>

        <a href="profileChange"><img src="img\pencil-black-circle.svg" alt="Rediģēt profila informāciju" class="edit-profile-btn"/></a><br>

    </div>

    <h1 class="posters-title">Sludinājumi</h1>

    <?php
    $gender;
    $veids;
    foreach($sludinajumi as $row) {
        if($row['dzimums'] == 0){
            $gender = 'img\male.svg';
        }  else {
            $gender = 'img\female.svg';
        }

        if($row['darijuma_veids'] == 'adoption'){
            $veids = 'adoptēt';
        } else if ($row['darijuma_veids'] == 'lost'){
            $veids = 'pazaudēts';
        } else {
            $veids = 'atrasts';
        }
   ?>
    <div class="poster">
        <img src="img\animals\<?=$row['attels']?>" alt="Dzīvnieka bilde" class="animal-pic"/>
        <div class="animal-info">
            <p class="name"><?=$row['vards']?></p>
            <img src="<?=$gender?>" alt="Dzimums" class="gender"/><br>
            <h3><?=$veids?></h3><br>
            <p class="description"><?=$row['apraksts']?></p><br>
            <p class="date"><?=$row['datums']?></p>
        </div>

        <div class="poster-buttons">
            <a href="advertismentChange"><img src="img\edit-black.svg" alt="Rediģēt dzīvnieka informāciju" class="edit-animal"/></a><br>
            <div class="likes-format">
                <p class="likes-count"><?=$row['likes_count']?></p>
                <img src="img\heart.svg" alt="Patīk" class="likes"/>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="poster">
        <img src="img\animals\black-cat.jpg" alt="Dzīvnieka bilde" class="animal-pic"/>
        <div class="animal-info">
            <p class="name">Sofija</p>
            <img src="img\female.svg" alt="Dzimums" class="gender"/><br>
            <h3>ADOPTĒT</h3><br>
            <p class="description">Šeit atrodas apraksts par šo dzīvnieku. Šeit atrodas apraksts par šo dzīvnieku. 
                Šeit atrodas apraksts par šo dzīvnieku.</p><br>
            <p class="date">2023-09-13</p>
        </div>

        <div class="poster-buttons">
            <a href="advertismentChange"><img src="img\edit-black.svg" alt="Rediģēt dzīvnieka informāciju" class="edit-animal"/></a><br>
            <div class="likes-format">
                <p class="likes-count">13</p>
                <img src="img\heart.svg" alt="Patīk" class="likes"/>
            </div>
        </div>
    </div>

    <div class="center_button">
        <a href="advertismentAdd"><button class="add-poster-btn">Pievienot sludinājumu</button></a>
    </div>
    
</body>
</html>