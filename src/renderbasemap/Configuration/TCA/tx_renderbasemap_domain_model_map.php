<?php

defined('TYPO3_MODE') or die();

return [
    'ctrl' => [
        'title' => 'Map',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'typeicon_classes' => [
            'default' => 'content-map'
        ],
    ],
    'columns' => [
        'title' => [
            'label' => 'Title',
            'config' => [
                'type'  => 'input',
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
        'zoom' => [
            'label' => 'Zoom',
            'config' => [
                'type'  => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'x1', 1
                    ],
                    [
                        'x2', 2
                    ],
                    [
                        'x3', 3
                    ],
                    [
                        'x4', 4
                    ],
                    [
                        'x5', 5
                    ],
                    [
                        'x6', 6
                    ],
                    [
                        'x7', 7
                    ],
                    [
                        'x8', 8
                    ],
                    [
                        'x9', 9
                    ],
                    [
                        'x10', 10
                    ],
                    [
                        'x11', 11
                    ],
                    [
                        'x12', 12
                    ],
                    [
                        'x13', 13
                    ],
                    [
                        'x14', 14
                    ],
                    [
                        'x15', 15
                    ],
                    [
                        'x16', 16
                    ],
                    [
                        'x17', 17
                    ],
                    [
                        'x18', 18
                    ],
                    [
                        'x19', 19
                    ],
                ],
            ],
        ],
        'markers' => [
            'label' => 'Markers',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_renderbasemap_domain_model_marker',
            ],
        ],
        'width' => [
            'label' => 'Width',
            'config' => [
                'type'  => 'input',
                'eval' => 'int',
            ],
        ],
        'height' => [
            'label' => 'Height',
            'config' => [
                'type'  => 'input',
                'eval' => 'int',
            ],
        ],
        'slug' => [
            'label' => 'URL-Segment',
            'config' => [
                'type'  => 'slug',
                'generatorOptions' => [
                    'fields' => [
                        'title',
                    ],
                    'fieldSeparator' => '/',
                    'prefixParentPageSlug' => true,
                ],
                'fallbackCharacter' => '-',
                'eval' => 'uniqueInSite',
                'default' => '',
            ],
        ],
    ],



    'palettes' => [
        'latlon' => [
            'showitem' => 'lat, lon'
        ],
        'size' => [
            'showitem' => 'width, height'
        ],
    ],



    'types' => [
        '1' => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,
                slug,
                --palette--;Coordinates;latlon,
                --palette--;;size,
                zoom,
                markers,
            ',
        ]
    ],
];
