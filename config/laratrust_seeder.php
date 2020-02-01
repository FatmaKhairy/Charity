<?php

return [
    'role_structure' => [
        'super_admin' => [
						'users' => 'c,r,u,d',
						'donations'=>'r,u,d'

        ],
//        'volunteers' => [
//						'users' => 'r',
//						'donations'=>'r,u'
//				],
    ],


    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
