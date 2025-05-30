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
        [
            'title' => 'Categories',
            'route' => 'admin.categories.index', // Pastikan route ini sudah ada
            'icon' => 'bi bi-tags',
        ],
                [
            'title' => 'Manage Products', // Tambahkan menu baru
            'route' => 'admin.products.index', // Pastikan route ini sesuai dengan route CRUD produk
            'icon' => 'bi bi-box', // Gunakan ikon yang sesuai
        ],
        // Add more menu items here as needed
    ]
];
