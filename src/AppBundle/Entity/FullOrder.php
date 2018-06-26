<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FullOrder
 *
 * @ORM\Table(name="full_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FullOrderRepository")
 */
class FullOrder
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
     * @ORM\Column(name="id_goods", type="integer")
     */
    private $idGoods;

    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer")
     */
    private $idOrder;


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
     * Set idGoods
     *
     * @param integer $idGoods
     *
     * @return FullOrder
     */
    public function setIdGoods($idGoods)
    {
        $this->idGoods = $idGoods;

        return $this;
    }

    /**
     * Get idGoods
     *
     * @return int
     */
    public function getIdGoods()
    {
        return $this->idGoods;
    }

    /**
     * Set idOrder
     *
     * @param integer $idOrder
     *
     * @return FullOrder
     */
    public function setIdOrder($idOrder)
    {
        $this->idOrder = $idOrder;

        return $this;
    }

    /**
     * Get idOrder
     *
     * @return int
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }
}

