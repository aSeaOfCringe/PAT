CREATE TABLE patversmes(
    id INT NOT NULL AUTO_INCREMENT,
    nosaukums VARCHAR(255) NOT NULL,
    adrese VARCHAR(400),
    telefona_nr VARCHAR(15),
    majaslapa VARCHAR(255),
    informacija VARCHAR(700),
    lat DECIMAL(22, 20) NOT NULL,
    lng DOUBLE(22, 20) NOT NULL,
    CONSTRAINT pk_patversmes PRIMARY KEY (id)
);
INSERT INTO patversmes
VALUES (
        NULL,
        'Animal Friend',
        'Fridriha Candera iela 4, Zemgales priekšpilsēta, Rīga, LV-1046',
        '67500491',
        'http://www.dzd.lv/',
        'Pirmdiena 11:00-19:00<br>Otrdiena 10:00–17:00<br>Trešdiena 10:00–17:00<br>Ceturtdiena Slēgts<br>Piektdiean 11:00–19:00<br>Sestdiena 10:00–19:00<br>Svētdiena Slēgts',
        56.9412114762812,
        24.049200662617682
    ),
    (
        NULL,
        'Juglas Dzivnieku aizsardzibas grupa',
        'Mežapurva iela 2, Vidzemes priekšpilsēta, Rīga, LV-1064',
        '26617636',
        'http://www.patversme.lv/',
        'Pirmdiena Slēgts<br>Otrdiena 11:00–17:00<br>Trešdiena 11:00–17:00<br>Ceturtdiena 11:00–17:00<br>Piektdiean 11:00–17:00<br>Sestdiena 11:00–17:00<br>Svētdiena 11:00–17:00',
        56.96950354102735,
        24.25418043822159
    ),
    (
        NULL,
        'Ulubele dzīvnieku patversme Līči',
        'Ozolaine, Stopiņu pagasts, Ropažu novads, LV-2118',
        '20203333',
        'http://www.ulubele.org/',
        'Pirmdiena 10:00–17:00<br>Otrdiena 10:00–17:00<br>Trešdiena 10:00–17:00<br>Ceturtdiena 10:00–17:00<br>Piektdiean 10:00–17:00<br>Sestdiena 10:00–17:00<br>Svētdiena 10:00–17:00',
        56.9547029181603,
        24.34815930093005
    ),
    (
        NULL,
        'Rigas pilsetas Dzivnieku patversme',
        'Ozolaine, Līči, Stopiņu pagasts, Ropažu novads, LV-2118',
        '27803333',
        'http://www.ridzivnieki.lv/',
        'Pirmdiena <br>Otrdiena <br>Trešdiena <br>Ceturtdiena <br>Piektdiean <br>Sestdiena <br>Svētdiena ',
        56.9547029181603,
        24.34815930093005
    ),
    (
        NULL,
        'Dzīvnieku Patversme Mežavairogi',
        'Ķekava Parish, Ķekava Municipality, LV-2123',
        '24422440',
        'http://www.mezavairogi.lv/',
        'Pirmdiena 0:00-24:00<br>Otrdiena 0:00-24:00<br>Trešdiena 0:00-24:00<br>Ceturtdiena 0:00-24:00<br>Piektdiean 0:00-24:00<br>Sestdiena 0:00-24:00<br>Svētdiena 0:00-24:00',
        56.81175049717983,
        24.300066953780128
    ),
    (
        NULL,
        'Slokas dzivnieku patversme',
        'Dzirnavu iela 8, Jūrmala, LV-2011',
        '26352774',
        'http://slokaspatversme.lv/contact/',
        'Pirmdiena Slēgts<br>Otrdiena 9:00-16:00<br>Trešdiena 9:00-16:00<br>Ceturtdiena 9:00-16:00<br>Piektdiean 9:00-16:00<br>Sestdiena 10:00-14:00<br>Svētdiena 10:00-14:00',
        56.94570567138849,
        23.630154132843018
    ),
    (
        NULL,
        'Remi "Kaķa sirds" patversme un veterinārā klīnika',
        'Kauguru iela 10, Zemgales priekšpilsēta, Rīga, LV-1046',
        '23077444',
        'http://remicentrs.lv/',
        'Pirmdiena 10:00-20:00<br>Otrdiena 10:00-20:00<br>Trešdiena 10:00-20:00<br>Ceturtdiena 10:00-20:00<br>Piektdiean 10:00-20:00<br>Sestdiena 11:00-19:00<br>Svētdiena 11:00-19:00',
        56.934248882210426,
        24.054104089736942
    ),
    (
        NULL,
        'Kaķu biedrība',
        'Maskavas iela 201, Latgales priekšpilsēta, Rīga, LV-1019',
        '24784462',
        NULL,
        'Pirmdiena 0:00-24:00<br>Otrdiena 0:00-24:00<br>Trešdiena 0:00-24:00<br>Ceturtdiena 0:00-24:00<br>Piektdiean 0:00-24:00<br>Sestdiena 0:00-24:00<br>Svētdiena 0:00-24:00',
        56.932290779913934,
        24.16125297546387
    ),
    (
        NULL,
        'Akvariga',
        'Viskaļu iela 36a, Vidzemes priekšpilsēta, Rīga, LV-1006',
        '22376961',
        NULL,
        'Pirmdiena 12:00-19:00<br>Otrdiena 12:00-19:00<br>Trešdiena Slēgts<br>Ceturtdiena Slēgts<br>Piektdiean Slēgts<br>Sestdiena 12:00-19:00<br>Svētdiena Slēgts',
        56.993709786619114,
        24.188434481620792
    ),
    (
        NULL,
        'Ķepu-Ķepā',
        'Rēvici, Ozolnieku novads,Salgales pagasts, LV-3045',
        '29733601',
        NULL,
        'Pirmdiena <br>Otrdiena <br>Trešdiena <br>Ceturtdiena <br>Piektdiean <br>Sestdiena <br>Svētdiena ',
        56.581360719810085,
        24.037592411041263
    ),
    (
        NULL,
        'Tukuma novada dzīvnieku patversme',
        'Klusā iela 5A, Tukums, Tukuma pilsēta, Tukuma novads, LV-3101',
        '26885916',
        NULL,
        'Pirmdiena <br>Otrdiena <br>Trešdiena <br>Ceturtdiena <br>Piektdiean <br>Sestdiena <br>Svētdiena ',
        56.98216836650238,
        23.159887790679935
    ),
    (
        NULL,
        'Lacisi , dzivnieku patversme',
        'Krasta iela 1, Cēsis, Cēsu pilsēta, Cēsu novads, LV-4101',
        '27824172',
        NULL,
        'Pirmdiena 12:00-16:00<br>Otrdiena 12:00-16:00<br>Trešdiena 12:00-16:00<br>Ceturtdiena 12:00-16:00<br>Piektdiean 12:00-16:00<br>Sestdiena 12:00-16:00<br>Svētdiena 12:00-16:00',
        57.32232759958307,
        25.257112383842472
    ),
    (
        NULL,
        'Daugavpils dzivnieku patversme',
        'Piekrastes iela 2, Daugavpils, LV-5422',
        '65471689<br>29572677',
        'https://labsdraugs.lv/',
        'Pirmdiena 9:00-18:00<br>Otrdiena 9:00-18:00<br>Trešdiena 9:00-18:00<br>Ceturtdiena 9:00-18:00<br>Piektdiean 9:00-18:00<br>Sestdiena 10:00-15:00<br>Svētdiena 10:00-15:00',
        55.89608829940356,
        26.53059840202332
    );