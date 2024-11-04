<?php

return [
    [
        'title' => 'menu.home',
        'route' => 'home',
        'routeIs' => '',
        'disabled' => false,

    ],
    [
        'title' => 'menu.expenses',
        'route' => 'expense.index',
        'routeIs' => 'expense.*',
        'disabled' => false,
    ],
    [
        'title' => 'menu.incomes',
        'route' => 'income.index',
        'routeIs' => 'income.*',
        'disabled' => false,
    ],
    [
        'title' => 'menu.reports',
        'route' => 'report.index',
        'routeIs' => 'report.*',
        'disabled' => false,
    ],
];