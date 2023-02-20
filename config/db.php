<?php

return [
    'users' => [
        [
            'name' => 'John Doe',
            'email' => 'user1@example.com',
            'password' => 'password'
        ],
        [
            'name' => 'Ellen Taylor',
            'email' => 'user2@example.com',
            'password' => 'password'
        ],
        [
            'name' => 'Giorgio Cipriano',
            'email' => 'user3@example.com',
            'password' => 'password'
        ],
        [
            'name' => 'Rosalba Martini',
            'email' => 'user4@example.com',
            'password' => 'password'
        ],
        [
            'name' => 'Sumire Sho',
            'email' => 'user5@example.com',
            'password' => 'password'
        ],
        [
            'name' => 'Harry Moore',
            'email' => 'user6@example.com',
            'password' => 'password'
        ],
        [
            'name' => 'Katsuhito Goro',
            'email' => 'user7@example.com',
            'password' => 'password'
        ],
        [
            'name' => 'Tom Parker',
            'email' => 'user8@example.com',
            'password' => 'password'
        ],
        [
            'name' => 'Fausto Dimarco',
            'email' => 'user9@example.com',
            'password' => 'password'
        ]
    ],

    'restaurants' => [
        [
            'user_id' => '1',
            'company_name' => 'McDonald\'s',
            'description' => 'Gusta il tuo menu preferito senza mai spostarti dal divano: è il momento di provare McDelivery. Da McDonald\'s puoi ordinare hamburger e tante altre proposte sfiziose.',
            'closing_time' => '23:00',
            'types' => [4, 6]
        ],
        [
            'user_id' => '2',
            'company_name' => '50 Panino di Ciro Salvo',
            'description' => 'Stavi cercando Hamburger e Panini a domicilio? Non andare oltre, 50 Panino di Ciro Salvo è la risposta. Scopri il suo menù pieno di prelibatezze e gustalo a casa o dove vuoi tu!',
            'closing_time' => '23:30',
            'types' => [4]
        ],
        [
            'user_id' => '3',
            'company_name' => 'Murphy\'s Law Pub',
            'description' => 'Voglia di Hamburger a domicilio? Scopri il menu di Murphy\'s Law Pub e ordina comodamente online.',
            'closing_time' => '23:00',
            'types' => [4]
        ],
        [
            'user_id' => '4',
            'company_name' => 'Pizzeria Dei Desideri',
            'description' => 'Voglia di Pizza ma quella di cucinare è scappata di casa? Non temere! Visita il menù di Pizzeria Dei Desideru e ordina comodamente a domicilio il piatto che più ti piace!',
            'closing_time' => '23:45',
            'types' => [1, 7]
        ],
        [
            'user_id' => '5',
            'company_name' => 'Ohana Bowl',
            'description' => 'Stai cercando Poke e cucina Giapponese a domicilio? Con Ohana Poke non hai più bisogno di cercare. Vai al suo menù e fai il tuo ordine ora.',
            'closing_time' => '22:30',
            'types' => [2]
        ],
        [
            'user_id' => '6',
            'company_name' => 'Pizza & Panini Gourmet',
            'description' => 'Pizza e Fritti a domicilio',
            'closing_time' => '22:45',
            'types' => [1, 4]
        ],
        [
            'user_id' => '7',
            'company_name' => 'Kokore Sushi',
            'description' => 'Voglia di sushi giapponese? Ordina da Kokore e ricevi l\'ordine dove vuoi tu!',
            'closing_time' => '22:00',
            'types' => [2]
        ],
        [
            'user_id' => '8',
            'company_name' => 'Don Cake',
            'description' => 'Dolci e Paste a domicilio',
            'closing_time' => '12:00',
            'types' => [3]
        ],
        [
            'user_id' => '9',
            'company_name' => 'Trattoria da Michele',
            'description' => 'Stai cercando Cucina Italiana a domicilio? Con Trattoria Da Michele non hai più bisogno di cercare. Vai al suo menù e fai il tuo ordine ora.',
            'closing_time' => '15:00',
            'types' => [7]
        ],

    ],

    'plates' => [
        [
            'restaurant_id' => '1',
            'name' => 'My Selection BBQ',
            'description' => 'Pane, Hamburger, Gouda stagionato, Bacon, Insalata, Coleslaw, Salsa BBQ AcetoBalsamicoIGP',
            'price' => '8.10'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'Gran Crispy McBacon',
            'description' => 'Pane, Hamburger, Bacon, Formaggio, Salsa',
            'price' => '7.60'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'Crispy McBacon',
            'description' => 'Pane, Hamburger, Bacon, Formaggio, Salsa',
            'price' => '6.30'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'Big Mac',
            'description' => 'Pane, Hamburger, Salsa, Insalata, Formaggio, Cipolla, Cetrioli',
            'price' => '6.25'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'McChicken',
            'description' => 'Pane, Hamburger, Insalata, Salsa',
            'price' => '6.10'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'Double Cheeseburger',
            'description' => 'Pane, Hamburger, Formaggio, Cipolla, Cetrioli, Ketchup, Senape',
            'price' => '3.10'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'Chickenburger',
            'description' => 'Pane, Hamburger, Salsa Caesar',
            'price' => '2.00'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'Cheeseburger',
            'description' => 'Pane, Hamburger, Formaggio, Cipolla, Cetrioli, Ketchup, Senape',
            'price' => '2.00'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'Patatine Fritte',
            'description' => 'Patatine fritte',
            'price' => '2.50'
        ],
        [
            'restaurant_id' => '2',
            'name' => 'Panino Superclasico',
            'description' => 'hamburger di manzetta prussiana 180g, cheddar, bacon, lattuga, pomodoro, cipolla rossa caramellata e super salsa 50 panino',
            'price' => '9.00'
        ],
        [
            'restaurant_id' => '2',
            'name' => '50 Cheeseburger',
            'description' => 'hamburger di manzetta prussiana 180g, doppio cheddar, bacon e salsa 50 crispy',
            'price' => '9.00'
        ],
        [
            'restaurant_id' => '2',
            'name' => 'Panino 50 Gold',
            'description' => 'pollo croccante impanato fritto, cheddar, patate al forno e maionese',
            'price' => '9.00'
        ],
        [
            'restaurant_id' => '3',
            'name' => 'Grass Fed 200g',
            'description' => 'hamburger di Marchigiana 100% grass fed, accompagnato da un mix di patate fritte',
            'price' => '13.50'
        ],
        [
            'restaurant_id' => '3',
            'name' => 'Pollo Avvolto',
            'description' => '250g di pollo avvolto nel bacon e accompagnato da rucola e anelli di cipolla',
            'price' => '13.00'
        ],
        [
            'restaurant_id' => '3',
            'name' => 'Jack Daniel\'s',
            'description' => 'hamburger ML 180g fritto in una croccante impanatura al Jack Daniel\'s coperto da provola grigliata e patatine fritte',
            'price' => '12.50'
        ],
        [
            'restaurant_id' => '3',
            'name' => 'Patagonia',
            'description' => '350g di tenerissimo cuberoll di Angus Argentino cotto alla brace',
            'price' => '27.50'
        ],
        [
            'restaurant_id' => '3',
            'name' => 'BBQ Ribs',
            'description' => 'costine di maiale cotte a bassa temperatura, marinate in salsa barbecue con lime e zenzero e poi passate on brace',
            'price' => '18.00'
        ],
        [
            'restaurant_id' => '4',
            'name' => 'Margherita',
            'description' => 'pomodoro San Marzano, mozzarella fiordilatte di Agerola, parmigiano, olio extravergine d\'oliva e basilico',
            'price' => '7.00'
        ],
        [
            'restaurant_id' => '4',
            'name' => 'Capricciosa',
            'description' => 'pomodoro San Marzano, mozzarella fiordilatte di Agerola, prosciutto cotto Villani alta qualità, crema di carciofi, olive, funghi porcini, parmigiano, olio extravergine d\'oliva e basilico',
            'price' => '9.00'
        ],
        [
            'restaurant_id' => '4',
            'name' => 'Arcobaleno',
            'description' => 'pistacchio, pomodori datterini, pomodorino giallo, provola di Agerola, parmigiano, olio extravergine d\'oliva e basilico',
            'price' => '9.00'
        ],
        [
            'restaurant_id' => '4',
            'name' => 'Racchetta',
            'description' => 'pomodoro San Marzano, provola di Agerola, prosciutto crudo di Parma Dop 24 mesi, parmigiano, bocconcino di mozzarella di bufala, mentre nel manico provola di Agerola e ricotta di bufala, olio extravergine d\'oliva e basilico',
            'price' => '10.00'
        ],
        [
            'restaurant_id' => '4',
            'name' => 'Gioia',
            'description' => 'mozzarella fiordilatte di Agerola, prosciutto cotto Villani alta qualità, panna, crocché, parmigiano, con cornicione ripieno di purè e salsiccia, olio extravergine d\'oliva e basilico',
            'price' => '10.00'
        ],
        [
            'restaurant_id' => '4',
            'name' => 'Verace',
            'description' => 'pomodori datterini, mozzarella di bufala, parmigiano, olio extravergine d\'oliva e basilico',
            'price' => '9.00'
        ],
        [
            'restaurant_id' => '4',
            'name' => 'Diavola',
            'description' => 'pomodoro San Marzano, mozzarella fiordilatte di Agerola, spianata piccante Villani, peperoncino, parmigiano, olio extravergine d\'oliva e basilico',
            'price' => '9.00'
        ],
        [
            'restaurant_id' => '5',
            'name' => 'Bowl Kawika Amato',
            'description' => 'riso sushi, manzo, stick patata, melanzane fritte, pomodorino giallo, edamame e sweet chilli souce',
            'price' => '12.00'
        ],
        [
            'restaurant_id' => '5',
            'name' => 'Bowl Makareta Perla',
            'description' => 'riso nero, pollo agrodolce, stick di patata, mandorle, spinaci, mais tostato, zucchine e sweet chilli souce',
            'price' => '12.00'
        ],
        [
            'restaurant_id' => '5',
            'name' => 'Roll Lemona',
            'description' => 'riso sushi, salmone impanato, topping di spigola scottata, spicy maionese, salsa teriyaki e grattugiata di lime',
            'price' => '16.00'
        ],
        [
            'restaurant_id' => '5',
            'name' => 'Roll Pika',
            'description' => 'gambero in tempura, avocado, teriyaki con topping di tartare di tonno e cipolla croccante',
            'price' => '16.00'
        ],
        [
            'restaurant_id' => '5',
            'name' => 'Roll Ohana Famiglia',
            'description' => 'gambero fritto, avocado con topping di salmone, salsa Ohana e lacci di patate',
            'price' => '16.00'
        ],
        [
            'restaurant_id' => '5',
            'name' => 'Bowl Aloiki Guerriero',
            'description' => 'riso sushi, tonno, radicchio viola, mela verde, patata, granelle di nocciole, salsa ponzu e salsa Ohana',
            'price' => '12.00'
        ],
        [
            'restaurant_id' => '6',
            'name' => 'Marinara',
            'description' => 'aglio, origano, basilico, pomodoro e olio extravergine',
            'price' => '4.00'
        ],
        [
            'restaurant_id' => '6',
            'name' => 'Margherita',
            'description' => 'mozzarella fiordilatte, pomodoro San Marzano, basilico, parmigiano e olio extravergine',
            'price' => '4.00'
        ],
        [
            'restaurant_id' => '6',
            'name' => 'Filetto',
            'description' => 'mozzarella fiordilatte di Agerola, pomodorini ciliegino, basilico, parmigiano e olio extravergine',
            'price' => '5.50'
        ],
        [
            'restaurant_id' => '6',
            'name' => 'Boscaiola',
            'description' => 'mozzarella fiordilatte di Agerola, prosciutto cotto, funghi champignon, panna, basilico, parmigiano e olio extravergine',
            'price' => '6.00'
        ],
        [
            'restaurant_id' => '6',
            'name' => 'Ripieno Napoli',
            'description' => 'mozzarella fiordilatte di Agerola, ricotta e pepe',
            'price' => '6.50'
        ],
        [
            'restaurant_id' => '6',
            'name' => 'Crocchè di Friarielli',
            'description' => 'Crocchè di Friarielli',
            'price' => '1.50'
        ],
        [
            'restaurant_id' => '6',
            'name' => 'Frittatina',
            'description' => 'Frittatina',
            'price' => '1.50'
        ],
        [
            'restaurant_id' => '6',
            'name' => 'Arancino con Zucca e Bacon',
            'description' => 'Arancino con Zucca e Bacon',
            'price' => '1.50'
        ],
        [
            'restaurant_id' => '7',
            'name' => 'Rainbow',
            'description' => 'tonno, ebi, avocado e cetrioli. ricoperto di pesce misto',
            'price' => '16.00'
        ],
        [
            'restaurant_id' => '7',
            'name' => 'Salmone in Salsa Teriyaki',
            'description' => 'salmone piastrato con verdure saltate riso e teriyaki',
            'price' => '12.00'
        ],
        [
            'restaurant_id' => '7',
            'name' => 'Temaki Tiger',
            'description' => 'salmone, philadelphia, cipolla croccante e salsa tiger',
            'price' => '6.00'
        ],
        [
            'restaurant_id' => '7',
            'name' => 'Zuppa di Miso',
            'description' => 'zuppa di soia, tofu e cipolle',
            'price' => '5.00'
        ],
        [
            'restaurant_id' => '7',
            'name' => 'Sea Food Meshi',
            'description' => 'riso saltato con gamberi e verdura',
            'price' => '10.00'
        ],
        [
            'restaurant_id' => '8',
            'name' => 'Vaschetta Tiramisù al Pistacchio',
            'description' => 'Tiramisù al Pistacchio',
            'price' => '6.50'
        ],
        [
            'restaurant_id' => '8',
            'name' => 'Vaschetta Tiramisù alla Nutella',
            'description' => 'Tiramisù alla Nutella',
            'price' => '6.50'
        ],
        [
            'restaurant_id' => '8',
            'name' => 'Vaschetta Pistacchiosa',
            'description' => '',
            'price' => '6.50'
        ],
        [
            'restaurant_id' => '8',
            'name' => 'Vaschetta Nutellosa',
            'description' => '',
            'price' => '6.50'
        ],
        [
            'restaurant_id' => '8',
            'name' => 'Muffin al Cioccolato',
            'description' => '',
            'price' => '3.00'
        ],
        [
            'restaurant_id' => '8',
            'name' => 'Muffin alla Vaniglia',
            'description' => '',
            'price' => '3.00'
        ],
        [
            'restaurant_id' => '8',
            'name' => 'Muffin al Pistacchio',
            'description' => '',
            'price' => '3.00'
        ],
        [
            'restaurant_id' => '9',
            'name' => 'Zito al Lardo di Patanegra',
            'description' => '',
            'price' => '10.00'
        ],
        [
            'restaurant_id' => '9',
            'name' => 'Pasta e Patate con Provola',
            'description' => '',
            'price' => '9.00'
        ],
        [
            'restaurant_id' => '9',
            'name' => 'Rigatoni al Ragù',
            'description' => '',
            'price' => '8.00'
        ],
        [
            'restaurant_id' => '9',
            'name' => 'Parmigiana di Melanzane',
            'description' => '',
            'price' => '8.00'
        ],
        [
            'restaurant_id' => '9',
            'name' => 'Pasta Mista con Fagioli e Cozze',
            'description' => '',
            'price' => '8.50'
        ],
        [
            'restaurant_id' => '9',
            'name' => 'Manfredi Ricotta e Ragù',
            'description' => '',
            'price' => '10.00'
        ]

        /* [
            'restaurant_id' => '1',
            'name' => 'McChicken',
            'description' => 'Tutta la semplicità del petto di pollo avvolto in una panatura croccante, insieme all\'insalata iceberg e all\'inconfondibile salsa McChicken.'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'Gran Crispy McBacon',
            'description' => 'Gran Crispy McBacon®: carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana, formaggio e l\'inconfondibile salsa Crispy. Come il classico, ma ancora più grande.'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'My Selection Chicken Avocado & Bacon',
            'description' => '100% petto di pollo italiano avvolto in una croccante panatura, Caciocavallo Silano DOP, salsa avocado, cavolo cappuccio rosso italiano e bacon.'
        ],
        [
            'restaurant_id' => '1',
            'name' => 'My Selection Speck & Asiago',
            'description' => '180 grammi di succosa carne bovina da allevamenti italiani, Asiago DOP, Speck Alto Adige IGP, maionese con senape in grani e zucchine grigliate.'
        ],
        [
            'restaurant_id' => '2',
            'name' => 'Margherita',
            'description' => 'Pomodoro e mozzarella'
        ],
        [
            'restaurant_id' => '2',
            'name' => 'Capricciosa',
            'description' => 'Pomodoro, mozzarella, prosciutto cotto, funghi e carciofi'
        ],
        [
            'restaurant_id' => '2',
            'name' => 'Prosciutto cotto',
            'description' => 'Pomodoro, mozzarella e prosciutto cotto'
        ],
        [
            'restaurant_id' => '2',
            'name' => 'Leggera',
            'description' => 'Pomodoro, mozzarella, rucola e grana'
        ],
        [
            'restaurant_id' => '2',
            'name' => '4 formaggi',
            'description' => 'Pomodoro, mozzarella, gorgonzola, brie e stracchino'
        ] */
    ],

    'types' => [
        ['name' => 'Pizza'],
        ['name' => 'Sushi'],
        ['name' => 'Dolci'],
        ['name' => 'Hamburger'],
        ['name' => 'Kebab'],
        ['name' => 'Americano'],
        ['name' => 'Italiano']
    ]
];
