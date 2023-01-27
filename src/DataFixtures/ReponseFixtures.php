<?php

namespace App\DataFixtures;

use App\Entity\Reponse;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ReponseFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        // Réponses question 1
        $reponse = new Reponse();
        $reponse
            ->setTexte('PHP')
            ->setIsCorrect(true)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('JavaScript')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('C++')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('C#')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE));
        $manager->persist($reponse);


        // Réponses question 2
        $reponse = new Reponse();
        $reponse
            ->setTexte('Symfony')
            ->setIsCorrect(true)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_2));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('Laravel')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_2));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('CakePHP')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_2));
        $manager->persist($reponse);

        // Réponses question 3
        $reponse = new Reponse();
        $reponse
            ->setTexte('React')
            ->setIsCorrect(true)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_3));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('Angular')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_3));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('VueJS')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_3));
        $manager->persist($reponse);

        // Réponses question 4
        $reponse = new Reponse();
        $reponse
            ->setTexte('Mars')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_4));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('Jupiter')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_4));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('Mercure')
            ->setIsCorrect(true)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_4));
        $manager->persist($reponse);

        // Réponses question 5
        $reponse = new Reponse();
        $reponse
            ->setTexte('Neptune')
            ->setIsCorrect(true)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_5));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('Uranus')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_5));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('Jupiter')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_5));
        $manager->persist($reponse);

        // Réponses question 6
        $reponse = new Reponse();
        $reponse
            ->setTexte('Mars')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_6));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('Mercure')
            ->setIsCorrect(true)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_6));
        $manager->persist($reponse);

        $reponse = new Reponse();
        $reponse
            ->setTexte('Terre')
            ->setIsCorrect(false)
            ->setQuestion($this->getReference(QuestionFixtures::QUESTION_REFERENCE_6));
        $manager->persist($reponse);


        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            QuestionFixtures::class
        );
    }
}
