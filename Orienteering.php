<?php

namespace TestNs\MyApp;

/**
 * Class representing Orienteering
 */
class Orienteering
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property \TestNs\MyApp\TipoServerType $server
     */
    private $server = null;

    /**
     * @property \TestNs\MyApp\TipoMarkersType[] $markers
     */
    private $markers = array(
        
    );

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as server
     *
     * @return \TestNs\MyApp\TipoServerType
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Sets a new server
     *
     * @param \TestNs\MyApp\TipoServerType $server
     * @return self
     */
    public function setServer(\TestNs\MyApp\TipoServerType $server)
    {
        $this->server = $server;
        return $this;
    }

    /**
     * Adds as markers
     *
     * @return self
     * @param \TestNs\MyApp\TipoMarkersType $markers
     */
    public function addToMarkers(\TestNs\MyApp\TipoMarkersType $markers)
    {
        $this->markers[] = $markers;
        return $this;
    }

    /**
     * isset markers
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMarkers($index)
    {
        return isset($this->markers[$index]);
    }

    /**
     * unset markers
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMarkers($index)
    {
        unset($this->markers[$index]);
    }

    /**
     * Gets as markers
     *
     * @return \TestNs\MyApp\TipoMarkersType[]
     */
    public function getMarkers()
    {
        return $this->markers;
    }

    /**
     * Sets a new markers
     *
     * @param \TestNs\MyApp\TipoMarkersType[] $markers
     * @return self
     */
    public function setMarkers(array $markers)
    {
        $this->markers = $markers;
        return $this;
    }


}

