<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>

    <link href="css/advertisment.css" rel="stylesheet" />
</head>

<body>
    <h1>Pazudis dzīvnieks</h1>

    <?php
    $var_value = $_SESSION['id'];
    $i = $var_value - 1;
    $j;

    if (array_key_exists($i, $this->advertisments) && $this->advertisments[$i]['id'] === $var_value) {
        foreach ($this->users as $key => $value) {
            if ($value['lietotaji_id'] == $this->advertisments[$i]['lietotaja_id']) {
                $j = $key;
            }
        }
        $gender;
        if ($this->advertisments[$i]['dzimums'] == 0)
            $gender = 'Vīriešu';
        else
            $gender = 'Sieviešu';

        ?>
        <div class='container1'>

            <div class='square'>
                <img style="width: 100%;" src='img/animals/<?= $this->advertisments[$i]['attels'] ?> ' class='animal-pic' />
            </div>
           



            <div class='square'>
                <div class='button purple-button'>
                    <img src='css\ChatLogo.png'>
                    Sazināties
                </div>
                <div class='button grey-button'>
                    <img src='css\heart.png'>
                    Pievienot favorītiem

                </div>

            </div>
            <div class='square'>
                <div class='text-line'>PILSĒTA, NOVADS:
                    <?= $this->advertisments[$i]['pilseta'] . "        ŠĶIRNE: " . $this->advertisments[$i]['skirne'] . "           DZIMUMS: Vīriešu             VĀRDS: " . $this->advertisments[$i]['vards'] ?>
                </div>
            </div>
            <div class='square'>
                <div class='text-line'>
                    <?= $this->users[$j]['vards'] . " " . $this->users[$j]['uzvards'] ?> "
                </div>
                <div class='text-line'>+371"
                    <?= $this->users[$j]['telefona_nr'] ?> "
                </div>
                <div class='text-line'>"
                    <?= $this->users[$j]['epasts'] ?> "
                </div>
            </div>
            
            <div class='squareVisible'>
                <div class='text-line'>Sludinājums publicēts "
                    <? $this->advertisments[$i]['datums'] ?> "
                </div>
                <div class='text-line'>
                    <a class='button-link' href='sludinajumi'>visi sludinājumi</a>
                </div>
                <div class='text-line'>
                    <a class='button-link' href='#'>dalīties</a>
                </div>
            </div>
        </div>


        </div>
        <?php
    }
    ?>
</body>

</html>