<?php

namespace App\Entity\Factory;

use App\Entity\VehiclesInterface;

interface VehiclesFactoryInterface
{
    const VEHICLE_NAMESPACE = "APP\Entity\\";

    public function create(string $vehicleType): VehiclesInterface;
}