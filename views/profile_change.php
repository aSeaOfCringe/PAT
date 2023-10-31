<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>

    <link href="css\profileChangeStyle.css" rel="stylesheet" />
</head>
<body>
    <div class="collumn-one">
        <h1>Rediģēt profilu</h1>
        
        <div class="row">
            <label for="shelter">Patversmes nosaukums:</label>
            <input type="text" id="shelter" name="shelter" placeholder="Patversmes nosaukums"><br><br>
        </div>

        <div class="row">
            <label for="fName">Pārstāvja vārds:</label>
            <input type="text" id="fName" name="fName" placeholder="Vārds"><br><br>
        </div>

        <div class="row">
            <label for="lName">Pārstāvja uzvārds:</label>
            <input type="text" id="lName" name="lName" placeholder="Uzvārds"><br><br>
        </div>

        <div class="row">
            <label for="email">E-pasts:</label>
            <input type="text" id="email" name="email" placeholder="E-pasts"><br><br>
        </div>

        <div class="row">
            <label for="address">Adrese:</label>
            <input type="text" id="address" name="address" placeholder="Adrese"><br><br>
        </div>

        <div class="row">
            <label for="phone">Tālruņa numurs:</label>
            <input type="text" id="phone" name="phone" placeholder="2XXXXXXX"><br><br>
        </div>

        <div class="row">
            <label for="curPassw">Pašreizējā parole:</label>
            <input type="text" id="curPassw" name="curPassw" placeholder="*****"
            placeholder=><br><br>
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

    <div class="collumn-two">
        <div class="profile-pic-wrapper">
            <object data="img\no-profile-picture-man.svg" class= "profile-pic"> </object> 
        </div>
        <object data="img\pencil-black-circle.svg" class="editPhoto"> </object> 
        </br>
        <a href="profile"><button  type="input" class="btnEditProfile" class="btn-grad">Saglabāt izmaiņas</button></a>
    </div>
    
</body>
</html>