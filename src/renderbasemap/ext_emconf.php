<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Render Base Map',
    'description' => '',
    'category' => 'extension',
    'author' => 'Tim Schellenberg',
    'author_email' => 'tim@agentur-pottkinder.de',
    'author_company' => '',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '1.0.0',
    'autoload' => [
        'psr-4' => [
            'Mleihs\\Typo3ExtDev\\' => 'Classes',
        ],
    ],
    'constraints' => [
        'depends' => [],
        'conflicts' => [],
        'suggests' => [],
    ],
];
