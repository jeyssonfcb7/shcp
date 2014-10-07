<?php

namespace Minsal\shcpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShcpParCtlPatologia
 *
 * @ORM\Table(name="shcp_par_ctl_patologia")
 * @ORM\Entity
 */
class ShcpParCtlPatologia
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
     * @ORM\Column(name="cpat_nombre_patologia", type="string", length=50, nullable=true)
     */
    private $cpatNombrePatologia;

    /**
     * @var string
     *
     * @ORM\Column(name="cpat_tipo_patologia", type="string", nullable=true)
     */
    private $cpatTipoPatologia;

    /**
     * @var string
     *
     * @ORM\Column(name="cpat_estado", type="string", nullable=true)
     */
    private $cpatEstado;



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
     * @return ShcpParCtlPatologia
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    /**
     * Set cpatNombrePatologia
     *
     * @param string $cpatNombrePatologia
     * @return ShcpParCtlPatologia
     */
    public function setCpatNombrePatologia($cpatNombrePatologia)
    {
        $this->cpatNombrePatologia = $cpatNombrePatologia;

        return $this;
    }

    /**
     * Get cpatNombrePatologia
     *
     * @return string 
     */
    public function getCpatNombrePatologia()
    {
        return $this->cpatNombrePatologia;
    }

    /**
     * Set cpatTipoPatologia
     *
     * @param string $cpatTipoPatologia
     * @return ShcpParCtlPatologia
     */
    public function setCpatTipoPatologia($cpatTipoPatologia)
    {
        $this->cpatTipoPatologia = $cpatTipoPatologia;

        return $this;
    }

    /**
     * Get cpatTipoPatologia
     *
     * @return string 
     */
    public function getCpatTipoPatologia()
    {
        return $this->cpatTipoPatologia;
    }

    /**
     * Set cpatEstado
     *
     * @param string $cpatEstado
     * @return ShcpParCtlPatologia
     */
    public function setCpatEstado($cpatEstado)
    {
        $this->cpatEstado = $cpatEstado;

        return $this;
    }

    /**
     * Get cpatEstado
     *
     * @return string 
     */
    public function getCpatEstado()
    {
        return $this->cpatEstado;
    }
}
