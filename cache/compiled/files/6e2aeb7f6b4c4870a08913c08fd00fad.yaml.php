<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://random/random.yaml',
    'modified' => 1542447274,
    'data' => [
        'enabled' => true,
        'route' => '/random',
        'redirect' => true,
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and'
    ]
];
