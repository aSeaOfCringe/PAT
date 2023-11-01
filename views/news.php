<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\newsStyles.css">
    <title>Paws and Tails</title>
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
</head>
<body>

<main>
<!-- Filtri -->
<aside class="filters" id="sidebar">
        <div class="filter-box">
            <h3>Dzīvnieks</h3>
            <input type="checkbox" name="dog" value="dog">
            <label for="dog">Suņi</label><br>

            <input type="checkbox" name="cat" value="cat">
            <label for="cat">Kaķi</label><br>

            <input type="checkbox" name="hamster" value="hamster">
            <label for="hamster">Grauzēji</label><br>

            <input type="checkbox" name="bird" value="bird">
            <label for="bird">Putni</label><br>

            <input type="checkbox" name="exotic" value="exotic">
            <label for="exotic">Eksotiskie dzīvnieki</label><br>

            <input type="checkbox" name="fish" value="fish">
            <label for="fish">Zivis</label><br>
        </div>

        <div class="filter-box">
            <h3>Veids</h3>
            <input type="checkbox" name="adoption" value="adoption">
            <label for="adoption">Adopcijai</label><br>

            <input type="checkbox" name="lost" value="lost">
            <label for="lost">Pazaudēts</label><br>

            <input type="checkbox" name="found" value="found">
            <label for="found">Atrasts</label><br>
        </div>

        <div class="genderfilter-box">
            <h3>Dzimums</h3>
            <input type="checkbox" name="male" value="male">
            <label for="male"><img src="img\male-purple.svg" class="gender-box"></img></label>

            <input type="checkbox" name="female" value="female">
            <label for="female"><img src="img\female-purple.svg" class="gender-box"></img></label>
        </div>

        <a href="news"><button class="btnFilter">Atlasīt</button></a>
    </aside>

<div class="pets-grid">
    <?php
    $gender;
    $veids;
    foreach ($this->data as $row) {

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

        $name = "id{$row['id']}";
        $$name = $row['id'];

        echo "<section class='pet'>
        <img src='img\animals\\". $row['attels'] . "' alt='Dzivnieka attels' class='animal-pic'/>
        <div>
            <div class='format-name'>
                <p class='purpose'>" . $veids . "</p>
                <p class='animal-name'>" . $row['vards'] . "</p>
            </div> 
            <div>
                <img src='" . $gender . "' class='gender'>
            </div>
        </div>
        <div>
        <p class='animal-description'>" . $row['apraksts'] . "
            <form action='' method='post'>
            <input type='hidden' name='toMore'  value='" .$row['id'] ."'>
            <input class='z' class='more' type='submit' name='$name'  value='Vairāk ...'>
            </form></p><br>";
        echo "</div>
        <div class='lover'>
            <p class='date'>" . $row['datums'] . "</p>
            <img src='img\heart.svg' class='likes'>
            <p class='likes-count'>" . $row['likes_count'] . "</p>
        </div>
        </section>";
    }

    if(isset($_POST['toMore'])) {
        $_SESSION['advertisment_id'] = $_POST['toMore'];
        header("Location: advertisment");
        die();
     }

                    // <a href='advertisment' class='more'>... vairāk</a></p><br>

    ?>
    </div> 
</main>
    
        
</body>
</html>