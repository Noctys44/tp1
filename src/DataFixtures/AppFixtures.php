<?php

namespace App\DataFixtures;

use App\Entity\Pilote;
use App\Entity\Qualification;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $qualification = new Qualification();
        $qualification
            ->setCode('COPIL')
            ->setLibelle('Copilot');
        $manager->persist($qualification);

        $pilote = new Pilote();
        $pilote
            ->setNom('DUPONT')
            ->setPrenom('Jean')
            ->setEmail('jean@dupont.com')
            ->setQualification($qualification);
        $manager->persist($pilote);


        $manager->flush();
    }
}
