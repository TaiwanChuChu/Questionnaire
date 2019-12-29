<?php

use App\Core\Helper;

return [
    'form_event' => [
        'QUERY' => 'search',
        'CREATE' => 'add',
        'MODIFIED' => 'edit',
        'SHOW' => 'view',
        'DROP' => 'remove',
    ],

    'route' => [
        'ROUTEPATH' => Helper::getRoutePath(),
    ],
];
