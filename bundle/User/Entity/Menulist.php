<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menulist
 *
 * @ORM\Table(name="menulist")
 * @ORM\Entity(repositoryClass="User\Repository\MenulistRepository")
 */
class Menulist
{
    const NUM_ITEMS = 10;
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
     * @ORM\Column(name="name", type="string", length=18)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="kword", type="string", length=255)
     */
    private $kword;

    /**
     * @var int
     *
     * @ORM\Column(name="sort", type="smallint")
     */
    private $sort;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="smallint")
     */
    private $state;


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
     * Set name
     *
     * @param string $name
     *
     * @return Menulist
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
     * Set url
     *
     * @param string $url
     *
     * @return Menulist
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Menulist
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set kword
     *
     * @param string $kword
     *
     * @return Menulist
     */
    public function setKword($kword)
    {
        $this->kword = $kword;

        return $this;
    }

    /**
     * Get kword
     *
     * @return string
     */
    public function getKword()
    {
        return $this->kword;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     *
     * @return Menulist
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Menulist
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }
}

