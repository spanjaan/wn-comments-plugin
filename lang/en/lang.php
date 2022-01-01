<?php

return [
    'plugin' => [
        'name' => 'Comments',
        'description' => 'No description'
    ],
    'components' => [
        'comments' => [
            'name' => 'Comments List',
            'description' => '',
            'properties' => [
                'url' => 'URL',
                'tree' => 'Tree',
                'dateformat' => 'Date format'
            ]
        ],
        'commentsForm' => [
            'name' => 'CommentsForm',
            'description' => '',
            'properties' => [
                'url' => 'URL',
                'email' => 'Show email'
            ]
        ]
    ],
    'settings' => [
        'name' => 'Comments',
        'moderate' => 'Moderate comments'
    ]
];
