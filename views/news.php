<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\newsStyles.css">
    <title>Paws and Tails</title>
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
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
            <label for="male"><img src="img\male-purple.svg" class="gender-box"></img></label><br>

            <input type="checkbox" name="female" value="female">
            <label for="female"><img src="img\female-purple.svg" class="gender-box"></img></label><br>
        </div>

        <a href="news"><button class="btnFilter">Atlasīt</button></a>
    </aside>

<div class="pets-grid">
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

        <!-- <section id="pets-grid"> -->
            <!-- PHP kods šeit -->
            <?php
            // Pieņemam, ka esat izveidojis savienojumu ar datu bāzi un ieguvis datus
            
            // foreach ($data as $pet) {
                
            //     echo "<div class='pet-card'>
            //             <img src='img/test/xru.jpg' alt='kk'>
            //             <h3>Adoptešanai - HANAH</h3>
            //             <p>{$pet['apraksts']}</p>
            //             <span>{$pet['datums']}</span>
            //           </div>";
            // }
            ?>
        <!-- </section> -->

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
    </div> 
</main>
    
        
</body>
</html>