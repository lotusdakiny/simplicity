<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userinfo
 */
class Userinfo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $userid;

    /**
     * @var string
     */
    private $especialidad;

    /**
     * @var string
     */
    private $trabajo;

    /**
     * @var string
     */
    private $provincia;

    /**
     * @var string
     */
    private $numero;


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
     * Set userid
     *
     * @param integer $userid
     * @return Userinfo
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set especialidad
     *
     * @param string $especialidad
     * @return Userinfo
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string 
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set trabajo
     *
     * @param string $trabajo
     * @return Userinfo
     */
    public function setTrabajo($trabajo)
    {
        $this->trabajo = $trabajo;

        return $this;
    }

    /**
     * Get trabajo
     *
     * @return string 
     */
    public function getTrabajo()
    {
        return $this->trabajo;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Userinfo
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Userinfo
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }
}
