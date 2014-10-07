<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpAboCtlCie10
 *
 * @ORM\Table(name="shcp_abo_ctl_cie10")
 * @ORM\Entity
 */
class ShcpAboCtlCie10
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", nullable=false)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cie10_nombre", type="string", length=100, nullable=true)
     */
    private $cie10Nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cie10_tipo", type="string", nullable=true)
     */
    private $cie10Tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="cie10_estado", type="string", nullable=true)
     */
    private $cie10Estado;



    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id
     *
     * @param string $id
     * @return ShcpAboCtlCie10
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    /**
     * Set cie10Nombre
     *
     * @param string $cie10Nombre
     * @return ShcpAboCtlCie10
     */
    public function setCie10Nombre($cie10Nombre)
    {
        $this->cie10Nombre = $cie10Nombre;

        return $this;
    }

    /**
     * Get cie10Nombre
     *
     * @return string 
     */
    public function getCie10Nombre()
    {
        return $this->cie10Nombre;
    }

    /**
     * Set cie10Tipo
     *
     * @param string $cie10Tipo
     * @return ShcpAboCtlCie10
     */
    public function setCie10Tipo($cie10Tipo)
    {
        $this->cie10Tipo = $cie10Tipo;

        return $this;
    }

    /**
     * Get cie10Tipo
     *
     * @return string 
     */
    public function getCie10Tipo()
    {
        return $this->cie10Tipo;
    }

    /**
     * Set cie10Estado
     *
     * @param string $cie10Estado
     * @return ShcpAboCtlCie10
     */
    public function setCie10Estado($cie10Estado)
    {
        $this->cie10Estado = $cie10Estado;

        return $this;
    }

    /**
     * Get cie10Estado
     *
     * @return string 
     */
    public function getCie10Estado()
    {
        return $this->cie10Estado;
    }
}