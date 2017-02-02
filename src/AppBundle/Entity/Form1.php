<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Form1
 */
class Form1
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
    private $p1;
    
    /**
     * @var text
     */
    private $p1porque;
    
    /**
     * @var string
     */
    private $p2;
    
    /**
     * @var text
     */
    private $p2porque;
    
    /**
     * @var string
     */
    private $p3;
    
    /**
     * @var text
     */
    private $p3porque;
 
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
     * @return Form1
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
     * Set p1
     *
     * @param string $p1
     * @return Form1
     */
    public function setP1($p1)
    {
        $this->p1 = $p1;

        return $this;
    }

    /**
     * Get p1
     *
     * @return string 
     */
    public function getP1()
    {
        return $this->p1;
    }

    /**
     * Set p1porque
     *
     * @param string $p1porque
     * @return Form1
     */
    public function setP1porque($p1porque)
    {
        $this->p1porque = $p1porque;

        return $this;
    }

    /**
     * Get p1porque
     *
     * @return string 
     */
    public function getP1porque()
    {
        return $this->p1porque;
    }

    /**
     * Set p2
     *
     * @param string $p2
     * @return Form1
     */
    public function setP2($p2)
    {
        $this->p2 = $p2;

        return $this;
    }

    /**
     * Get p2
     *
     * @return string 
     */
    public function getP2()
    {
        return $this->p2;
    }

    /**
     * Set p2porque
     *
     * @param string $p2porque
     * @return Form1
     */
    public function setP2porque($p2porque)
    {
        $this->p2porque = $p2porque;

        return $this;
    }

    /**
     * Get p2porque
     *
     * @return string 
     */
    public function getP2porque()
    {
        return $this->p2porque;
    }

    /**
     * Set p3
     *
     * @param string $p3
     * @return Form1
     */
    public function setP3($p3)
    {
        $this->p3 = $p3;

        return $this;
    }

    /**
     * Get p3
     *
     * @return string 
     */
    public function getP3()
    {
        return $this->p3;
    }

    /**
     * Set p3porque
     *
     * @param string $p3porque
     * @return Form1
     */
    public function setP3porque($p3porque)
    {
        $this->p3porque = $p3porque;

        return $this;
    }

    /**
     * Get p3porque
     *
     * @return string 
     */
    public function getP3porque()
    {
        return $this->p3porque;
    }
}
