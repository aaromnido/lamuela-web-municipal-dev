<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-prod/user/themes/opentown/blueprints.yaml',
    'modified' => 1542447274,
    'data' => [
        'name' => 'Opentown',
        'version' => '1.0.0',
        'description' => 'Them based on Antimatter theme',
        'icon' => 'empire',
        'author' => [
            'name' => 'Fernando Val',
            'email' => 'aaromnido@gmail.com',
            'url' => 'http://www.fernandoval.es'
        ],
        'homepage' => 'https://github.com/aaromnido/grav-theme-opentown',
        'keywords' => 'antimatter, theme, core, modern, fast, responsive, html5, css3',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
