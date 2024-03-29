<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-lamuela-prod/user/plugins/tinymce-editor/blueprints.yaml',
    'modified' => 1542382966,
    'data' => [
        'name' => 'TinyMCE Editor Integration',
        'version' => '1.2.3',
        'description' => 'This is _the_ TinyMCE integration plugin for those not chosen to love Markdown over all comfort.',
        'icon' => 'edit',
        'author' => [
            'name' => 'Newb I the Newbd',
            'url' => 'https://github.com/newbthenewbd'
        ],
        'homepage' => 'https://github.com/newbthenewbd/grav-plugin-tinymce-editor',
        'keywords' => 'tinymce, html, wysiwyg, editor, integration, plugin',
        'bugs' => 'https://github.com/newbthenewbd/grav-plugin-tinymce-editor/issues',
        'docs' => 'https://github.com/newbthenewbd/grav-plugin-tinymce-editor/blob/develop/README.md',
        'license' => 'Integration plugin under the MIT License, TinyMCE under LGPL 2.1',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'apikey' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_TINYMCE_EDITOR.API_KEY',
                    'help' => 'PLUGIN_TINYMCE_EDITOR.API_KEY_HELP'
                ],
                'plugins' => [
                    'type' => 'selectize',
                    'label' => 'PLUGIN_ADMIN.PLUGINS',
                    'help' => 'PLUGIN_TINYMCE_EDITOR.PLUGINS_HELP',
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'parameters' => [
                    'name' => 'parameters',
                    'type' => 'list',
                    'style' => 'vertical',
                    'collapsible' => 0,
                    'label' => 'PLUGIN_TINYMCE_EDITOR.PARAMETERS',
                    'help' => 'PLUGIN_TINYMCE_EDITOR.PARAMETERS_HELP',
                    'fields' => [
                        '.name' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.NAME'
                        ],
                        '.value' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_TINYMCE_EDITOR.VALUE'
                        ]
                    ]
                ],
                'menubar' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_TINYMCE_EDITOR.MENU_BAR',
                    'help' => 'PLUGIN_TINYMCE_EDITOR.MENU_BAR_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'menu' => [
                    'name' => 'menu',
                    'type' => 'list',
                    'style' => 'vertical',
                    'collapsible' => 0,
                    'label' => 'PLUGIN_ADMIN.MENU',
                    'help' => 'PLUGIN_TINYMCE_EDITOR.MENU_HELP',
                    'fields' => [
                        '.title' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.TITLE'
                        ],
                        '.items' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_ADMIN.ITEMS'
                        ]
                    ]
                ],
                'toolbar' => [
                    'name' => 'toolbar',
                    'type' => 'list',
                    'style' => 'vertical',
                    'collapsible' => 0,
                    'label' => 'PLUGIN_TINYMCE_EDITOR.TOOLBAR',
                    'help' => 'PLUGIN_TINYMCE_EDITOR.TOOLBAR_HELP',
                    'fields' => [
                        '.row' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_TINYMCE_EDITOR.ROW'
                        ]
                    ]
                ],
                'branding' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_TINYMCE_EDITOR.BRANDING',
                    'help' => 'PLUGIN_TINYMCE_EDITOR.BRANDING_HELP',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'statusbar' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_TINYMCE_EDITOR.STATUS_BAR',
                    'help' => 'PLUGIN_TINYMCE_EDITOR.STATUS_BAR_HELP',
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
