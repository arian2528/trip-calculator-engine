<?php

namespace App\Entity;

interface VehiclesInterface
{
    public function getId(): ?int;

    public function getType(): ?string;

    public function setType(string $type): static;

    public function getVehicleDealer(): ?VehicleDealer;

    public function setVehicleDealer(?VehicleDealer $vehicleDealer): static;

    public function getVehicleDealerVId(): ?string;

    public function setVehicleDealerVId(?string $vehicleDealerVId): static;

    public function getIsRental(): ?bool;

    public function setIsRental(?bool $isRental): static;

    public function getIsElectric(): ?bool;

    public function setIsElectric(?bool $isElectric): static;

    public function getIsPublic(): ?bool;

    public function setIsPublic(?bool $isPublic): static;
}