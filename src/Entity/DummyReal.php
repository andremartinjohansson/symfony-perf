<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DummyRealRepository")
 */
class DummyReal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $productID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productManufacturer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productOriginCountry;

    /**
     * @ORM\Column(type="integer")
     */
    private $productWeight;

    /**
     * @ORM\Column(type="integer")
     */
    private $productSellPrize;

    /**
     * @ORM\Column(type="integer")
     */
    private $productBuyPrize;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productColor;

    /**
     * @ORM\Column(type="integer")
     */
    private $productAmount;

    /**
     * @ORM\Column(type="integer")
     */
    private $productCategoryID;

    /**
     * @ORM\Column(type="integer")
     */
    private $productGender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productDeleted;

    public function getId(): ?int
    {
        return $this->productID;
    }

    public function getProductManufacturer(): ?string
    {
        return $this->productManufacturer;
    }

    public function setProductManufacturer(string $productManufacturer): self
    {
        $this->productManufacturer = $productManufacturer;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductOriginCountry(): ?string
    {
        return $this->productOriginCountry;
    }

    public function setProductOriginCountry(string $productOriginCountry): self
    {
        $this->productOriginCountry = $productOriginCountry;

        return $this;
    }

    public function getProductWeight(): ?int
    {
        return $this->productWeight;
    }

    public function setProductWeight(int $productWeight): self
    {
        $this->productWeight = $productWeight;

        return $this;
    }

    public function getProductSellPrize(): ?int
    {
        return $this->productSellPrize;
    }

    public function setProductSellPrize(int $productSellPrize): self
    {
        $this->productSellPrize = $productSellPrize;

        return $this;
    }

    public function getProductBuyPrize(): ?int
    {
        return $this->productBuyPrize;
    }

    public function setProductBuyPrize(int $productBuyPrize): self
    {
        $this->productBuyPrize = $productBuyPrize;

        return $this;
    }

    public function getProductColor(): ?string
    {
        return $this->productColor;
    }

    public function setProductColor(string $productColor): self
    {
        $this->productColor = $productColor;

        return $this;
    }

    public function getProductAmount(): ?int
    {
        return $this->productAmount;
    }

    public function setProductAmount(int $productAmount): self
    {
        $this->productAmount = $productAmount;

        return $this;
    }

    public function getProductCategoryID(): ?int
    {
        return $this->productCategoryID;
    }

    public function setProductCategoryID(int $productCategoryID): self
    {
        $this->productCategoryID = $productCategoryID;

        return $this;
    }

    public function getProductGender(): ?int
    {
        return $this->productGender;
    }

    public function setProductGender(int $productGender): self
    {
        $this->productGender = $productGender;

        return $this;
    }

    public function getProductDeleted(): ?string
    {
        return $this->productDeleted;
    }

    public function setProductDeleted(string $productDeleted): self
    {
        $this->productDeleted = $productDeleted;

        return $this;
    }
}
