<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabAntibioticosportarjeta
 *
 * @ORM\Table(name="lab_antibioticosportarjeta", indexes={@ORM\Index(name="fki_antibioticos_antibioticosportarjeta", columns={"idantibiotico"}), @ORM\Index(name="IDX_58C90CF875BB31F7", columns={"idestablecimiento"}), @ORM\Index(name="IDX_58C90CF86724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_58C90CF813B895A1", columns={"idusuarioreg"}), @ORM\Index(name="IDX_58C90CF87194E5E8", columns={"idtarjeta"})})
 * @ORM\Entity
 */
class LabAntibioticosportarjeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_antibioticosportarjeta_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoramod", type="datetime", nullable=true)
     */
    private $fechahoramod;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=false)
     */
    private $habilitado = true;

    /**
     * @var \LabAntibioticos
     *
     * @ORM\ManyToOne(targetEntity="LabAntibioticos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idantibiotico", referencedColumnName="id")
     * })
     */
    private $idantibiotico;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestablecimiento", referencedColumnName="id")
     * })
     */
    private $idestablecimiento;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuariomod", referencedColumnName="id")
     * })
     */
    private $idusuariomod;

    /**
     * @var \FosUserUser
     *
     * @ORM\ManyToOne(targetEntity="FosUserUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuarioreg", referencedColumnName="id")
     * })
     */
    private $idusuarioreg;

    /**
     * @var \LabTarjetasvitek
     *
     * @ORM\ManyToOne(targetEntity="LabTarjetasvitek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtarjeta", referencedColumnName="id")
     * })
     */
    private $idtarjeta;



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
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return LabAntibioticosportarjeta
     */
    public function setFechahorareg($fechahorareg)
    {
        $this->fechahorareg = $fechahorareg;

        return $this;
    }

    /**
     * Get fechahorareg
     *
     * @return \DateTime 
     */
    public function getFechahorareg()
    {
        return $this->fechahorareg;
    }

    /**
     * Set fechahoramod
     *
     * @param \DateTime $fechahoramod
     * @return LabAntibioticosportarjeta
     */
    public function setFechahoramod($fechahoramod)
    {
        $this->fechahoramod = $fechahoramod;

        return $this;
    }

    /**
     * Get fechahoramod
     *
     * @return \DateTime 
     */
    public function getFechahoramod()
    {
        return $this->fechahoramod;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return LabAntibioticosportarjeta
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set idantibiotico
     *
     * @param \Minsal\shcpBundle\Entity\LabAntibioticos $idantibiotico
     * @return LabAntibioticosportarjeta
     */
    public function setIdantibiotico(\Minsal\shcpBundle\Entity\LabAntibioticos $idantibiotico = null)
    {
        $this->idantibiotico = $idantibiotico;

        return $this;
    }

    /**
     * Get idantibiotico
     *
     * @return \Minsal\shcpBundle\Entity\LabAntibioticos 
     */
    public function getIdantibiotico()
    {
        return $this->idantibiotico;
    }

    /**
     * Set idestablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento
     * @return LabAntibioticosportarjeta
     */
    public function setIdestablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idestablecimiento = null)
    {
        $this->idestablecimiento = $idestablecimiento;

        return $this;
    }

    /**
     * Get idestablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdestablecimiento()
    {
        return $this->idestablecimiento;
    }

    /**
     * Set idusuariomod
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuariomod
     * @return LabAntibioticosportarjeta
     */
    public function setIdusuariomod(\Minsal\shcpBundle\Entity\FosUserUser $idusuariomod = null)
    {
        $this->idusuariomod = $idusuariomod;

        return $this;
    }

    /**
     * Get idusuariomod
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdusuariomod()
    {
        return $this->idusuariomod;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return LabAntibioticosportarjeta
     */
    public function setIdusuarioreg(\Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg = null)
    {
        $this->idusuarioreg = $idusuarioreg;

        return $this;
    }

    /**
     * Get idusuarioreg
     *
     * @return \Minsal\shcpBundle\Entity\FosUserUser 
     */
    public function getIdusuarioreg()
    {
        return $this->idusuarioreg;
    }

    /**
     * Set idtarjeta
     *
     * @param \Minsal\shcpBundle\Entity\LabTarjetasvitek $idtarjeta
     * @return LabAntibioticosportarjeta
     */
    public function setIdtarjeta(\Minsal\shcpBundle\Entity\LabTarjetasvitek $idtarjeta = null)
    {
        $this->idtarjeta = $idtarjeta;

        return $this;
    }

    /**
     * Get idtarjeta
     *
     * @return \Minsal\shcpBundle\Entity\LabTarjetasvitek 
     */
    public function getIdtarjeta()
    {
        return $this->idtarjeta;
    }
}
