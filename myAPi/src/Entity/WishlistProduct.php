<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * WishlistProduct
 *
 * @ORM\Table(name="wishlist_product", indexes={@ORM\Index(name="wishlist_id", columns={"wishlist_id"}), @ORM\Index(name="product_id", columns={"product_id"})})
 * @ORM\Entity
 * @ApiResource
 */
class WishlistProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \Wishlist
     *
     * @ORM\ManyToOne(targetEntity="Wishlist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wishlist_id", referencedColumnName="id")
     * })
     */
    private $wishlist;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Products
    {
        return $this->product;
    }

    public function setProduct(?Products $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getWishlist(): ?Wishlist
    {
        return $this->wishlist;
    }

    public function setWishlist(?Wishlist $wishlist): self
    {
        $this->wishlist = $wishlist;

        return $this;
    }


}
