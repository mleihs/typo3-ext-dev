<?php

defined('TYPO3_MODE') or die();

// Plugins
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'renderbasemap',
    'MapList',
    [
        \Mleihs\Typo3ExtDev\Controller\MapController::class => 'list, show'
    ],
    [
        \Mleihs\Typo3ExtDev\Controller\MapController::class => 'list, show'
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'renderbasemap',
    'MapDetail',
    [
        \Mleihs\Typo3ExtDev\Controller\MapController::class => 'show'
    ],
    [
        \Mleihs\Typo3ExtDev\Controller\MapController::class => 'show'
    ]
);

// TSConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    @import "EXT:renderbasemap/Configuration/page.tsconfig"
');