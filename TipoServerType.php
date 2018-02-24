<?php

namespace TestNs\MyApp;

/**
 * Class representing TipoServerType
 *
 * 
 * XSD Type: tipoServer
 */
class TipoServerType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property integer $version
     */
    private $version = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return integer
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param integer $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

