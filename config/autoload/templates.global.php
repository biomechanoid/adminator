<?php
return [
    'dependencies' => [
        'factories' => [
            'Zend\Expressive\FinalHandler' => Zend\Expressive\Container\TemplatedErrorHandlerFactory::class,

            Zend\Expressive\Template\TemplateRendererInterface::class => Zend\Expressive\Twig\TwigRendererFactory::class
        ]
    ],

    'templates' => [
        'extension' => 'html.twig',
        'paths' => [
            'app' => [
                'templates/app'
            ],
            'layout' => [
                'templates/layout'
            ],
            'partials' => [
                'templates/partials'
            ],
            'error' => [
                'templates/error'
            ]
        ]
    ],

    'twig' => [
        'cache_dir' => 'data/cache/twig',
        'assets_url' => '/',
        'assets_version' => null,
        'extensions' => [],
        'globals' => []
        // extension service names or instances

    ]
];
