<?php

namespace Mleihs\Typo3ExtDev\Configuration;

use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class SiteConfiguration
{
    protected static ?Site $defaultSite = null;

    public static function getGmailPassword(?Site $site): string
    {
        return static::getSiteConfiguration($site)['apis']['gmail']['password'] ?? '';
    }
    public static function getGmailUsername(?Site $site): string
    {
        return static::getSiteConfiguration($site)['apis']['gmail']['username'] ?? '';
    }

    public static function getSiteConfiguration(?Site $site): array
    {
        $site = $site ?? static::$defaultSite ?? static::getDefaultSite();

        if ($site === null) {
            return [];
        }

        return $site->getConfiguration()['basemap'] ?? [];
    }

    public static function isConfigured(?Site $site): bool
    {
        return $site !== null && ((static::getSiteConfiguration($site)['basemap'] ?? null) !== null);
    }
    public static function getDefaultSite(): ?Site
    {
        if (static::$defaultSite !== null) {
            return static::$defaultSite;
        }

        $siteFinder = GeneralUtility::makeInstance(SiteFinder::class);
        foreach ($siteFinder->getAllSites() as $siteCandidate) {
            if (static::isConfigured($siteCandidate)) {
                static::$defaultSite = $siteCandidate;
                return $siteCandidate;
            }
        }
        return null;
    }
}