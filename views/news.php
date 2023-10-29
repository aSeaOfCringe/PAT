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
    <a href = "news"><img src="img\search.svg" class="btnSearch"> </img></a><br>     
</div>
<!-- End of search bar -->

    <main>  
        <section class="pet">
            <img src="img\animals\black-cat.jpg" alt="Melns kaķis" class="animal-pic">
            <div>
                <div class="format-name">
                    <p class="purpose">ADOPCIJAI</p>
                    <p class="animal-name">Sofija</p>
                </div>
                <div>
                    <img src="img\female.svg" class="gender">
                </div>
            </div>
            <div>
                <p class="animal-description">Apraksts, apraksts  apraksts apraksts 
                    apraksts apraksts apraksts apraksts apraksts apraksts <a class="more">... vairāk</a></p>
            </div>
            
            <div>
                <p class="date">2023-09-13</p>
                <img src="img\heart.svg" class="likes">
                <p class="likes-count">21</p>
            </div>

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