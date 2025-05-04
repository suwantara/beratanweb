<?php

use App\Models\Message;

return [
    'menu' => [
        [
            'title' => 'Dashboard',
            'route' => 'dashboard',
            'icon' => 'bi bi-speedometer2',
        ],
        [
            'title' => 'Messages',
            'route' => 'dashboard.messages',
            'icon' => 'bi bi-envelope',
            'badge' => [
                'count' => function() {
                    return Message::whereNull('read_at')->count();
                }
            ]
        ],
        [
            'title' => 'Manage Posts',
            'route' => 'admin.posts.index',
            'icon' => 'bi bi-file-text',
        ],
        // Add more menu items here as needed
    ]
];
