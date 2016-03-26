<?php
namespace App\Module\MediaModule;

class ModuleConfig
{

    public function __invoke()
    {
        return [
            'routes' => [
                [
                    'name' => 'module.media.home',
                    'path' => '/media/index',
                    'middleware' => \App\Module\MediaModule\MediaPageAction::class,
                    'allowed_methods' => [
                        'GET'
                    ]
                ]
            ]
        ];
    }
}