<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>

    <link href="css\profileChangeStyle.css" rel="stylesheet" />
</head>
<body>
    <h1>Rediģēt profilu</h1>
    <div class="collumn-one">
        
        <div class="row">
            <label for="shelter">Patversmes nosaukums:</label>
            <input type="text" id="shelter" name="shelter" placeholder="Animal friend"><br><br>
        </div>

        <div class="row">
            <label for="representative">Pārstāvis:</label>
            <input type="text" id="representative" name="representative" placeholder="Jānis Blūms"><br><br>
        </div>

        <div class="row">
            <label for="email">E-pasts:</label>
            <input type="text" id="email" name="email" placeholder="janis.blums@inbox.lv"><br><br>
        </div>

        <div class="row">
            <label for="address">Adrese:</label>
            <input type="text" id="address" name="address" placeholder="Kaut kāda adrese"><br><br>
        </div>

        <div class="row">
            <label for="phone">Tālruņa numurs:</label>
            <input type="text" id="phone" name="phone" placeholder="22227777"><br><br>
        </div>

        <div class="row">
            <label for="curPassw">Pašreizējā parole:</label>
            <input type="text" id="curPassw" name="curPassw" placeholder="*****"><br><br>
        </div>

        <div class="row">
            <label for="newPassw">Jaunā parole:</label>
            <input type="text" id="newPassw" name="newPassw" placeholder="*****"><br><br>

        </div>

        <div class="row">
            <label for="repNewPassw">Jaunā parole atkārtoti:</label>
            <input type="text" id="repNewPassw" name="repNewPassw" placeholder="*****"><br><br>
        </div>

    </div>

    <div class="column-two">

        <div class="profile-pic">
            <object data="img\no-profile-picture-man.svg" width="300" height="300"> </object> 
        </div>


        <div class="button-wrapper">
                <input type="submit" name="btnEditProfile" class="purple-button" value="Saglabāt izmaiņas">
        </div>

    </div>
    
</body>
</html>