<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class SayHellowCommand extends Command
{
   protected function configure()
   {
       $this
           ->setName('hello_string')
           ->setDescription('hello string')
           ->addArgument('string', InputArgument::REQUIRED, 'The string');
   }

   protected function execute(InputInterface $input, OutputInterface $output)
   {	$text = $input->getArgument('string');
		$output->writeln('Привет ' . $text);
		return 0; 
   }
}

