<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderUser
 *
 * @ORM\Table(name="order_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderUserRepository")
 */
class OrderUser
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
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_order", type="datetime")
     */
    private $dateOrder;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_delivery", type="datetime")
     */
    private $dateDelivery;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return OrderUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set dateOrder
     *
     * @param \DateTime $dateOrder
     *
     * @return OrderUser
     */
    public function setDateOrder($dateOrder)
    {
        $this->dateOrder = $dateOrder;

        return $this;
    }

    /**
     * Get dateOrder
     *
     * @return \DateTime
     */
    public function getDateOrder()
    {
        return $this->dateOrder;
    }

    /**
     * Set dateDelivery
     *
     * @param \DateTime $dateDelivery
     *
     * @return OrderUser
     */
    public function setDateDelivery($dateDelivery)
    {
        $this->dateDelivery = $dateDelivery;

        return $this;
    }

    /**
     * Get dateDelivery
     *
     * @return \DateTime
     */
    public function getDateDelivery()
    {
        return $this->dateDelivery;
    }
}

