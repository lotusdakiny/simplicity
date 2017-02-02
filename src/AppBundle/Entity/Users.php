<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Users
 */
class Users implements AdvancedUserInterface, \Serializable
{
	/**
	 * @var int
	 */
	private $id;

	/**
	 * @var string
	 */
	private $username;
	
	/**
	 * @var string
	 */
	private $nombre;

	/**
	 * @var string
	 */
	private $apellido1;

	/**
	 * @var string
	 */
	private $apellido2;

	/**
	 * @var string
	 */
	private $email;

	/**
	 * @var string
	 */
	private $password;
	
	/**
	 * @var string
	 */
	private $isactive;


	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set userId
	 *
	 * @param integer $userId
	 *
	 * @return Users
	 */
	public function setUserId($userId)
	{
		$this->userId = $userId;

		return $this;
	}

	/**
	 * Get userId
	 *
	 * @return int
	 */
	public function getUserId()
	{
		return $this->userId;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 *
	 * @return Users
	 */
	public function setUsername($username)
	{
		$this->username = $username;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * Set nombre
	 *
	 * @param string $nombre
	 *
	 * @return Users
	 */
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	
		return $this;
	}
	
	/**
	 * Get nombre
	 *
	 * @return string
	 */
	public function getNombre()
	{
		return $this->nombre;
	}
	
	/**
	 * Set apellido1
	 *
	 * @param string $apellido1
	 *
	 * @return Users
	 */
	public function setApellido1($apellido1)
	{
		$this->apellido1 = $apellido1;

		return $this;
	}

	/**
	 * Get apellido1
	 *
	 * @return string
	 */
	public function getApellido1()
	{
		return $this->apellido1;
	}

	/**
	 * Set apellido2
	 *
	 * @param string $apellido2
	 *
	 * @return Users
	 */
	public function setApellido2($apellido2)
	{
		$this->apellido2 = $apellido2;

		return $this;
	}

	/**
	 * Get apellido2
	 *
	 * @return string
	 */
	public function getApellido2()
	{
		return $this->apellido2;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 *
	 * @return Users
	 */
	public function setEmail($email)
	{
		$this->email = $email;

		return $this;
	}

	/**
	 * Get email
	 *
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set is_active
     *
     * @param string $isactive
     * @return Users
     */
    public function setisactive($isactive)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * Get is_active
     *
     * @return string 
     */
    public function getisactive()
    {
        return $this->isactive;
    }
    
    public function __construct()
    {
    	$this->isactive = true;
    	// may not be needed, see section on salt below
    	// $this->salt = md5(uniqid(null, true));
    }
      
    public function getSalt()
    {
    	// you *may* need a real salt depending on your encoder
    	// see section on salt below
    	return null;
    }
    
    public function getRoles()
    {
    	return array('ROLE_ADMIN');
    }
    
    public function eraseCredentials()
    {
    }
    
    /** @see \Serializable::serialize() */
    public function serialize()
    {
    	return serialize(array(
    			$this->id,
    			$this->username,
    			$this->password,
    			$this->isactive,
    			// see section on salt below
    			// $this->salt,
    	));
    }
    
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
    	list (
    			$this->id,
    			$this->username,
    			$this->password,
    			$this->isactive,
    			// see section on salt below
    			// $this->salt
    			) = unserialize($serialized);
    }
    
    public function isAccountNonExpired()
    {
    	return true;
    }
    
    public function isAccountNonLocked()
    {
    	return true;
    }
    
    public function isCredentialsNonExpired()
    {
    	return true;
    }
    
    public function isEnabled()
    {
    	return $this->isactive;
    }
    /**
     * @var string
     */
    private $form1;


    /**
     * Set form1
     *
     * @param string $form1
     * @return Users
     */
    public function setForm1($form1)
    {
        $this->form1 = $form1;

        return $this;
    }

    /**
     * Get form1
     *
     * @return string 
     */
    public function getForm1()
    {
        return $this->form1;
    }
    /**
     * @var string
     */
    private $form2;


    /**
     * Set form2
     *
     * @param string $form2
     * @return Users
     */
    public function setForm2($form2)
    {
        $this->form2 = $form2;

        return $this;
    }

    /**
     * Get form2
     *
     * @return string 
     */
    public function getForm2()
    {
        return $this->form2;
    }
}
