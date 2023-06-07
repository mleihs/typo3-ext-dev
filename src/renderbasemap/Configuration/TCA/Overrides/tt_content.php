<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'renderbasemap',
    'MapList',
    'Renders a list of maps.'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'renderbasemap',
    'MapDetail',
    'Renders a singular map.'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['renderbasemap_mapdetail'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'renderbasemap_mapdetail',
    'FILE:EXT:renderbasemap/Configuration/FlexForms/MapDetail.xml'
);