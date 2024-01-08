<?php

namespace App\Entity\Factory;

use App\Entity\VehiclesInterface;
use Symfony\Component\VarExporter\Exception\ClassNotFoundException;

class VehiclesFactory implements VehiclesFactoryInterface
{
    /** @throws ClassNotFoundException */
    public function create(string $vehicleType): VehiclesInterface
    {
        $vehicleClass = self::VEHICLE_NAMESPACE . ucwords($vehicleType);

        if (!class_exists($vehicleClass)) {
            throw new ClassNotFoundException($vehicleClass);
        }

        return new $vehicleClass();
    }
}