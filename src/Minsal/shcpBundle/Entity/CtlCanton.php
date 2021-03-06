<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlCanton
 *
 * @ORM\Table(name="ctl_canton", indexes={@ORM\Index(name="IDX_CC9031F47EAD49C7", columns={"id_municipio"})})
 * @ORM\Entity
 */
class CtlCanton
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_canton_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_digestyc", type="string", length=5, nullable=true)
     */
    private $codigoDigestyc;

    /**
     * @var \CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id")
     * })
     */
    private $idMunicipio;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return CtlCanton
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set codigoDigestyc
     *
     * @param string $codigoDigestyc
     * @return CtlCanton
     */
    public function setCodigoDigestyc($codigoDigestyc)
    {
        $this->codigoDigestyc = $codigoDigestyc;

        return $this;
    }

    /**
     * Get codigoDigestyc
     *
     * @return string 
     */
    public function getCodigoDigestyc()
    {
        return $this->codigoDigestyc;
    }

    /**
     * Set idMunicipio
     *
     * @param \Minsal\shcpBundle\Entity\CtlMunicipio $idMunicipio
     * @return CtlCanton
     */
    public function setIdMunicipio(\Minsal\shcpBundle\Entity\CtlMunicipio $idMunicipio = null)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return \Minsal\shcpBundle\Entity\CtlMunicipio 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }
}
