<?php

defined('TYPO3_MODE') or die();

return [
    'ctrl' => [
        'title' => 'Marker',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'typeicon_classes' => [
            'default' => 'content-marker'
        ],
        'hideTable' => true,
    ],
    'columns' => [
        'map' => [
            'label' => 'Map',
            'config' => [
                'type'  => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_renderbasemap_domain_model_map',
            ],
        ],
        'lat' => [
            'label' => 'Lat',
            'config' => [
                'type'  => 'input',
            ],
        ],
        'lon' => [
            'label' => 'Lon',
            'config' => [
                'type'  => 'input',
            ],
        ],
        'title' => [
            'label' => 'Title',
            'config' => [
                'type'  => 'input',
            ],
        ],
        'description' => [
            'label' => 'Description',
            'config' => [
                'type'  => 'text',
            ],
        ],
    ],

    'palettes' => [
        'latlon' => [
            'showitem' => 'lat, lon'
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                map,
                title,
                description,
                --palette--;;latlon,
            ',
        ]
    ],
];
