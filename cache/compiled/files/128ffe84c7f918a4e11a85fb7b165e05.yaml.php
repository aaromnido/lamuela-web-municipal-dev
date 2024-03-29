<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-prod/user/plugins/feed/blueprints.yaml',
    'modified' => 1542447274,
    'data' => [
        'name' => 'Feed',
        'version' => '1.6.2',
        'description' => 'The **Feed** plugin is a simple yet powerful add-on that lets you view a Grav Collection as **JSON**, **RSS** or **Atom** news feed.',
        'icon' => 'rss',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-feed',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'feed, plugin, rss, atom, collection, json',
        'bugs' => 'https://github.com/getgrav/grav-plugin-feed/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'limit' => [
                    'type' => 'text',
                    'label' => 'Feed count',
                    'validate' => [
                        'type' => 'number',
                        'min' => 10,
                        'max' => 1000
                    ]
                ],
                'description' => [
                    'type' => 'textarea',
                    'label' => 'Description'
                ],
                'lang' => [
                    'type' => 'text',
                    'label' => 'Feed language code',
                    'default' => 'en',
                    'placeholder' => 'en',
                    'validate' => [
                        'pattern' => '[a-zA-Z]{2,3}(-[a-zA-Z]{2,3})?'
                    ]
                ],
                'length' => [
                    'type' => 'text',
                    'label' => 'Feed Length',
                    'validate' => [
                        'type' => 'number',
                        'min' => 10,
                        'max' => 10000
                    ]
                ],
                'enable_json_feed' => [
                    'type' => 'toggle',
                    'label' => 'JSON feed support',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
