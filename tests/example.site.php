<?php
$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

return  [
    'general' => [
        //'theme' => 'metro', // icon
        //'theme' => 'material', // icon
        'theme' => 'bootstrap', // icon
        //'theme' => 'flat', // icon
        'image' => 'https://picsum.photos/100/100', // icon
        'app' => 'test',
        // 'root' => 'http://app.com',
        'title' => 'App Title',
        'description' => 'App Description',
        'author' => 'App Author',
        'scripts' => array(
            '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">',
            './style.css',
        ),
    ],

    [
        'type' => 'hero',
        'h' => 1,
        'link' => 'https://picsum.photos/1200/400',
        'imageposition' => 0, // center
        'title' => 'WELCOME',
        'description' => substr($lorem, 0, 100),
    ],
    [
        'type' => 'content',
        'title' => 'content 20 items',
        'items' => explode(',', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20'),
    ],
    [
        'type' => 'content',
        'title' => 'content 15 items',
        'items' => explode(',', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15'),
    ],

    [
        'type' => 'content',
        'title' => 'content 12 items',
        'items' => explode(',', '1,2,3,4,5,6,7,8,9,10,11,12'),
    ],

    [
        'type' => 'content',
        'title' => 'content 11 items',
        'items' => explode(',', '1,2,3,4,5,6,7,8,9,10,11'),
    ],
    [
        'type' => 'content',
        'title' => 'content 10 items',
        'items' => explode(',', '1,2,3,4,5,6,7,8,9,10'),
    ],

    [
        'type' => 'content',
        'title' => 'content 9 items',
        'items' => explode(',', '1,2,3,4,5,6,7,8,9'),
    ],

    [
        'type' => 'content',
        'title' => 'content 8 items',
        'items' => explode(',', '1,2,3,4,5,6,7,8'),
    ],

    [
        'type' => 'content',
        'title' => 'content 7 items',
        'items' => explode(',', '1,2,3,4,5,6,7'),
    ],
    [
        'type' => 'content',
        'title' => 'content 6 items',
        'items' => explode(',', '1,2,3,4,5,6'),
    ],
    [
        'type' => 'content',
        'title' => 'content 5 items',
        'items' => explode(',', '1,2,3,4,5'),
    ],
    [
        'type' => 'content',
        'title' => 'content 4 items',
        'items' => explode(',', '1,2,3,4'),
    ],
    [
        'type' => 'content',
        'title' => 'content 3 items',
        'items' => explode(',', '1,2,3'),
    ],
    [
        'type' => 'content',
        'title' => 'content 2 items',
        'items' => explode(',', '1,2'),
    ],
    [
        'type' => 'content',
        'title' => 'content 1 items',
        'items' => explode(',', '1'),
    ],

    [
        'type' => 'card',
        'menu' => array("title" => "Download"),
        'align' => 'center',
        'class' => 'red',
        'title' => 'Sample Card 1 Title',
        'content' => substr($lorem, 0, 100),
        'items' => [
            [
                'type' => 'empty',
                'size' => '3',
            ],
            [
                'type' => 'btn',
                'size' => '3',
                'label' => 'btn 1 text',
                'link' => '#',
            ],
            [
                'type' => 'btn',
                'class' => 'col-12 btn-danger',
                'size' => '3',
                'label' => 'btn 2 label',
                'link' => '#',
            ]
        ],
    ],
    [
        [
            'type' => 'card',
            'title' => 'Sample Card 2 Title',
            'content' => substr($lorem, 0, 50),
        ],
        [
            'type' => 'card',
            'title' => 'Sample Card 3 Title',
            'content' => substr($lorem, 0, 30),
        ]
    ],

    [
        'type' => 'html',
        'content' => '
        <section class="content subscribe">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h1>Subscribe</h1>
                </div>
                <div class="card-content">
                    <form class="form" action="subscribe.php" method="post">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group text-center">
                            <a href="#" class="btn btn-primary">Subscribe</a>
                        </div>
                    </form>
                </div> <!-- card-content -->
            </div> <!-- card-body -->
        </div> <!-- card -->
        </section>
        ',
    ],

    [
        [
            'type' => 'listing',
            'title' => 'Listing 1',
            'align' => 'right',
            'items' => [
                [
                    'content' => substr($lorem, 0, 30),
                ],
                [
                    'content' => substr($lorem, 10, 30),
                ],
                [
                    'content' => substr($lorem, 30, 40),
                ],
                [
                    'type' => 'content',
                    'title' => 'Another title 4',
                    'content' => substr($lorem, 0, 50),
                ]
            ]
        ]
    ],

    [
        [
            'type' => 'image',
            'size' => '2',
            'link' => 'https://picsum.photos/400/300',
        ],
        [
            'type' => 'content',
            'content' => $lorem,
        ],
    ],
    [
        [
            'type' => 'image',
            'size' => '4',
            'link' => 'https://picsum.photos/404/300',
        ],
        [
            'type' => 'content',
            'content' => substr($lorem, 0, 100),
        ],
    ],
    [
        [
            'type' => 'image',
            'size' => '6',
            'link' => 'https://picsum.photos/406/300',
        ],
        [
            'type' => 'content',
            'content' => substr($lorem, 0, 50),
        ],
    ],

    [
        [
            'type' => 'image',
            'size' => '3',
            'link' => 'https://picsum.photos/407/300',
        ],
        [
            'type' => 'content',
            'size' => '5',
            'content' => 'Even iregular image positions, with autostretch to the 12 columns.'
        ],
        [
            'type' => 'image',
            // 'size' => '3', no size, autostretch
            'link' => 'https://picsum.photos/408/300',
        ],

    ],

    [
        [
            'type' => 'image',
            'size' => '4',
            'link' => 'https://picsum.photos/401/301',
        ],
        [
            'type' => 'image',
            'size' => '4',
            'link' => 'https://picsum.photos/402/302',
        ],
        [
            'type' => 'image',
            'size' => '4',
            'link' => 'https://picsum.photos/403/303',
        ],

    ],

    [
        [
            'type' => 'listing',
            'size' => 6,
            // 'title' => 'Listing aside image',
            'items' => [
                [
                    'type' => 'content',
                    'title' => 'Another title 1',
                    'content' => substr($lorem, 10, 50),
                ],
                [
                    'type' => 'content',
                    'title' => 'Another title 2',
                    'content' => substr($lorem, 20, 50),
                ],
                [
                    'title' => 'Another title 3',
                    'content' => substr($lorem, 30, 50),
                ],
                [
                    'title' => 'Another title 4',
                    'content' => substr($lorem, 40, 50),
                ]
            ],
        ],
        [
            'type' => 'image',
            'link' => 'https://picsum.photos/401/300',
        ],

    ],
    [
        [
            'type' => 'listing',
            'class' => 'spacing',
            'items' => [
                [
                    [
                        'type' => 'card',
                        'link' => 'https://picsum.photos/300/300',
                        'title' => 'Nested Card with Image Title',
                        'content' => substr($lorem, 50, 50),
                    ],
                    [
                        'type' => 'card',
                        'title' => 'Nested Card Title',
                        'content' => substr($lorem, 60, 50),
                    ],
                    [
                        'type' => 'card',
                        'class' => 'spacing',

                        'title' => 'Nested Card Title',
                        'content' => substr($lorem, 70, 50),
                    ]
                ],
                [
                    [
                        'type' => 'card',

                        'title' => 'Nested Card Title',
                        'content' => substr($lorem, 80, 50),
                    ],
                    [
                        'type' => 'card',

                        'title' => 'Nested Card Title',
                        'content' => substr($lorem, 90, 50),
                    ]

                ],

            ]
        ]
    ],
    [
        'type' => 'image',
        'link' => 'https://picsum.photos/1000/400',
        'imageposition' => 0, // center
        //'title' => 'Sample Image'
    ],

    [
        [
            [
                'type' => 'card',
                'title' => 'Nested Card Title 1/3 in 1/2',
                'content' => substr($lorem, 100, 50),
            ],
            [
                'type' => 'card',
                'title' => 'Nested Card Title 1/3 in 1/2',
                'content' => substr($lorem, 110, 50),
            ],
            [
                'type' => 'card',
                'class' => 'spacing',
                'title' => 'Nested Card Title 1/3 in 1/2',
                'content' => substr($lorem, 120, 50),
            ]
        ],
        [

            [
                'type' => 'card',

                'title' => 'Nested Card Title 1/1 in 2/2',
                'content' => substr($lorem, 130, 50),
            ]

        ],
    ],
    [
        'type' => 'footer',
        'class' => 'footer',
        'items' => [
            [
                [
                    'type' => 'content',
                    'align' => 'left',
                    'title' => 'Footer 1',
                    'content' => substr($lorem, 150, 50),
                    'items' => [
                        [
                            'type' => 'link',
                            'label' => 'Facebook',
                            'link' => '#',
                        ],
                        [
                            'type' => 'link',
                            'label' => 'Linkedin',
                            'link' => '#',
                        ],
                        [
                            'type' => 'link',
                            'label' => 'Twitter/X',
                            'link' => '#',
                        ],
                        [],
                    ],
                ],
            ],
            [
                'type' => 'content',
                'align' => 'right',
                'content' => 'Content of the second footer item.',
                'items' => [
                    [
                        'type' => 'link',
                        'label' => 'Facebook',
                        'link' => '#',
                    ],
                    [
                        'type' => 'link',
                        'label' => 'Linkedin',
                        'link' => '#',
                    ],
                    [
                        'type' => 'link',
                        'label' => 'Twitter/X',
                        'link' => '#',
                    ],
                    [],
                ],
            ],
            [
                'type' => 'listing',
                'items' => [
                    [
                        'type' => 'link',
                        'label' => 'Link 1',
                        'link' => '#',
                    ],
                    [
                        'type' => 'link',
                        'label' => 'Link 2',
                        'link' => '#',
                    ],
                    [
                        'type' => 'link',
                        'label' => 'Link 3',
                        'link' => '#',
                    ],
                ],
            ],

        ]
    ],
];
