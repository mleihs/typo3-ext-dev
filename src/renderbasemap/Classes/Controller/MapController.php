<?php

namespace Mleihs\Typo3ExtDev\Controller;

use Mleihs\Typo3ExtDev\Domain\Model\Map;
use Mleihs\Typo3ExtDev\Domain\Repository\MapRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class MapController extends ActionController
{
    public function __construct(
        protected MapRepository $mapRepository
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
}