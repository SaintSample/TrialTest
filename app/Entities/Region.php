<?php

namespace App\Entities;

/**
 * @ORM\Entity
 * @ORM\Table(name="regions")
 */
class Region
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;
}
