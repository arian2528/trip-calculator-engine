<?php

namespace App\Tests;

use App\Entity\Bicycle;
use App\Entity\Factory\VehiclesFactory;
use App\Entity\Vehicle;
use App\Entity\VehicleDealer;


use function PHPUnit\Framework\assertEquals;

class HandleVehiclesTest extends DatabaseSetAndTearTestCase
{
    public function test_a_bicycle_can_be_stored_in_db(): void
    {
        // Set up

        $type = 'bicycle';
        $vehicleDealerName = 'Local Bikes';
        $vehicleDealerVId = 'YUTR7654';
        $brand = 'Gazelle';

        $vehiclesFactory = new VehiclesFactory();

        // Create new VehicleDealer
        $vehicleDealer = new VehicleDealer();
        $vehicleDealer->setType($type);
        $vehicleDealer->setName($vehicleDealerName);

        $this->entityManager->persist($vehicleDealer);

        // Create new Bicycle
        /** @var Bicycle $vehicle */
        $vehicle = $vehiclesFactory->create($type);
        $vehicle->setType($type);
        $vehicle->setVehicleDealer($vehicleDealer);
        $vehicle->setVehicleDealerVId($vehicleDealerVId);
        $vehicle->setIsPublic(false);
        $vehicle->setIsElectric(false);
        $vehicle->setIsRental(false);
        $vehicle->setBrand($brand);

        $this->entityManager->persist($vehicle);

        // Do Something

        $this->entityManager->flush();

        $vehicleRepository = $this->entityManager->getRepository(Bicycle::class);

        /** @var Bicycle $vehicle */
        $vehicle = $vehicleRepository
            ->findOneBy(
                [
                    'type' => $type,
                    'vehicleDealer' => $vehicleDealer,
                    'vehicleDealerVId' => $vehicleDealerVId
                ]
            );

        /** @var VehicleDealer $vehicleDealer */
        $vehicleDealer = $vehicle->getVehicleDealer();


        // Assert
        self::assertEquals($type, $vehicle->getType());
        self::assertEquals($vehicleDealerVId, $vehicle->getVehicleDealerVId());
        self::assertEquals($vehicleDealerName, $vehicleDealer->getName());
        self::assertFalse($vehicle->getIsPublic());
        self::assertFalse($vehicle->getIsElectric());
        self::assertEquals($brand, $vehicle->getBrand());
    }
}
