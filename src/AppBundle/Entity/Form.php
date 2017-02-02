<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Form
 */
class Form
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $p1a;

    /**
     * @var int
     */
    private $p1b;

    /**
     * @var int
     */
    private $p1c;

    /**
     * @var int
     */
    private $p1d;

    /**
     * @var int
     */
    private $p1e;

    /**
     * @var int
     */
    private $p1f;

    /**
     * @var int
     */
    private $userid;

    /**
     * @var int
     */
    private $p10a;

    /**
     * @var int
     */
    private $p10b;

    /**
     * @var int
     */
    private $p10c;

    /**
     * @var int
     */
    private $p11a;

    /**
     * @var int
     */
    private $p11b;

    /**
     * @var int
     */
    private $p11c;

    /**
     * @var int
     */
    private $p11d;
   
    /**
     * @var int
     */
    private $p13a;
    
    /**
     * @var int
     */
    private $p13b;
    
    /**
     * @var int
     */
    private $p13c;
    
    /**
     * @var int
     */
    private $p13d;
    
    /**
     * @var int
     */
    private $p13e;
    
    /**
     * @var int
     */
    private $p13f;
    
    /**
     * @var int
     */
    private $p13g;
    
    /**
     * @var int
     */
    private $p13h;
    
    /**
     * @var string
     */
    private $p17letra;

    /**
     * @var string
     */
    private $p17texto;

    /**
     * @var string
     */
    private $p18letra;

    /**
     * @var string
     */
    private $p18texto;
    
    /**
     * @var int
     */
    private $p19p1a;

    /**
     * @var int
     */
    private $p19p1b;

    /**
     * @var int
     */
    private $p19p1c;

    /**
     * @var int
     */
    private $p19p1d;

    /**
     * @var int
     */
    private $p19p1e;

    /**
     * @var int
     */
    private $p19p2a;

    /**
     * @var int
     */
    private $p19p2b;

    /**
     * @var int
     */
    private $p19p2c;

    /**
     * @var int
     */
    private $p19p2d;

    /**
     * @var int
     */
    private $p19p2e;

    /**
     * @var int
     */
    private $p19p3a;

    /**
     * @var int
     */
    private $p19p3b;

    /**
     * @var int
     */
    private $p19p3c;

    /**
     * @var int
     */
    private $p19p3d;

    /**
     * @var int
     */
    private $p19p3e;

    /**
     * @var int
     */
    private $p2a;

    /**
     * @var int
     */
    private $p2b;

    /**
     * @var int
     */
    private $p2c;

    /**
     * @var int
     */
    private $p2ca;

    /**
     * @var int
     */
    private $p2cb;

    /**
     * @var int
     */
    private $p2cc;

    /**
     * @var int
     */
    private $p2cd;

    /**
     * @var int
     */
    private $p2ce;

    /**
     * @var int
     */
    private $p2cf;

    /**
     * @var int
     */
    private $p2cg;

    /**
     * @var int
     */
    private $p2d;

    /**
     * @var int
     */
    private $p2e;

    /**
     * @var int
     */
    private $p21a;

    /**
     * @var int
     */
    private $p21b;

    /**
     * @var int
     */
    private $p21c;

    /**
     * @var int
     */
    private $p21d;

    /**
     * @var int
     */
    private $p21e;
    
    /**
     * @var string
     */
    private $p21texto;

    /**
     * @var int
     */
    private $p3a;

    /**
     * @var int
     */
    private $p3b;

    /**
     * @var int
     */
    private $p3c;

    /**
     * @var int
     */
    private $p3d;

    /**
     * @var int
     */
    private $p3e;

    /**
     * @var int
     */
    private $p3f;

    /**
     * @var int
     */
    private $p3g;

    /**
     * @var int
     */
    private $p3h;

    /**
     * @var int
     */
    private $p3i;

    /**
     * @var int
     */
    private $p3j;

    /**
     * @var int
     */
    private $p3k;

    /**
     * @var int
     */
    private $p3l;

    /**
     * @var string
     */
    private $p4;

    /**
     * @var int
     */
    private $p5;

    /**
     * @var int
     */
    private $p6;

    /**
     * @var string
     */
    private $p7;

    /**
     * @var int
     */
    private $p8;

    /**
     * @var string
     */
    private $p9;

    /**
     * @var int
     */
    private $p12;

    /**
     * @var string
     */
    private $p14;

    /**
     * @var string
     */
    private $p15;
    
    /**
     * @var string
     */
    private $p16;

    /**
     * @var string
     */
    private $p20;
    
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
     * Set p1a
     *
     * @param integer $p1a
     * @return Form
     */
    public function setP1a($p1a)
    {
        $this->p1a = $p1a;

        return $this;
    }

    /**
     * Get p1a
     *
     * @return integer 
     */
    public function getP1a()
    {
        return $this->p1a;
    }

    /**
     * Set p1b
     *
     * @param integer $p1b
     * @return Form
     */
    public function setP1b($p1b)
    {
        $this->p1b = $p1b;

        return $this;
    }

    /**
     * Get p1b
     *
     * @return integer 
     */
    public function getP1b()
    {
        return $this->p1b;
    }

    /**
     * Set p1c
     *
     * @param integer $p1c
     * @return Form
     */
    public function setP1c($p1c)
    {
        $this->p1c = $p1c;

        return $this;
    }

    /**
     * Get p1c
     *
     * @return integer 
     */
    public function getP1c()
    {
        return $this->p1c;
    }

    /**
     * Set p1d
     *
     * @param integer $p1d
     * @return Form
     */
    public function setP1d($p1d)
    {
        $this->p1d = $p1d;

        return $this;
    }

    /**
     * Get p1d
     *
     * @return integer 
     */
    public function getP1d()
    {
        return $this->p1d;
    }

    /**
     * Set p1e
     *
     * @param integer $p1e
     * @return Form
     */
    public function setP1e($p1e)
    {
        $this->p1e = $p1e;

        return $this;
    }

    /**
     * Get p1e
     *
     * @return integer 
     */
    public function getP1e()
    {
        return $this->p1e;
    }

    /**
     * Set p1f
     *
     * @param integer $p1f
     * @return Form
     */
    public function setP1f($p1f)
    {
        $this->p1f = $p1f;

        return $this;
    }

    /**
     * Get p1f
     *
     * @return integer 
     */
    public function getP1f()
    {
        return $this->p1f;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Form
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
     * Set p10a
     *
     * @param integer $p10a
     * @return Form
     */
    public function setP10a($p10a)
    {
        $this->p10a = $p10a;

        return $this;
    }

    /**
     * Get p10a
     *
     * @return integer 
     */
    public function getP10a()
    {
        return $this->p10a;
    }

    /**
     * Set p10b
     *
     * @param integer $p10b
     * @return Form
     */
    public function setP10b($p10b)
    {
        $this->p10b = $p10b;

        return $this;
    }

    /**
     * Get p10b
     *
     * @return integer 
     */
    public function getP10b()
    {
        return $this->p10b;
    }

    /**
     * Set p10c
     *
     * @param integer $p10c
     * @return Form
     */
    public function setP10c($p10c)
    {
        $this->p10c = $p10c;

        return $this;
    }

    /**
     * Get p10c
     *
     * @return integer 
     */
    public function getP10c()
    {
        return $this->p10c;
    }

    /**
     * Set p11a
     *
     * @param integer $p11a
     * @return Form
     */
    public function setP11a($p11a)
    {
        $this->p11a = $p11a;

        return $this;
    }

    /**
     * Get p11a
     *
     * @return integer 
     */
    public function getP11a()
    {
        return $this->p11a;
    }

    /**
     * Set p11b
     *
     * @param integer $p11b
     * @return Form
     */
    public function setP11b($p11b)
    {
        $this->p11b = $p11b;

        return $this;
    }

    /**
     * Get p11b
     *
     * @return integer 
     */
    public function getP11b()
    {
        return $this->p11b;
    }

    /**
     * Set p11c
     *
     * @param integer $p11c
     * @return Form
     */
    public function setP11c($p11c)
    {
        $this->p11c = $p11c;

        return $this;
    }

    /**
     * Get p11c
     *
     * @return integer 
     */
    public function getP11c()
    {
        return $this->p11c;
    }

    /**
     * Set p11d
     *
     * @param integer $p11d
     * @return Form
     */
    public function setP11d($p11d)
    {
        $this->p11d = $p11d;

        return $this;
    }

    /**
     * Get p11d
     *
     * @return integer 
     */
    public function getP11d()
    {
        return $this->p11d;
    }

    /**
     * Set p11e
     *
     * @param integer $p11e
     * @return Form
     */
    public function setP11e($p11e)
    {
        $this->p11e = $p11e;

        return $this;
    }

    /**
     * Get p11e
     *
     * @return integer 
     */
    public function getP11e()
    {
        return $this->p11e;
    }

    /**
     * Set p11f
     *
     * @param integer $p11f
     * @return Form
     */
    public function setP11f($p11f)
    {
        $this->p11f = $p11f;

        return $this;
    }

    /**
     * Get p11f
     *
     * @return integer 
     */
    public function getP11f()
    {
        return $this->p11f;
    }

    /**
     * Set p11g
     *
     * @param integer $p11g
     * @return Form
     */
    public function setP11g($p11g)
    {
        $this->p11g = $p11g;

        return $this;
    }

    /**
     * Get p11g
     *
     * @return integer 
     */
    public function getP11g()
    {
        return $this->p11g;
    }

    /**
     * Set p11h
     *
     * @param integer $p11h
     * @return Form
     */
    public function setP11h($p11h)
    {
        $this->p11h = $p11h;

        return $this;
    }

    /**
     * Get p11h
     *
     * @return integer 
     */
    public function getP11h()
    {
        return $this->p11h;
    }

    /**
     * Set p17letra
     *
     * @param string $p17letra
     * @return Form
     */
    public function setP17letra($p17letra)
    {
        $this->p17letra = $p17letra;

        return $this;
    }

    /**
     * Get p17letra
     *
     * @return string 
     */
    public function getP17letra()
    {
        return $this->p17letra;
    }

    /**
     * Set p17texto
     *
     * @param string $p17texto
     * @return Form
     */
    public function setP17texto($p17texto)
    {
        $this->p17texto = $p17texto;

        return $this;
    }

    /**
     * Get p17texto
     *
     * @return string 
     */
    public function getP17texto()
    {
        return $this->p17texto;
    }

    /**
     * Set p18letra
     *
     * @param string $p18letra
     * @return Form
     */
    public function setP18letra($p18letra)
    {
        $this->p18letra = $p18letra;

        return $this;
    }

    /**
     * Get p18letra
     *
     * @return string 
     */
    public function getP18letra()
    {
        return $this->p18letra;
    }

    /**
     * Set p18texto
     *
     * @param string $p18texto
     * @return Form
     */
    public function setP18texto($p18texto)
    {
        $this->p18texto = $p18texto;

        return $this;
    }

    /**
     * Get p18texto
     *
     * @return string 
     */
    public function getP18texto()
    {
        return $this->p18texto;
    }

    /**
     * Set p19p1a
     *
     * @param int $p19p1a
     * @return Form
     */
    public function setP19p1a($p19p1a)
    {
        $this->p19p1a = $p19p1a;

        return $this;
    }

    /**
     * Get p19p1a
     *
     * @return int 
     */
    public function getP19p1a()
    {
        return $this->p19p1a;
    }

    /**
     * Set p19p1b
     *
     * @param int $p19p1b
     * @return Form
     */
    public function setP19p1b($p19p1b)
    {
        $this->p19p1b = $p19p1b;

        return $this;
    }

    /**
     * Get p19p1b
     *
     * @return int 
     */
    public function getP19p1b()
    {
        return $this->p19p1b;
    }

    /**
     * Set p19p1c
     *
     * @param int $p19p1c
     * @return Form
     */
    public function setP19p1c($p19p1c)
    {
        $this->p19p1c = $p19p1c;

        return $this;
    }

    /**
     * Get p19p1c
     *
     * @return int 
     */
    public function getP19p1c()
    {
        return $this->p19p1c;
    }

    /**
     * Set p19p1d
     *
     * @param int $p19p1d
     * @return Form
     */
    public function setP19p1d($p19p1d)
    {
        $this->p19p1d = $p19p1d;

        return $this;
    }

    /**
     * Get p19p1d
     *
     * @return int 
     */
    public function getP19p1d()
    {
        return $this->p19p1d;
    }

    /**
     * Set p19p1e
     *
     * @param integer $p19p1e
     * @return Form
     */
    public function setP19p1e($p19p1e)
    {
        $this->p19p1e = $p19p1e;

        return $this;
    }

    /**
     * Get p19p1e
     *
     * @return integer 
     */
    public function getP19p1e()
    {
        return $this->p19p1e;
    }

    /**
     * Set p19p2a
     *
     * @param int $p19p2a
     * @return Form
     */
    public function setP19p2a($p19p2a)
    {
        $this->p19p2a = $p19p2a;

        return $this;
    }

    /**
     * Get p19p2a
     *
     * @return int 
     */
    public function getP19p2a()
    {
        return $this->p19p2a;
    }

    /**
     * Set p19p2b
     *
     * @param int $p19p2b
     * @return Form
     */
    public function setP19p2b($p19p2b)
    {
        $this->p19p2b = $p19p2b;

        return $this;
    }

    /**
     * Get p19p2b
     *
     * @return int 
     */
    public function getP19p2b()
    {
        return $this->p19p2b;
    }

    /**
     * Set p19p2c
     *
     * @param int $p19p2c
     * @return Form
     */
    public function setP19p2c($p19p2c)
    {
        $this->p19p2c = $p19p2c;

        return $this;
    }

    /**
     * Get p19p2c
     *
     * @return int 
     */
    public function getP19p2c()
    {
        return $this->p19p2c;
    }

    /**
     * Set p19p2d
     *
     * @param int $p19p2d
     * @return Form
     */
    public function setP19p2d($p19p2d)
    {
        $this->p19p2d = $p19p2d;

        return $this;
    }

    /**
     * Get p19p2d
     *
     * @return int 
     */
    public function getP19p2d()
    {
        return $this->p19p2d;
    }

    /**
     * Set p19p2e
     *
     * @param integer $p19p2e
     * @return Form
     */
    public function setP19p2e($p19p2e)
    {
        $this->p19p2e = $p19p2e;

        return $this;
    }

    /**
     * Get p19p2e
     *
     * @return integer 
     */
    public function getP19p2e()
    {
        return $this->p19p2e;
    }

    /**
     * Set p19p3a
     *
     * @param int $p19p3a
     * @return Form
     */
    public function setP19p3a($p19p3a)
    {
        $this->p19p3a = $p19p3a;

        return $this;
    }

    /**
     * Get p19p3a
     *
     * @return int 
     */
    public function getP19p3a()
    {
        return $this->p19p3a;
    }

    /**
     * Set p19p3b
     *
     * @param int $p19p3b
     * @return Form
     */
    public function setP19p3b($p19p3b)
    {
        $this->p19p3b = $p19p3b;

        return $this;
    }

    /**
     * Get p19p3b
     *
     * @return int 
     */
    public function getP19p3b()
    {
        return $this->p19p3b;
    }

    /**
     * Set p19p3c
     *
     * @param int $p19p3c
     * @return Form
     */
    public function setP19p3c($p19p3c)
    {
        $this->p19p3c = $p19p3c;

        return $this;
    }

    /**
     * Get p19p3c
     *
     * @return int 
     */
    public function getP19p3c()
    {
        return $this->p19p3c;
    }

    /**
     * Set p19p3d
     *
     * @param int $p19p3d
     * @return Form
     */
    public function setP19p3d($p19p3d)
    {
        $this->p19p3d = $p19p3d;

        return $this;
    }

    /**
     * Get p19p3d
     *
     * @return int 
     */
    public function getP19p3d()
    {
        return $this->p19p3d;
    }

    /**
     * Set p19p3e
     *
     * @param integer $p19p3e
     * @return Form
     */
    public function setP19p3e($p19p3e)
    {
        $this->p19p3e = $p19p3e;

        return $this;
    }

    /**
     * Get p19p3e
     *
     * @return integer 
     */
    public function getP19p3e()
    {
        return $this->p19p3e;
    }

    /**
     * Set p2a
     *
     * @param integer $p2a
     * @return Form
     */
    public function setP2a($p2a)
    {
        $this->p2a = $p2a;

        return $this;
    }

    /**
     * Get p2a
     *
     * @return integer 
     */
    public function getP2a()
    {
        return $this->p2a;
    }

    /**
     * Set p2b
     *
     * @param integer $p2b
     * @return Form
     */
    public function setP2b($p2b)
    {
        $this->p2b = $p2b;

        return $this;
    }

    /**
     * Get p2b
     *
     * @return integer 
     */
    public function getP2b()
    {
        return $this->p2b;
    }

    /**
     * Set p2c
     *
     * @param integer $p2c
     * @return Form
     */
    public function setP2c($p2c)
    {
        $this->p2c = $p2c;

        return $this;
    }

    /**
     * Get p2c
     *
     * @return integer 
     */
    public function getP2c()
    {
        return $this->p2c;
    }

    /**
     * Set p2ca
     *
     * @param integer $p2ca
     * @return Form
     */
    public function setP2ca($p2ca)
    {
        $this->p2ca = $p2ca;

        return $this;
    }

    /**
     * Get p2ca
     *
     * @return integer 
     */
    public function getP2ca()
    {
        return $this->p2ca;
    }

    /**
     * Set p2cb
     *
     * @param integer $p2cb
     * @return Form
     */
    public function setP2cb($p2cb)
    {
        $this->p2cb = $p2cb;

        return $this;
    }

    /**
     * Get p2cb
     *
     * @return integer 
     */
    public function getP2cb()
    {
        return $this->p2cb;
    }

    /**
     * Set p2cc
     *
     * @param integer $p2cc
     * @return Form
     */
    public function setP2cc($p2cc)
    {
        $this->p2cc = $p2cc;

        return $this;
    }

    /**
     * Get p2cc
     *
     * @return integer 
     */
    public function getP2cc()
    {
        return $this->p2cc;
    }

    /**
     * Set p2cd
     *
     * @param integer $p2cd
     * @return Form
     */
    public function setP2cd($p2cd)
    {
        $this->p2cd = $p2cd;

        return $this;
    }

    /**
     * Get p2cd
     *
     * @return integer 
     */
    public function getP2cd()
    {
        return $this->p2cd;
    }

    /**
     * Set p2ce
     *
     * @param integer $p2ce
     * @return Form
     */
    public function setP2ce($p2ce)
    {
        $this->p2ce = $p2ce;

        return $this;
    }

    /**
     * Get p2ce
     *
     * @return integer 
     */
    public function getP2ce()
    {
        return $this->p2ce;
    }

    /**
     * Set p2cf
     *
     * @param integer $p2cf
     * @return Form
     */
    public function setP2cf($p2cf)
    {
        $this->p2cf = $p2cf;

        return $this;
    }

    /**
     * Get p2cf
     *
     * @return integer 
     */
    public function getP2cf()
    {
        return $this->p2cf;
    }

    /**
     * Set p2cg
     *
     * @param integer $p2cg
     * @return Form
     */
    public function setP2cg($p2cg)
    {
        $this->p2cg = $p2cg;

        return $this;
    }

    /**
     * Get p2cg
     *
     * @return integer 
     */
    public function getP2cg()
    {
        return $this->p2cg;
    }

    /**
     * Set p2d
     *
     * @param integer $p2d
     * @return Form
     */
    public function setP2d($p2d)
    {
        $this->p2d = $p2d;

        return $this;
    }

    /**
     * Get p2d
     *
     * @return integer 
     */
    public function getP2d()
    {
        return $this->p2d;
    }

    /**
     * Set p2e
     *
     * @param integer $p2e
     * @return Form
     */
    public function setP2e($p2e)
    {
        $this->p2e = $p2e;

        return $this;
    }

    /**
     * Get p2e
     *
     * @return integer 
     */
    public function getP2e()
    {
        return $this->p2e;
    }

    /**
     * Set p21a
     *
     * @param integer $p21a
     * @return Form
     */
    public function setP21a($p21a)
    {
        $this->p21a = $p21a;

        return $this;
    }

    /**
     * Get p21a
     *
     * @return integer 
     */
    public function getP21a()
    {
        return $this->p21a;
    }

    /**
     * Set p21b
     *
     * @param integer $p21b
     * @return Form
     */
    public function setP21b($p21b)
    {
        $this->p21b = $p21b;

        return $this;
    }

    /**
     * Get p21b
     *
     * @return integer 
     */
    public function getP21b()
    {
        return $this->p21b;
    }

    /**
     * Set p21c
     *
     * @param integer $p21c
     * @return Form
     */
    public function setP21c($p21c)
    {
        $this->p21c = $p21c;

        return $this;
    }

    /**
     * Get p21c
     *
     * @return integer 
     */
    public function getP21c()
    {
        return $this->p21c;
    }

    /**
     * Set p21d
     *
     * @param integer $p21d
     * @return Form
     */
    public function setP21d($p21d)
    {
        $this->p21d = $p21d;

        return $this;
    }

    /**
     * Get p21d
     *
     * @return integer 
     */
    public function getP21d()
    {
        return $this->p21d;
    }

    /**
     * Set p21e
     *
     * @param integer $p21e
     * @return Form
     */
    public function setP21e($p21e)
    {
        $this->p21e = $p21e;

        return $this;
    }

    /**
     * Get p21e
     *
     * @return integer 
     */
    public function getP21e()
    {
        return $this->p21e;
    }

    /**
     * Set p3a
     *
     * @param integer $p3a
     * @return Form
     */
    public function setP3a($p3a)
    {
        $this->p3a = $p3a;

        return $this;
    }

    /**
     * Get p3a
     *
     * @return integer 
     */
    public function getP3a()
    {
        return $this->p3a;
    }

    /**
     * Set p3b
     *
     * @param integer $p3b
     * @return Form
     */
    public function setP3b($p3b)
    {
        $this->p3b = $p3b;

        return $this;
    }

    /**
     * Get p3b
     *
     * @return integer 
     */
    public function getP3b()
    {
        return $this->p3b;
    }

    /**
     * Set p3c
     *
     * @param integer $p3c
     * @return Form
     */
    public function setP3c($p3c)
    {
        $this->p3c = $p3c;

        return $this;
    }

    /**
     * Get p3c
     *
     * @return integer 
     */
    public function getP3c()
    {
        return $this->p3c;
    }

    /**
     * Set p3d
     *
     * @param integer $p3d
     * @return Form
     */
    public function setP3d($p3d)
    {
        $this->p3d = $p3d;

        return $this;
    }

    /**
     * Get p3d
     *
     * @return integer 
     */
    public function getP3d()
    {
        return $this->p3d;
    }

    /**
     * Set p3e
     *
     * @param integer $p3e
     * @return Form
     */
    public function setP3e($p3e)
    {
        $this->p3e = $p3e;

        return $this;
    }

    /**
     * Get p3e
     *
     * @return integer 
     */
    public function getP3e()
    {
        return $this->p3e;
    }

    /**
     * Set p3f
     *
     * @param integer $p3f
     * @return Form
     */
    public function setP3f($p3f)
    {
        $this->p3f = $p3f;

        return $this;
    }

    /**
     * Get p3f
     *
     * @return integer 
     */
    public function getP3f()
    {
        return $this->p3f;
    }

    /**
     * Set p3g
     *
     * @param integer $p3g
     * @return Form
     */
    public function setP3g($p3g)
    {
        $this->p3g = $p3g;

        return $this;
    }

    /**
     * Get p3g
     *
     * @return integer 
     */
    public function getP3g()
    {
        return $this->p3g;
    }

    /**
     * Set p3h
     *
     * @param integer $p3h
     * @return Form
     */
    public function setP3h($p3h)
    {
        $this->p3h = $p3h;

        return $this;
    }

    /**
     * Get p3h
     *
     * @return integer 
     */
    public function getP3h()
    {
        return $this->p3h;
    }

    /**
     * Set p3i
     *
     * @param integer $p3i
     * @return Form
     */
    public function setP3i($p3i)
    {
        $this->p3i = $p3i;

        return $this;
    }

    /**
     * Get p3i
     *
     * @return integer 
     */
    public function getP3i()
    {
        return $this->p3i;
    }

    /**
     * Set p3j
     *
     * @param integer $p3j
     * @return Form
     */
    public function setP3j($p3j)
    {
        $this->p3j = $p3j;

        return $this;
    }

    /**
     * Get p3j
     *
     * @return integer 
     */
    public function getP3j()
    {
        return $this->p3j;
    }

    /**
     * Set p3k
     *
     * @param integer $p3k
     * @return Form
     */
    public function setP3k($p3k)
    {
        $this->p3k = $p3k;

        return $this;
    }

    /**
     * Get p3k
     *
     * @return integer 
     */
    public function getP3k()
    {
        return $this->p3k;
    }

    /**
     * Set p3l
     *
     * @param integer $p3l
     * @return Form
     */
    public function setP3l($p3l)
    {
        $this->p3l = $p3l;

        return $this;
    }

    /**
     * Get p3l
     *
     * @return integer 
     */
    public function getP3l()
    {
        return $this->p3l;
    }

    /**
     * Set p4
     *
     * @param string $p4
     * @return Form
     */
    public function setP4($p4)
    {
        $this->p4 = $p4;

        return $this;
    }

    /**
     * Get p4
     *
     * @return string 
     */
    public function getP4()
    {
        return $this->p4;
    }

    /**
     * Set p5
     *
     * @param integer $p5
     * @return Form
     */
    public function setP5($p5)
    {
        $this->p5 = $p5;

        return $this;
    }

    /**
     * Get p5
     *
     * @return integer 
     */
    public function getP5()
    {
        return $this->p5;
    }

    /**
     * Set p6
     *
     * @param integer $p6
     * @return Form
     */
    public function setP6($p6)
    {
        $this->p6 = $p6;

        return $this;
    }

    /**
     * Get p6
     *
     * @return integer 
     */
    public function getP6()
    {
        return $this->p6;
    }

    /**
     * Set p7
     *
     * @param string $p7
     * @return Form
     */
    public function setP7($p7)
    {
        $this->p7 = $p7;

        return $this;
    }

    /**
     * Get p7
     *
     * @return string 
     */
    public function getP7()
    {
        return $this->p7;
    }

    /**
     * Set p8
     *
     * @param integer $p8
     * @return Form
     */
    public function setP8($p8)
    {
        $this->p8 = $p8;

        return $this;
    }

    /**
     * Get p8
     *
     * @return integer 
     */
    public function getP8()
    {
        return $this->p8;
    }

    /**
     * Set p9
     *
     * @param string $p9
     * @return Form
     */
    public function setP9($p9)
    {
        $this->p9 = $p9;

        return $this;
    }

    /**
     * Get p9
     *
     * @return string 
     */
    public function getP9()
    {
        return $this->p9;
    }

    /**
     * Set p12
     *
     * @param integer $p12
     * @return Form
     */
    public function setP12($p12)
    {
        $this->p12 = $p12;

        return $this;
    }

    /**
     * Get p12
     *
     * @return integer 
     */
    public function getP12()
    {
        return $this->p12;
    }

    /**
     * Set p14
     *
     * @param string $p14
     * @return Form
     */
    public function setP14($p14)
    {
        $this->p14 = $p14;

        return $this;
    }

    /**
     * Get p14
     *
     * @return string 
     */
    public function getP14()
    {
        return $this->p14;
    }

    /**
     * Set p15
     *
     * @param string $p15
     * @return Form
     */
    public function setP15($p15)
    {
        $this->p15 = $p15;

        return $this;
    }

    /**
     * Get p15
     *
     * @return string 
     */
    public function getP15()
    {
        return $this->p15;
    }

    /**
     * Set p16
     *
     * @param string $p16
     * @return Form
     */
    public function setP16($p16)
    {
        $this->p16 = $p16;

        return $this;
    }

    /**
     * Get p16
     *
     * @return string 
     */
    public function getP16()
    {
        return $this->p16;
    }

    /**
     * Set p20
     *
     * @param string $p20
     * @return Form
     */
    public function setP20($p20)
    {
        $this->p20 = $p20;

        return $this;
    }

    /**
     * Get p20
     *
     * @return string 
     */
    public function getP20()
    {
        return $this->p20;
    }
    /**
     * @var string
     */
    private $p2texto;


    /**
     * Set p2texto
     *
     * @param string $p2texto
     * @return Form
     */
    public function setP2texto($p2texto)
    {
        $this->p2texto = $p2texto;

        return $this;
    }

    /**
     * Get p2texto
     *
     * @return string 
     */
    public function getP2texto()
    {
        return $this->p2texto;
    }

    /**
     * Set p13a
     *
     * @param integer $p13a
     * @return Form
     */
    public function setP13a($p13a)
    {
        $this->p13a = $p13a;

        return $this;
    }

    /**
     * Get p13a
     *
     * @return integer 
     */
    public function getP13a()
    {
        return $this->p13a;
    }

    /**
     * Set p13b
     *
     * @param integer $p13b
     * @return Form
     */
    public function setP13b($p13b)
    {
        $this->p13b = $p13b;

        return $this;
    }

    /**
     * Get p13b
     *
     * @return integer 
     */
    public function getP13b()
    {
        return $this->p13b;
    }

    /**
     * Set p13c
     *
     * @param integer $p13c
     * @return Form
     */
    public function setP13c($p13c)
    {
        $this->p13c = $p13c;

        return $this;
    }

    /**
     * Get p13c
     *
     * @return integer 
     */
    public function getP13c()
    {
        return $this->p13c;
    }

    /**
     * Set p13d
     *
     * @param integer $p13d
     * @return Form
     */
    public function setP13d($p13d)
    {
        $this->p13d = $p13d;

        return $this;
    }

    /**
     * Get p13d
     *
     * @return integer 
     */
    public function getP13d()
    {
        return $this->p13d;
    }

    /**
     * Set p13e
     *
     * @param integer $p13e
     * @return Form
     */
    public function setP13e($p13e)
    {
        $this->p13e = $p13e;

        return $this;
    }

    /**
     * Get p13e
     *
     * @return integer 
     */
    public function getP13e()
    {
        return $this->p13e;
    }

    /**
     * Set p13f
     *
     * @param integer $p13f
     * @return Form
     */
    public function setP13f($p13f)
    {
        $this->p13f = $p13f;

        return $this;
    }

    /**
     * Get p13f
     *
     * @return integer 
     */
    public function getP13f()
    {
        return $this->p13f;
    }

    /**
     * Set p13g
     *
     * @param integer $p13g
     * @return Form
     */
    public function setP13g($p13g)
    {
        $this->p13g = $p13g;

        return $this;
    }

    /**
     * Get p13g
     *
     * @return integer 
     */
    public function getP13g()
    {
        return $this->p13g;
    }

    /**
     * Set p13h
     *
     * @param integer $p13h
     * @return Form
     */
    public function setP13h($p13h)
    {
        $this->p13h = $p13h;

        return $this;
    }

    /**
     * Get p13h
     *
     * @return integer 
     */
    public function getP13h()
    {
        return $this->p13h;
    }
    /**
     * @var integer
     */
    private $p13i;


    /**
     * Set p13i
     *
     * @param integer $p13i
     * @return Form
     */
    public function setP13i($p13i)
    {
        $this->p13i = $p13i;

        return $this;
    }

    /**
     * Get p13i
     *
     * @return integer 
     */
    public function getP13i()
    {
        return $this->p13i;
    }
    /**
     * @var string
     */
    private $p2texto1;


    /**
     * Set p2texto1
     *
     * @param string $p2texto1
     * @return Form
     */
    public function setP2texto1($p2texto1)
    {
        $this->p2texto1 = $p2texto1;

        return $this;
    }

    /**
     * Get p2texto1
     *
     * @return string 
     */
    public function getP2texto1()
    {
        return $this->p2texto1;
    }
    /**
     * @var integer
     */
    private $p2ch;


    /**
     * Set p2ch
     *
     * @param integer $p2ch
     * @return Form
     */
    public function setP2ch($p2ch)
    {
        $this->p2ch = $p2ch;

        return $this;
    }

    /**
     * Get p2ch
     *
     * @return integer 
     */
    public function getP2ch()
    {
        return $this->p2ch;
    }
}
