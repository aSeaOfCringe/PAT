<nav class="navbar navbar-expand-lg gradient-rectangle1">
    <div class="container-fluid">
            <a class="navbar-brand" href="\">
                <img src="img/PAT.png" alt="">
            </a>
        <div class="collapse navbar-collapse justify-content-center" style="color: white;" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link buttonNav" href="\"><button class="button">PAT</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link buttonNav" href="news"><button class="button">JAUNUMI</button></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link buttonNav" href="shops"><button class="button">VEIKALI</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link buttonNav" href="contacts"><button class="button">KONTAKTI</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link buttonNav" href="donate"><button class="button">ZIEDOT</button></a>
                    </li>
            <div class="justify-content-end">
                
                <div class="toHeaderRight">

                    <?php if (!isset($_SESSION['id'])) { ?>

                        <a class="PatLinkLogin"  href="login">Pieslēgties</a>

                        <?php
                    } else {
                        ?>

                        Labdien,<a  class="PatLinkLogin"  href="profile"><b> <?= $userName . " " . $userSurname ?> !</b></a>
                        <a class="PatLinkLogin"  href="unlogin">Iziet</a>
                        <?php
                    } ?>
        

        <div class="image-glob">
                    <img class="image-fluid" src="img/glob.png" alt="glob">
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
            </div>
            </ul>
        </div>
        <div class="col-1 text-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

    </div>
</nav>