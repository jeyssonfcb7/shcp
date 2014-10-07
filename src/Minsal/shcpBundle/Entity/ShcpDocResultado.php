<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpDocResultado
 *
 * @ORM\Table(name="shcp_doc_resultado", indexes={@ORM\Index(name="IDX_4EC8A1BA93489788", columns={"id_exp_materno"}), @ORM\Index(name="IDX_4EC8A1BA7DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class ShcpDocResultado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shcp_doc_resultado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="resul_hoja_filtro", type="string", nullable=true)
     */
    private $resulHojaFiltro;

    /**
     * @var string
     *
     * @ORM\Column(name="resul_tamizaje", type="string", nullable=true)
     */
    private $resulTamizaje;

    /**
     * @var string
     *
     * @ORM\Column(name="resul_observ_hoja_filtro", type="string", length=50, nullable=true)
     */
    private $resulObservHojaFiltro;

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
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;



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
     * Set resulHojaFiltro
     *
     * @param string $resulHojaFiltro
     * @return ShcpDocResultado
     */
    public function setResulHojaFiltro($resulHojaFiltro)
    {
        $this->resulHojaFiltro = $resulHojaFiltro;

        return $this;
    }

    /**
     * Get resulHojaFiltro
     *
     * @return string 
     */
    public function getResulHojaFiltro()
    {
        return $this->resulHojaFiltro;
    }

    /**
     * Set resulTamizaje
     *
     * @param string $resulTamizaje
     * @return ShcpDocResultado
     */
    public function setResulTamizaje($resulTamizaje)
    {
        $this->resulTamizaje = $resulTamizaje;

        return $this;
    }

    /**
     * Get resulTamizaje
     *
     * @return string 
     */
    public function getResulTamizaje()
    {
        return $this->resulTamizaje;
    }

    /**
     * Set resulObservHojaFiltro
     *
     * @param string $resulObservHojaFiltro
     * @return ShcpDocResultado
     */
    public function setResulObservHojaFiltro($resulObservHojaFiltro)
    {
        $this->resulObservHojaFiltro = $resulObservHojaFiltro;

        return $this;
    }

    /**
     * Get resulObservHojaFiltro
     *
     * @return string 
     */
    public function getResulObservHojaFiltro()
    {
        return $this->resulObservHojaFiltro;
    }

    /**
     * Set idExpMaterno
     *
     * @param \Minsal\shcpBundle\Entity\ShcpExpMaterno $idExpMaterno
     * @return ShcpDocResultado
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
     * Set idEstablecimiento
     *
     * @param \Minsal\shcpBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ShcpDocResultado
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
}
