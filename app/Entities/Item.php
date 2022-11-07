<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="items")
 */
class Item
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

    /**
     * @ORM\Column(type="string")
     */
    private $image;

    /**
     * @ORM\Column(type="string")
     */
    private $image_folder;

    /**
     * @ORM\Column(type="string")
     */
    private $image_2;

    /**
     * @ORM\Column(type="string")
     */
    private $image_2_folder;

    /**
     * @ORM\OneToOne(targetEntity="Subitem")
     * @ORM\JoinColumn(name="subitem_id", referencedColumnName="id")
     **/
    private $subitem;

    /**
     * @ManyToMany(targetEntity="Region")
     * @JoinTable(name="items_regions",
     *      joinColumns={@JoinColumn(name="item_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="region_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $region;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getImageFolder()
    {
        return $this->image_folder;
    }

    /**
     * @return mixed
     */
    public function getImage2()
    {
        return $this->image_2;
    }

    /**
     * @return mixed
     */
    public function getImage2Folder()
    {
        return $this->image_2_folder;
    }

    /**
     * @return mixed
     */
    public function getSubitem()
    {
        return $this->subitem;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }
}
