<?php

namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forgetpsw
 *
 * @ORM\Table(name="forgetpsw")
 * @ORM\Entity(repositoryClass="User\Repository\ForgetpswRepository")
 */
class Forgetpsw
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
     * @ORM\Column(name="type", type="string", length=18)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="pswcode", type="string", length=255)
     */
    private $pswcode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="intime", type="datetime")
     */
    private $intime;


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
     * Set type
     *
     * @param string $type
     *
     * @return Forgetpsw
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Forgetpsw
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set pswcode
     *
     * @param string $pswcode
     *
     * @return Forgetpsw
     */
    public function setPswcode($pswcode)
    {
        $this->pswcode = $pswcode;

        return $this;
    }

    /**
     * Get pswcode
     *
     * @return string
     */
    public function getPswcode()
    {
        return $this->pswcode;
    }

    /**
     * Set intime
     *
     * @param \DateTime $intime
     *
     * @return Forgetpsw
     */
    public function setIntime()
    {
        $this->intime = new \DateTime('tomorrow');

        return $this;
    }

    /**
     * Get intime
     *
     * @return \DateTime
     */
    public function getIntime()
    {
        return $this->intime;
    }
}
