<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class QuestionFixtures extends Fixture implements DependentFixtureInterface
{
    const QUESTION_REFERENCE = "question";
    const QUESTION_REFERENCE_2 = "question2";
    const QUESTION_REFERENCE_3 = "question3";
    const QUESTION_REFERENCE_4 = "question4";
    const QUESTION_REFERENCE_5 = "question5";
    const QUESTION_REFERENCE_6 = "question6";


    public function load(ObjectManager $manager): void
    {
        // On crée des questions sur les langages de programmation
        $question1 = new Question();
        $question1->setIntitule('Quel est le meilleur langage de programmation ?');
        $question1->setQuizz($this->getReference(QuizzFixtures::QUIZZ_REFERENCE));
        $manager->persist($question1);
        $this->addReference(self::QUESTION_REFERENCE, $question1);

        $question2 = new Question();
        $question2->setIntitule('Quel est le meilleur framework PHP ?');
        $question2->setQuizz($this->getReference(QuizzFixtures::QUIZZ_REFERENCE));
        $manager->persist($question2);
        $this->addReference(self::QUESTION_REFERENCE_2, $question2);


        $question3 = new Question();
        $question3->setIntitule('Quel est le meilleur framework JavaScript ?');
        $question3->setQuizz($this->getReference(QuizzFixtures::QUIZZ_REFERENCE));
        $manager->persist($question3);
        $this->addReference(self::QUESTION_REFERENCE_3, $question3);


        // On crée des questions sur le système solaire
        $question4 = new Question();
        $question4->setIntitule('Quelle est la planète la plus proche du soleil ?');
        $question4->setQuizz($this->getReference(QuizzFixtures::QUIZZ_REFERENCE_2));
        $manager->persist($question4);
        $this->addReference(self::QUESTION_REFERENCE_4, $question4);


        $question5 = new Question();
        $question5->setIntitule('Quelle est la planète la plus éloignée du soleil ?');
        $question5->setQuizz($this->getReference(QuizzFixtures::QUIZZ_REFERENCE_2));
        $manager->persist($question5);
        $this->addReference(self::QUESTION_REFERENCE_5, $question5);


        $question6 = new Question();
        $question6->setIntitule('Quelle est la planète la plus petite du système solaire ?');
        $question6->setQuizz($this->getReference(QuizzFixtures::QUIZZ_REFERENCE_2));
        $manager->persist($question6);
        $this->addReference(self::QUESTION_REFERENCE_6, $question6);


        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            QuizzFixtures::class
        );
    }
}
