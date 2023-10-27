<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\newsStyles.css">
    <title>Paws and Tails</title>
</head>
<body>
<!-- Start of search bar -->
<div>
  <div class="search-div">
      <input type="text" id="search" name="search" class="search" placeholder="Meklēt"></input>
  </div>
  <a href = "news"><img src="img\search.svg" class = "label-search"/></img>
    <a href = "news"><img src="img\list.svg" class="button-label"> </img></a><br>     
</div>
<!-- End of search bar -->

    <main>
        <section id="search-section">
            <input type="text" id="search-box" placeholder="Meklēt">
        </section>
        
        <section id="pets-grid">
            <!-- PHP kods šeit -->
            <?php
            // Pieņemam, ka esat izveidojis savienojumu ar datu bāzi un ieguvis datus
           
            foreach ($data as $pet) {
                
                echo "<div class='pet-card'>
                        <img src='img/test/xru.jpg' alt='kk'>
                        <h3>Adoptešanai - HANAH</h3>
                        <p>{$pet['apraksts']}</p>
                        <span>{$pet['datums']}</span>
                      </div>";
            }
            ?>
        </section>
        
        <aside id="filters">
            <h3>Dzīvnieks</h3>
            <!-- Šeit varat pievienot citus filtrus, piemēram, dzimumu, tipu utt. -->
        </aside>
    </main>
</body>
</html>