<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntFarmaciaxestablecimiento
 *
 * @ORM\Table(name="mnt_farmaciaxestablecimiento", indexes={@ORM\Index(name="IDX_791D56B947B0200", columns={"idfarmacia"})})
 * @ORM\Entity
 */
class MntFarmaciaxestablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mnt_farmaciaxestablecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idestablecimiento", type="integer", nullable=false)
     */
    private $idestablecimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="habilitadofarmacia", type="string", nullable=false)
     */
    private $habilitadofarmacia = 'N';

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodalidad", type="integer", nullable=false)
     */
    private $idmodalidad;

    /**
     * @var \MntFarmacia
     *
     * @ORM\ManyToOne(targetEntity="MntFarmacia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfarmacia", referencedColumnName="id")
     * })
     */
    private $idfarmacia;



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
     * Set idestablecimiento
     *
     * @param integer $idestablecimiento
     * @return MntFarmaciaxestablecimiento
     */
    public function setIdestablecimiento($idestablecimiento)
    {
        $this->idestablecimiento = $idestablecimiento;

        return $this;
    }

    /**
     * Get idestablecimiento
     *
     * @return integer 
     */
    public function getIdestablecimiento()
    {
        return $this->idestablecimiento;
    }

    /**
     * Set habilitadofarmacia
     *
     * @param string $habilitadofarmacia
     * @return MntFarmaciaxestablecimiento
     */
    public function setHabilitadofarmacia($habilitadofarmacia)
    {
        $this->habilitadofarmacia = $habilitadofarmacia;

        return $this;
    }

    /**
     * Get habilitadofarmacia
     *
     * @return string 
     */
    public function getHabilitadofarmacia()
    {
        return $this->habilitadofarmacia;
    }

    /**
     * Set idmodalidad
     *
     * @param integer $idmodalidad
     * @return MntFarmaciaxestablecimiento
     */
    public function setIdmodalidad($idmodalidad)
    {
        $this->idmodalidad = $idmodalidad;

        return $this;
    }

    /**
     * Get idmodalidad
     *
     * @return integer 
     */
    public function getIdmodalidad()
    {
        return $this->idmodalidad;
    }

    /**
     * Set idfarmacia
     *
     * @param \Minsal\shcpBundle\Entity\MntFarmacia $idfarmacia
     * @return MntFarmaciaxestablecimiento
     */
    public function setIdfarmacia(\Minsal\shcpBundle\Entity\MntFarmacia $idfarmacia = null)
    {
        $this->idfarmacia = $idfarmacia;

        return $this;
    }

    /**
     * Get idfarmacia
     *
     * @return \Minsal\shcpBundle\Entity\MntFarmacia 
     */
    public function getIdfarmacia()
    {
        return $this->idfarmacia;
    }
}
