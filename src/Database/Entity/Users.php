<?php

namespace Database\Entity;

use Doctrine\Mapping as ORM;
use Acme\TestBundle\Validation as AcmeAssert;

/**
 * Users
 * @Entity @Table(name="users")
 */
class Users
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @AcmeAssert\PasswordCorrect
     * @Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @Column(name="joinedDate", type="datetime")
     */
    private $joinedDate;

    /**
     * @var \DateTime
     *
     * @Column(name="lastLogin", type="datetime")
     */
    private $lastLogin;

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
     * Set name
     *
     * @param string $name
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Set email
     *
     * @param string $email
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
     * Set joinedDate
     *
     * @param \DateTime $joinedDate
     * @return Users
     */
    public function setJoinedDate($joinedDate)
    {
        $this->joinedDate = $joinedDate;

        return $this;
    }

    /**
     * Get joinedDate
     *
     * @return \DateTime 
     */
    public function getJoinedDate()
    {
        return $this->joinedDate;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     * @return Users
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }
}
