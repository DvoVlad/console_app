<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class TimesStringCommand extends Command
{
   protected function configure()
   {
       	$this
           ->setName('times_string')
           ->setDescription('convert string into new format')
           ->addArgument('string', InputArgument::REQUIRED, 'The string')
           ->addOption(
			't',
			null,
			InputOption::VALUE_OPTIONAL,
			'количество повторов строки',
			2
	);
   }

   protected function execute(InputInterface $input, OutputInterface $output)
   {
	$text = $input->getArgument('string');
	for($i = 0;$i < $input->getOption('t');$i++){
		$output->writeln($text);
	}
	return 0; 
   }
}

