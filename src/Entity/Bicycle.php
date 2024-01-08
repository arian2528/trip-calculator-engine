<?php

namespace App\Entity;

use App\Repository\BicycleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BicycleRepository::class)]
class Bicycle extends Vehicle
{
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $brand = null;

    #[ORM\Column(nullable: true)]
    private ?int $wheelSize = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ridePosition = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isStepThroughFrame = null;

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getWheelSize(): ?int
    {
        return $this->wheelSize;
    }

    public function setWheelSize(?int $wheelSize): static
    {
        $this->wheelSize = $wheelSize;

        return $this;
    }

    public function getRidePosition(): ?string
    {
        return $this->ridePosition;
    }

    public function setRidePosition(?string $ridePosition): static
    {
        $this->ridePosition = $ridePosition;

        return $this;
    }

    public function isIsStepThroughFrame(): ?bool
    {
        return $this->isStepThroughFrame;
    }

    public function setIsStepThroughFrame(?bool $isStepThroughFrame): static
    {
        $this->isStepThroughFrame = $isStepThroughFrame;

        return $this;
    }
}
