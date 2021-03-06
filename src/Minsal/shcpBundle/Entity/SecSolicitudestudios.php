<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecSolicitudestudios
 *
 * @ORM\Table(name="sec_solicitudestudios", indexes={@ORM\Index(name="fki_fos_user_user_sec_solicitudestudios", columns={"idusuarioreg"}), @ORM\Index(name="fki_sec_solicitud_estudfios_mnt_aten_area_mod_estab", columns={"id_atencion"}), @ORM\Index(name="IDX_7CE0B616DA799B26", columns={"id_establecimiento_externo"}), @ORM\Index(name="IDX_7CE0B6167DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_7CE0B616265DE1E3", columns={"estado"}), @ORM\Index(name="IDX_7CE0B616701624C4", columns={"id_expediente"}), @ORM\Index(name="IDX_7CE0B61631827296", columns={"id_historial_clinico"}), @ORM\Index(name="IDX_7CE0B616174D74B2", columns={"idtiposolicitud"})})
 * @ORM\Entity
 */
class SecSolicitudestudios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sec_solicitudestudios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_solicitud", type="date", nullable=true)
     */
    private $fechaSolicitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorareg", type="datetime", nullable=true)
     */
    private $fechahorareg;

    /**
     * @var integer
     *
     * @ORM\Column(name="impresiones", type="integer", nullable=true)
     */
    private $impresiones = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cama", type="integer", nullable=true)
     */
    private $cama = '0';

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion", referencedColumnName="id")
     * })
     */
    private $idAtencion;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento_externo", referencedColumnName="id")
     * })
     */
    private $idEstablecimientoExterno;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \CtlEstadoServicioApoyo
     *
     * @ORM\ManyToOne(targetEntity="CtlEstadoServicioApoyo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado", referencedColumnName="id")
     * })
     */
    private $estado;

    /**
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_expediente", referencedColumnName="id")
     * })
     */
    private $idExpediente;

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
     * @var \SecHistorialClinico
     *
     * @ORM\ManyToOne(targetEntity="SecHistorialClinico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_historial_clinico", referencedColumnName="id")
     * })
     */
    private $idHistorialClinico;

    /**
     * @var \LabTiposolicitud
     *
     * @ORM\ManyToOne(targetEntity="LabTiposolicitud")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtiposolicitud", referencedColumnName="id")
     * })
     */
    private $idtiposolicitud;



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
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     * @return SecSolicitudestudios
     */
    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get fechaSolicitud
     *
     * @return \DateTime 
     */
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    /**
     * Set fechahorareg
     *
     * @param \DateTime $fechahorareg
     * @return SecSolicitudestudios
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
     * Set impresiones
     *
     * @param integer $impresiones
     * @return SecSolicitudestudios
     */
    public function setImpresiones($impresiones)
    {
        $this->impresiones = $impresiones;

        return $this;
    }

    /**
     * Get impresiones
     *
     * @return integer 
     */
    public function getImpresiones()
    {
        return $this->impresiones;
    }

    /**
     * Set cama
     *
     * @param integer $cama
     * @return SecSolicitudestudios
     */
    public function setCama($cama)
    {
        $this->cama = $cama;

        return $this;
    }

    /**
     * Get cama
     *
     * @return integer 
     */
    public function getCama()
    {
        return $this->cama;
    }

    /**
     * Set idAtencion
     *
     * @param \Minsal\shcpBundle\Entity\CtlAtencion $idAtencion
     * @return SecSolicitudestudios
     */
    public function setIdAtencion(\Minsal\shcpBundle\Entity\CtlAtencion $idAtencion = null)
    {
        $this->idAtencion = $idAtencion;

        return $this;
    }

    /**
     * Get idAtencion
     *
     * @return \Minsal\shcpBundle\Entity\CtlAtencion 
     */
    public function getIdAtencion()
    {
        return $this->idAtencion;
    }

    /**
     * Set idEstablecimientoExterno
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimientoExterno
     * @return SecSolicitudestudios
     */
    public function setIdEstablecimientoExterno(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimientoExterno = null)
    {
        $this->idEstablecimientoExterno = $idEstablecimientoExterno;

        return $this;
    }

    /**
     * Get idEstablecimientoExterno
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimientoExterno()
    {
        return $this->idEstablecimientoExterno;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return SecSolicitudestudios
     */
    public function setIdEstablecimiento(\Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set estado
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstadoServicioApoyo $estado
     * @return SecSolicitudestudios
     */
    public function setEstado(\Minsal\shcpBundle\Entity\CtlEstadoServicioApoyo $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \Minsal\shcpBundle\Entity\CtlEstadoServicioApoyo 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idExpediente
     *
     * @param \Minsal\shcpBundle\Entity\MntExpediente $idExpediente
     * @return SecSolicitudestudios
     */
    public function setIdExpediente(\Minsal\shcpBundle\Entity\MntExpediente $idExpediente = null)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return \Minsal\shcpBundle\Entity\MntExpediente 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set idusuarioreg
     *
     * @param \Minsal\shcpBundle\Entity\FosUserUser $idusuarioreg
     * @return SecSolicitudestudios
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
     * Set idHistorialClinico
     *
     * @param \Minsal\shcpBundle\Entity\SecHistorialClinico $idHistorialClinico
     * @return SecSolicitudestudios
     */
    public function setIdHistorialClinico(\Minsal\shcpBundle\Entity\SecHistorialClinico $idHistorialClinico = null)
    {
        $this->idHistorialClinico = $idHistorialClinico;

        return $this;
    }

    /**
     * Get idHistorialClinico
     *
     * @return \Minsal\shcpBundle\Entity\SecHistorialClinico 
     */
    public function getIdHistorialClinico()
    {
        return $this->idHistorialClinico;
    }

    /**
     * Set idtiposolicitud
     *
     * @param \Minsal\shcpBundle\Entity\LabTiposolicitud $idtiposolicitud
     * @return SecSolicitudestudios
     */
    public function setIdtiposolicitud(\Minsal\shcpBundle\Entity\LabTiposolicitud $idtiposolicitud = null)
    {
        $this->idtiposolicitud = $idtiposolicitud;

        return $this;
    }

    /**
     * Get idtiposolicitud
     *
     * @return \Minsal\shcpBundle\Entity\LabTiposolicitud 
     */
    public function getIdtiposolicitud()
    {
        return $this->idtiposolicitud;
    }
}
