<div class="gradient-rectangle">

    <div class="centered-buttons">
        <a href="\"><button class="button">PAT</button></a>
        <a href="news"><button class="button">JAUNUMI</button></a>
        <a href="shops"><button class="button">VEIKALI</button></a>
        <a href="contacts"><button class="button">KONTAKTI</button></a>
        <a href="donate"><button class="button">ZIEDOT</button></a>
    </div>
    <div class="right-buttons">
        <?php if (!isset($_SESSION['id'])) { ?>

            <a href="login"><button class="button login">Pieslēgties</button></a>

        <?php
        } else {
            ?>
           
                <a href="unlogin"><button class="button login"> Labdien, <?= $userName . " " . $userSurname ?> , Iziet</button></a>;
            <?php
        } ?>
    </div>
    <div class="image-container">
        <a href="\"><img src="img/PAT.png" alt="picture"></a>
    </div>

    <div class="image-glob">
        <img src="img/glob.png" alt="glob">
        <div class="language-popup">
            <ul>
                <li>
                    <img src="img/english-flag.png" alt="English Flag">
                    <a href="">English</a>
                </li>
                <li>
                    <img src="img/latvian-flag.png" alt="Latvian Flag">
                    <a href="">Latviešu</a>
                </li>
                <li>
                    <img src="img/russian-flag.png" alt="Russian Flag">
                    <a href="">Руский</a>
                </li>
            </ul>
        </div>
    </div>

</div>