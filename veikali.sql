CREATE TABLE veikali(
    id INT NOT NULL AUTO_INCREMENT,
    logo VARCHAR(255) NOT NULL,
    nosaukums VARCHAR(255) NOT NULL,
    majaslapa VARCHAR(255) NOT NULL,
    CONSTRAINT veikali_pk PRIMARY KEY (id)
);
INSERT INTO veikali
VALUES (
        1,
        'img\shops\animu-logo.png',
        'Animu',
        'https://animu.lv/veikals/'
    ),
    (
        2,
        'img\shops\baribalv-logo.jpg',
        'BARIBA.LV',
        'https://www.bariba.lv/'
    ),
    (
        3,
        'img\shops\baribaslv-logo.webp',
        'baribas.lv',
        'https://baribas.lv/'
    ),
    (
        4,
        'img\shops\dino-zoo-logo.png',
        'Dino Zoo',
        'https://www.dinozoo.lv/'
    ),
    (
        5,
        'img\shops\divsimt-divdesmit-logo.jpg',
        '220.lv',
        'https://220.lv/lv/zoo_preces'
    ),
    (
        6,
        'img\shops\fera-logo.jpg',
        'FERA24.LV',
        'https://fera24.lv/?gclid=Cj0KCQjw4vKpBhCZARIsAOKHoWT-HsgfN-jV78h2qSjQh5io6ohFlkMP-a8lf5Q8TMYJy9uvju_IEdAaAn3cEALw_wcB'
    ),
    (
        7,
        'img\shops\logo.svg',
        'ZooCentrs.lv',
        'https://www.zoocentrs.lv/'
    ),
    (
        8,
        'img\shops\miluliemlv-logo.png',
        'MILULIEM.LV',
        'https://miluliem.lv/'
    ),
    (
        9,
        'img\shops\petcity-logo.png',
        'pet city',
        'https://www.petcity.lv/'
    ),
    (
        10,
        'img\shops\zoopasaule-logo.png',
        'zoopasaule.lv',
        'https://www.zoopasaule.lv/'
    ),
    (
        11,
        'img\shops\zooseta-logo.jpg',
        'ZOO Sēta',
        'https://zooseta.lv/'
    );