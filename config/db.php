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
        ]
    ],

    'restaurants' => [
        [
            'user_id' => '1',
            'company_name' => 'McDonald',
            'description' => 'Classica e storica catena di fast food nota per gli hamburger e le patatine fritte.',
        ],
        [
            'user_id' => '2',
            'company_name' => 'Pizzeria dei desideri',
            'description' => 'Pizzeria',
        ]
    ],

    'plates' => [
        [
            'restaurant_id' => '1',
            'name' => 'Big Mac',
            'description' => 'Il Grande Classico di McDonald\'s è pronto a stupirti con il suo gusto ancora più irresistibile. Lasciati avvolgere dal pane più caldo, trasportare dal sapore della sua carne più succosa e goditi un\'ulteriore aggiunta della sua inconfondibile salsa: lo scoprirai ancora più buono.'
        ],
        [
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
        ]
    ],

    'types' => [
        ['name' => 'Pizza'],
        ['name' => 'Suchi'],
        ['name' => 'Dessert'],
        ['name' => 'Burgers'],
        ['name' => 'Kebab'],
        ['name' => 'American'],
        ['name' => 'Italian']
    ]
];
