<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParAdmision
 *
 * @ORM\Table(name="shcp_par_admision", indexes={@ORM\Index(name="IDX_FC111E9693489788", columns={"id_exp_materno"}), @ORM\Index(name="IDX_FC111E96F83B3AB5", columns={"id_hc"})})
 * @ORM\Entity
 */
class ShcpParAdmision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_par_admision_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adm_fecha_ingreso", type="date", nullable=true)
     */
    private $admFechaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_carnet", type="string", nullable=true)
     */
    private $admCarnet;

    /**
     * @var integer
     *
     * @ORM\Column(name="adm_consulta_prenatal", type="integer", nullable=true)
     */
    private $admConsultaPrenatal;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_hosp_embarazo", type="string", nullable=true)
     */
    private $admHospEmbarazo;

    /**
     * @var integer
     *
     * @ORM\Column(name="adm_dias_hosp", type="integer", nullable=true)
     */
    private $admDiasHosp;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_corticoide_ante", type="string", nullable=true)
     */
    private $admCorticoideAnte;

    /**
     * @var integer
     *
     * @ORM\Column(name="adm_semana_inicio", type="integer", nullable=true)
     */
    private $admSemanaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="adm_inicio", type="string", nullable=true)
     */
    private $admInicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="adm_digitador_resp", type="bigint", nullable=true)
     */
    private $admDigitadorResp;

    /**
     * @var \ShcpExpMaterno
     *
     * @ORM\ManyToOne(targetEntity="ShcpExpMaterno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_exp_materno", referencedColumnName="id")
     * })
     */
    private $idExpMaterno;

    /**
     * @var \SecHistorialClinico
     *
     * @ORM\ManyToOne(targetEntity="SecHistorialClinico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hc", referencedColumnName="id")
     * })
     */
    private $idHc;



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
     * Set admFechaIngreso
     *
     * @param \DateTime $admFechaIngreso
     * @return ShcpParAdmision
     */
    public function setAdmFechaIngreso($admFechaIngreso)
    {
        $this->admFechaIngreso = $admFechaIngreso;

        return $this;
    }

    /**
     * Get admFechaIngreso
     *
     * @return \DateTime 
     */
    public function getAdmFechaIngreso()
    {
        return $this->admFechaIngreso;
    }

    /**
     * Set admCarnet
     *
     * @param string $admCarnet
     * @return ShcpParAdmision
     */
    public function setAdmCarnet($admCarnet)
    {
        $this->admCarnet = $admCarnet;

        return $this;
    }

    /**
     * Get admCarnet
     *
     * @return string 
     */
    public function getAdmCarnet()
    {
        return $this->admCarnet;
    }

    /**
     * Set admConsultaPrenatal
     *
     * @param integer $admConsultaPrenatal
     * @return ShcpParAdmision
     */
    public function setAdmConsultaPrenatal($admConsultaPrenatal)
    {
        $this->admConsultaPrenatal = $admConsultaPrenatal;

        return $this;
    }

    /**
     * Get admConsultaPrenatal
     *
     * @return integer 
     */
    public function getAdmConsultaPrenatal()
    {
        return $this->admConsultaPrenatal;
    }

    /**
     * Set admHospEmbarazo
     *
     * @param string $admHospEmbarazo
     * @return ShcpParAdmision
     */
    public function setAdmHospEmbarazo($admHospEmbarazo)
    {
        $this->admHospEmbarazo = $admHospEmbarazo;

        return $this;
    }

    /**
     * Get admHospEmbarazo
     *
     * @return string 
     */
    public function getAdmHospEmbarazo()
    {
        return $this->admHospEmbarazo;
    }

    /**
     * Set admDiasHosp
     *
     * @param integer $admDiasHosp
     * @return ShcpParAdmision
     */
    public function setAdmDiasHosp($admDiasHosp)
    {
        $this->admDiasHosp = $admDiasHosp;

        return $this;
    }

    /**
     * Get admDiasHosp
     *
     * @return integer 
     */
    public function getAdmDiasHosp()
    {
        return $this->admDiasHosp;
    }

    /**
     * Set admCorticoideAnte
     *
     * @param string $admCorticoideAnte
     * @return ShcpParAdmision
     */
    public function setAdmCorticoideAnte($admCorticoideAnte)
    {
        $this->admCorticoideAnte = $admCorticoideAnte;

        return $this;
    }

    /**
     * Get admCorticoideAnte
     *
     * @return string 
     */
    public function getAdmCorticoideAnte()
    {
        return $this->admCorticoideAnte;
    }

    /**
     * Set admSemanaInicio
     *
     * @param integer $admSemanaInicio
     * @return ShcpParAdmision
     */
    public function setAdmSemanaInicio($admSemanaInicio)
    {
        $this->admSemanaInicio = $admSemanaInicio;

        return $this;
    }

    /**
     * Get admSemanaInicio
     *
     * @return integer 
     */
    public function getAdmSemanaInicio()
    {
        return $this->admSemanaInicio;
    }

    /**
     * Set admInicio
     *
     * @param string $admInicio
     * @return ShcpParAdmision
     */
    public function setAdmInicio($admInicio)
    {
        $this->admInicio = $admInicio;

        return $this;
    }

    /**
     * Get admInicio
     *
     * @return string 
     */
    public function getAdmInicio()
    {
        return $this->admInicio;
    }

    /**
     * Set admDigitadorResp
     *
     * @param integer $admDigitadorResp
     * @return ShcpParAdmision
     */
    public function setAdmDigitadorResp($admDigitadorResp)
    {
        $this->admDigitadorResp = $admDigitadorResp;

        return $this;
    }

    /**
     * Get admDigitadorResp
     *
     * @return integer 
     */
    public function getAdmDigitadorResp()
    {
        return $this->admDigitadorResp;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpParAdmision
     */
    public function setIdExpMaterno(\Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno = null)
    {
        $this->idExpMaterno = $idExpMaterno;

        return $this;
    }

    /**
     * Get idExpMaterno
     *
     * @return \Minsal\shcpBundle\Entity\ShcpExpMaterno 
     */
    public function getIdExpMaterno()
    {
        return $this->idExpMaterno;
    }

    /**
     * Set idHc
     *
     * @param \Minsal\shcpBundle\Entity\SecHistorialClinico $idHc
     * @return ShcpParAdmision
     */
    public function setIdHc(\Minsal\shcpBundle\Entity\SecHistorialClinico $idHc = null)
    {
        $this->idHc = $idHc;

        return $this;
    }

    /**
     * Get idHc
     *
     * @return \Minsal\shcpBundle\Entity\SecHistorialClinico 
     */
    public function getIdHc()
    {
        return $this->idHc;
    }
}
