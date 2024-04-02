<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
    [
        'title' => 'Dashboard',
        'priority' => 99,
        'icon'  => 'fas fa-tachometer-alt',
        'url'   => route('admin.dashboard'),
    ],

    // [
    //     'title' => 'Information',
    //     'icon'  => 'fas fa-info-circle',
    //     'url'   => route('admin.information'),
    // ],
    (new Page(\App\Models\Uczen::class))
               ->setTitle("Uczniowie")
               ->setPriority(100)
               ->setIcon('fas fa-users'),

    (new Page(\App\Models\User::class))
               ->setTitle("Użytkownicy")
               ->setPriority(110)
               ->setIcon('fas fa-users'),

            [
                'title' => 'Wyjście',
                'priority' => 150,
                'icon'  => 'fas fa-door-closed',
                'url'   => route('admin.logout'),
            ],
        
        
            //    ->setUrl('users'),
    // [
    //     'title' => "Uczniowie",
    //     'model' => \App\Models\Uczen::class
    // ]

    // Examples
    // [
    //    'title' => 'Content',
    //    'pages' => [
    //
    //        \App\User::class,
    //
    //        // or
    //
    //        (new Page(\App\User::class))
    //            ->setPriority(100)
    //            ->setIcon('fas fa-users')
    //            ->setUrl('users')
    //            ->setAccessLogic(function (Page $page) {
    //                return auth()->user()->isSuperAdmin();
    //            }),
    //
    //        // or
    //
    //        new Page([
    //            'title'    => 'News',
    //            'priority' => 200,
    //            'model'    => \App\News::class
    //        ]),
    //
    //        // or
    //        (new Page(/* ... */))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \App\Blog::class
	//		      ));
    //
	//		      $page->addPage(\App\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
    //    ]
    // ]
];
