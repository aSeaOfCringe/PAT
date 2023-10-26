<link href="css\shopsStyles.css" rel="stylesheet" />
<link href="css\newsStyles.css" rel="stylesheet" />
<div class="search_news">
    <!-- meklētāja josla -->
    <label for="search"><object data="img\search.svg" class="label-before" class="label"> </object></label>
    <input type="text" id="search" name="search" class="search" placeholder="Meklēt"></input>
    <a href="news"><img src="img\list.svg" class="fake-label"> </img></a><br>
</div>
<div class="newsContainer">

    <div class="content_news">

    <?php
    foreach($data as $sludinajums)
    {

        ?>

        <div class="advertisment_template">
            <div class="advertisment">
                <img src="img\test\xru.jpg"></img>

            </div>
            <h1>Adoption</h1>
            <h2>Xru nebudet</h2>
            <p><?= $sludinajums['apraksts'] ?>></p>

            <a href="advertisment">
                <div class="moreBtn">...more</div>
            </a>

            <p>31.02.1450</p>

            <div class="buttonsForAds">
                <button>LIKE</button>
                <button>SHARE</button>
            </div>

        </div>

        <?php

    }

    ?>

    </div>

    <div class="filters-news">


        filtri-xuiltri

    </div>
</div>