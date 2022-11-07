<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="orders")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $cost;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ManyToMany(targetEntity="Item")
     * @JoinTable(name="order_items",
     *      joinColumns={@JoinColumn(name="order_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="item_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $items;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }
}
