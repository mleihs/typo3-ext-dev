<?php

namespace Mleihs\Typo3ExtDev\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Map extends AbstractEntity {
    protected string $title = '';
    protected string $lat = '';
    protected string $lon = '';
    protected int $zoom = 1;
    protected int $width = 1;
    protected int $height = 1;

    /** @var ObjectStorage<Marker> $markers */
    protected ObjectStorage $markers;

    public function __construct()
    {
        $this->ensureObjectStorages();
    }

    public function initializeObject(): void
    {
        $this->ensureObjectStorages();
    }

    public function ensureObjectStorages(): void
    {
        $this->markers = new ObjectStorage();
    }

    /**
     * Get the value of markers
     *
     * @return ObjectStorage
     */
    public function getMarkers(): ObjectStorage
    {
        return $this->markers;
    }

    /**
     * Set the value of markers
     *
     * @param ObjectStorage $markers
     *
     * @return self
     */
    public function setMarkers(ObjectStorage $markers): self
    {
        $this->markers = $markers;

        return $this;
    }

    /**
     * Get the value of height
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of width
     *
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of zoom
     *
     * @return int
     */
    public function getZoom(): int
    {
        return $this->zoom;
    }

    /**
     * Set the value of zoom
     *
     * @param int $zoom
     *
     * @return self
     */
    public function setZoom(int $zoom): self
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get the value of lon
     *
     * @return string
     */
    public function getLon(): string
    {
        return $this->lon;
    }

    /**
     * Set the value of lon
     *
     * @param string $lon
     *
     * @return self
     */
    public function setLon(string $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get the value of lat
     *
     * @return string
     */
    public function getLat(): string
    {
        return $this->lat;
    }

    /**
     * Set the value of lat
     *
     * @param string $lat
     *
     * @return self
     */
    public function setLat(string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}