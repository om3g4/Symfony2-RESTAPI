<?php

namespace MP\RestApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Organization
 *
 * @ORM\Table(name="organizations")
 * @ORM\Entity
 *
 * @ExclusionPolicy("all")
 */
class Organization
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Expose
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     *
     * @Expose
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     * 
     * @Expose
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     *
     * @Expose
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone_number", type="string", length=255)
     *
     * @Expose
     */
    private $telephoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     *
     * @Expose
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_number", type="string", length=255)
     *
     * @Expose
     */
    private $taxNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="vat_number", type="string", length=255)
     *
     * @Expose
     */
    private $vatNumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     *
     * @Expose
     */
    private $active;


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
     * @return Organization
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
     * Set type
     *
     * @param string $type
     * @return Organization
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
     * Set email
     *
     * @param string $email
     * @return Organization
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephoneNumber
     *
     * @param string $telephoneNumber
     * @return Organization
     */
    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;
    
        return $this;
    }

    /**
     * Get telephoneNumber
     *
     * @return string 
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Organization
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set taxNumber
     *
     * @param string $taxNumber
     * @return Organization
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;
    
        return $this;
    }

    /**
     * Get taxNumber
     *
     * @return string 
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * Set vatNumber
     *
     * @param string $vatNumber
     * @return Organization
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    
        return $this;
    }

    /**
     * Get vatNumber
     *
     * @return string 
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Organization
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}