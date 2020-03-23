<?php

return [
    'site-name' => [
        'description' => 'core::settings.site-name',
        'view' => 'text',
        'translatable' => true,
    ],
    'site-description' => [
        'description' => 'core::settings.site-description',
        'view' => 'textarea',
        'translatable' => true,
    ],
    'template' => [
        'description' => 'core::settings.template',
        'view' => 'core::fields.select-theme',
    ],
    'url-logo-login' => [
        'description' => 'core::settings.url-logo-login',
        'view' => 'text',
        'translatable' => false,
    ],
    'codigo-cliente' => [
        'description' => 'Código login cliente',
        'view' => 'text',
        'translatable' => false,
    ],
    'tag-manager-head-script' => [
        'description' => 'core::settings.tag-manager-head-script',
        'view' => 'textarea',
        'translatable' => false,
    ],
    'tag-manager-body-script' => [
        'description' => 'core::settings.tag-manager-body-script',
        'view' => 'textarea',
        'translatable' => false,
    ],
    'datos-estructurador-script' => [
        'description' => 'core::settings.datos-estructurador-script',
        'view' => 'textarea',
        'translatable' => false,
    ],
    'locales' => [
        'description' => 'core::settings.locales',
        'view' => 'core::fields.select-locales',
        'translatable' => false,
    ],
    'active' => [
        'description' => 'Activa o desactiva la web',
        'view' => 'checkbox',
        'translatable' => false,
    ],
];
