<?php

return [
    'seeder' => [
        'payment_methods' => [
            'iDEAL',
            'PAYPAL_EXPRESS_CHECKOUT',
            'Visa',
            'Mastercard',
            'Bankwire',
        ],
        'attribute_options' => [
            'Package: # pipettes',
            'Package: Per ##',
            'Package: ## pieces',
            'Package: Extra large',
            'Package: # x ## pieces',
            'Package: # x ## kg',
            'Package: ## + # kg'
        ]
    ],
    'factories' => [
        'customer' => [],
        'address' => [],
        'order_invoice' => [],
        'order' => [],
        'order_detail' => [],
        'manufacturer' => [],
        'product' => [],
        'product_attribute' => [],
        'attribute_group' => [],
        'attribute' => [],
        'product_attribute_combination' => [],
    ]
];
