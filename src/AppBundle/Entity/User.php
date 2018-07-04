<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=100)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sname", type="string", length=100)
     */
    private $userSname;




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
     * Set userName
     *
     * @param string $userName
     *
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userSname
     *
     * @param string $userSname
     *
     * @return User
     */
    public function setUserSname($userSname)
    {
        $this->userSname = $userSname;

        return $this;
    }

    /**
     * Get userSname
     *
     * @return string
     */
    public function getUserSname()
    {
        return $this->userSname;
    }
}

