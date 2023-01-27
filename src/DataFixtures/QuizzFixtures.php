<?php

namespace App\DataFixtures;

use App\Entity\Quizz;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class QuizzFixtures extends Fixture
{
    const QUIZZ_REFERENCE = 'Quiz';
    const QUIZZ_REFERENCE_2 = 'Quiz2';


    public function load(ObjectManager $manager): void
    {
        $quizz = new Quizz();
        $quizz->setNom('Quizz sur les langages de programmation');
        $manager->persist($quizz);
        $this->addReference(self::QUIZZ_REFERENCE, $quizz);

        $quizz2 = new Quizz();
        $quizz2->setNom('Quizz sur le système solaire');
        $manager->persist($quizz2);
        $this->addReference(self::QUIZZ_REFERENCE_2, $quizz2);

        $manager->flush();
    }
}
