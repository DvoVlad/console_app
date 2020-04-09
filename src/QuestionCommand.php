<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
//use Symfony\Component\Console\Input\InputArgument;
//use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class QuestionCommand extends Command
{
   protected function configure()
   {
       $this
           ->setName('questions')
           ->setDescription('ask user');
   }

   protected function execute(InputInterface $input, OutputInterface $output)
   {	
	    $helper = $this->getHelper('question');
	    $question = new Question('Кас вас зовут?', '');
	    $name = $helper->ask($input, $output, $question);
	    $question2 = new Question('Сколько вам лет?', '');
	    $year = $helper->ask($input, $output, $question2);
	    $question3 = new ChoiceQuestion(
			'Ваш пол?',
			['мужчина', 'женщина'],
			0
		);
		$question3->setErrorMessage('Sex is invalid');
		$sex = $helper->ask($input, $output, $question3);
		$output->writeln('Имя: ' . $name . ' Возраст: ' . $year . ' Пол: ' . $sex);
		return 0; 
   }
}

