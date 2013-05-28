<?php

namespace Innova\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Folder
 *
 * @ORM\Table(name="inl_folder")
 * @ORM\Entity
 */
class Folder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;
	
	 /**
     * @ORM\ManyToOne(targetEntity="userSpace")
     */
    private $userSpace;

	
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
     * @return Folder
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
     * Set path
     *
     * @param string $path
     * @return Folder
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set userSpace
     *
     * @param \Innova\AppBundle\Entity\userSpace $userSpace
     * @return Folder
     */
    public function setUserSpace(\Innova\AppBundle\Entity\userSpace $userSpace = null)
    {
        $this->userSpace = $userSpace;

        return $this;
    }

    /**
     * Get userSpace
     *
     * @return \Innova\AppBundle\Entity\userSpace 
     */
    public function getUserSpace()
    {
        return $this->userSpace;
    }
}
