<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpInsCtlEnfermedad
 *
 * @ORM\Table(name="shcp_ins_ctl_enfermedad")
 * @ORM\Entity
 */
class ShcpInsCtlEnfermedad
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
     * @ORM\Column(name="enf_nombre", type="string", length=60, nullable=true)
     */
    private $enfNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="enf_tipo", type="string", nullable=true)
     */
    private $enfTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="enf_estado", type="string", nullable=true)
     */
    private $enfEstado;



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
     * @return ShcpInsCtlEnfermedad
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    
    /**
     * Set enfNombre
     *
     * @param string $enfNombre
     * @return ShcpInsCtlEnfermedad
     */
    public function setEnfNombre($enfNombre)
    {
        $this->enfNombre = $enfNombre;

        return $this;
    }

    /**
     * Get enfNombre
     *
     * @return string 
     */
    public function getEnfNombre()
    {
        return $this->enfNombre;
    }

    /**
     * Set enfTipo
     *
     * @param string $enfTipo
     * @return ShcpInsCtlEnfermedad
     */
    public function setEnfTipo($enfTipo)
    {
        $this->enfTipo = $enfTipo;

        return $this;
    }

    /**
     * Get enfTipo
     *
     * @return string 
     */
    public function getEnfTipo()
    {
        return $this->enfTipo;
    }

    /**
     * Set enfEstado
     *
     * @param string $enfEstado
     * @return ShcpInsCtlEnfermedad
     */
    public function setEnfEstado($enfEstado)
    {
        $this->enfEstado = $enfEstado;

        return $this;
    }

    /**
     * Get enfEstado
     *
     * @return string 
     */
    public function getEnfEstado()
    {
        return $this->enfEstado;
    }
}
