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
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Goods")
     *
     */
    private $goods;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */


    private $user;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OrderUserGroup")
     */
    private $order_user_group;

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
     * Set amountGoods
     *
     * @param integer $amountGoods
     *
     * @return OrderUser
     */
    public function setAmountGoods($amountGoods)
    {
        $this->amountGoods = $amountGoods;

        return $this;
    }

    /**
     * Get amountGoods
     *
     * @return int
     */
    public function getAmountGoods()
    {
        return $this->amountGoods;
    }
}

