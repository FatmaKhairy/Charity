<?php

return [
    'role_structure' => [
        'super_admin' => [
						'users' => 'c,r,u,d',
        ],
        'volunteers' => [],
    ],


    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
