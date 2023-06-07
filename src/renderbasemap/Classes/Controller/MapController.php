<?php

namespace Mleihs\Typo3ExtDev\Controller;

use Mleihs\Typo3ExtDev\Domain\Model\Map;
use Mleihs\Typo3ExtDev\Domain\Model\Marker;
use Mleihs\Typo3ExtDev\Domain\Repository\MapRepository;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;

class MapController extends ActionController
{
    public function __construct(
        protected MapRepository $mapRepository,
        protected SiteFinder $siteFinder,
        protected PersistenceManager $persistenceManager
    ) { }

    public function listAction(): void
    {
        $maps = $this->mapRepository->findAll();
        $maps->getQuery()->getQuerySettings()->setStoragePageIds([
            $this->configurationManager->getContentObject()->data['pid'] ?? 0
        ]);

        $this->view->assign('maps', $maps);
    }

    public function showAction(Map $map = null): void
    {
        $map = $map ?? $this->mapRepository->findByIdentifier(
            $this->settings['mapUid'] ?? 0
        );

        $this->view->assign('map', $map);
    }

#    public function addMarkerToMapAction(Map $map, Marker $marker): void
#    {
#        $map->getMarkers()->attach($marker);
#        $this->mapRepository->update($map);
#
#        $map = GeneralUtility::makeInstance(Map::class);
#        $this->mapRepository->add($map);
#
#        $this->persistenceManager->persistAll();
#    }
}