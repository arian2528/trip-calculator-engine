<?php

namespace App\Entity;

use App\Repository\VehicleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
class Vehicle implements VehiclesInterface
{
    const VEHICLES_TYPES = [
        'automobile', 'bicycle', 'scooter', 'motorcycle', 'bus', 'metro'
    ];

    const VEHICLES_OF_PUBLIC_USE = [
        'bus', 'metro'
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\ManyToOne]
    private ?VehicleDealer $vehicleDealer = null;

    #[ORM\Column(nullable: true)]
    private ?string $vehicleDealerVId = null;

    #[ORM\Column]
    private ?bool $isPublic = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isElectric = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isRental = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getVehicleDealer(): ?VehicleDealer
    {
        return $this->vehicleDealer;
    }

    public function setVehicleDealer(?VehicleDealer $vehicleDealer): static
    {
        $this->vehicleDealer = $vehicleDealer;

        return $this;
    }

    public function getVehicleDealerVId(): ?string
    {
        return $this->vehicleDealerVId;
    }

    public function setVehicleDealerVId(?string $vehicleDealerVId): static
    {
        $this->vehicleDealerVId = $vehicleDealerVId;

        return $this;
    }

    public function getIsPublic(): ?bool
    {
        return $this->isPublic;
    }

    public function setIsPublic(?bool $isPublic): static
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    public function getIsElectric(): ?bool
    {
        return $this->isElectric;
    }

    public function setIsElectric(?bool $isElectric): static
    {
        $this->isElectric = $isElectric;

        return $this;
    }

    public function getIsRental(): ?bool
    {
        return $this->isRental;
    }

    public function setIsRental(?bool $isRental): static
    {
        $this->isRental = $isRental;

        return $this;
    }
}
