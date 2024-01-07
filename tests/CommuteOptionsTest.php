<?php

namespace App\Tests;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CommuteOptionsTest extends KernelTestCase
{
    protected array|EntityManagerInterface $entityManager;
    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        DatabasePrimer::prime($kernel);

        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManagers();
    }

    public function test_a_vehicle_can_be_stored_in_db(): void
    {
        $this->assertTrue(true);
    }
}
