<?php

namespace Headoo\ShoppingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Headoo\ShoppingBundle\Entity\Product as Product;
use Kisschoice\UserBundle\Entity\User as User;

/**
 * Command
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Headoo\ShoppingBundle\Entity\OrdersRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt")
 */
class Orders
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
     * @var product
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="id")
     * @ORM\Column(name="product_id", type="integer")
     */
    private $product;

    /**
     * @var User
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="id")
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=100)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime")
     */
    private $deletedAt;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string")
     */
    private $status;    


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
     * Set product
     *
     * @param Product $product
     * @return Orders
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set user
     *
     * @param User $user
     * @return Orders
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get userId
     *
     * @return User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Orders
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Orders
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Orders
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Orders
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }
    
    /**
     * Set status
     *
     * @param string $status
     * @return Orders
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
        
}
