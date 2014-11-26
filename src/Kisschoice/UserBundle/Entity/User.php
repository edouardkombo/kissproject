<?php

namespace Kisschoice\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Kisschoice\UserBundle\Entity\UserRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt")
 */
class User extends BaseUser
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=25)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=25)
     */
    private $firstname;
    
    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=2)
     */
    private $gender;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="birthdate", type="datetime")
     */
    private $birthdate;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="deny_access", type="boolean")
     */
    private $denyAccess;    

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", length=50)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_id", type="string", length=50)
     */
    private $twitterId;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;     


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
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }
    
    /**
     * Set birthdate
     *
     * @param datetime $birthdate
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return string 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    
    /**
     * Set denyAccess
     *
     * @param boolean $denyAccess
     * @return User
     */
    public function setDenyAccess($denyAccess)
    {
        $this->denyAccess = $denyAccess;

        return $this;
    }

    /**
     * Get denyAccess
     *
     * @return string 
     */
    public function getDenyAccess()
    {
        return $this->denyAccess;
    }    
    
    /**
     * Set facebookId
     *
     * @param string $facebookId
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set twitterId
     *
     * @param string $twitterId
     * @return User
     */
    public function setTwitterId($twitterId)
    {
        $this->twitterId = $twitterId;

        return $this;
    }

    /**
     * Get twitterId
     *
     * @return string 
     */
    public function getTwitterId()
    {
        return $this->twitterId;
    }
    
    /**
     * Set createdAt
     *
     * @param string $createdAt
     * @return Store
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * Set updatedat
     *
     * @param datetime $updatedAt
     * @return Store
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * Set deletedAt
     *
     * @param datetime $deletedAt
     * @return Store
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return datetime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }    
}
