<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LabEstandarxgrupo
 *
 * @ORM\Table(name="lab_estandarxgrupo", indexes={@ORM\Index(name="IDX_B18609426724C8DC", columns={"idusuariomod"}), @ORM\Index(name="IDX_B186094213B895A1", columns={"idusuarioreg"})})
 * @ORM\Entity
 */
class LabEstandarxgrupo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="lab_estandarxgrupo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="idgrupo", type="string", length=4, nullable=false)
     */
    private $idgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombregrupo", type="string", length=50, nullable=true)
     */
    private $nombregrupo;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idgrupo
     *
     * @param string $idgrupo
     * @return LabEstandarxgrupo
     */
    public function setIdgrupo($idgrupo)
    {
        $this->idgrupo = $idgrupo;

        return $this;
    }

    /**
     * Get idgrupo
     *
     * @return string 
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }

    /**
     * Set nombregrupo
     *
     * @param string $nombregrupo
     * @return LabEstandarxgrupo
     */
    public function setNombregrupo($nombregrupo)
    {
        $this->nombregrupo = $nombregrupo;

        return $this;
    }

    /**
     * Get nombregrupo
     *
     * @return string 
     */
    public function getNombregrupo()
    {
        return $this->nombregrupo;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return LabEstandarxgrupo
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
     * @return LabEstandarxgrupo
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
     * Set idusuariomod
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuariomod
     * @return LabEstandarxgrupo
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
     * @return LabEstandarxgrupo
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
}
