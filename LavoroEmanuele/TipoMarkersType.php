<?php

namespace TestNs\MyApp;

/**
 * Class representing TipoMarkersType
 *
 * 
 * XSD Type: tipoMarkers
 */
class TipoMarkersType
{

    /**
     * @property \DateTime $generated
     */
    private $generated = null;

    /**
     * @property \TestNs\MyApp\TipoMarkersType\MarkerAType[] $marker
     */
    private $marker = array(
        
    );

    /**
     * Gets as generated
     *
     * @return \DateTime
     */
    public function getGenerated()
    {
        return $this->generated;
    }

    /**
     * Sets a new generated
     *
     * @param \DateTime $generated
     * @return self
     */
    public function setGenerated(\DateTime $generated)
    {
        $this->generated = $generated;
        return $this;
    }

    /**
     * Adds as marker
     *
     * @return self
     * @param \TestNs\MyApp\TipoMarkersType\MarkerAType $marker
     */
    public function addToMarker(\TestNs\MyApp\TipoMarkersType\MarkerAType $marker)
    {
        $this->marker[] = $marker;
        return $this;
    }

    /**
     * isset marker
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMarker($index)
    {
        return isset($this->marker[$index]);
    }

    /**
     * unset marker
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMarker($index)
    {
        unset($this->marker[$index]);
    }

    /**
     * Gets as marker
     *
     * @return \TestNs\MyApp\TipoMarkersType\MarkerAType[]
     */
    public function getMarker()
    {
        return $this->marker;
    }

    /**
     * Sets a new marker
     *
     * @param \TestNs\MyApp\TipoMarkersType\MarkerAType[] $marker
     * @return self
     */
    public function setMarker(array $marker)
    {
        $this->marker = $marker;
        return $this;
    }


}

