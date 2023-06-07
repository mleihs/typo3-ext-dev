<?php

namespace Mleihs\Typo3ExtDev\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Marker extends AbstractEntity {
    protected string $lat = '';
    protected string $lon = '';
    protected string $title = '';
    protected string $description = '';

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

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
}