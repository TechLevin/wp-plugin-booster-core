<?php namespace TechLevin\WPBooster\Core\Commands;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;


class MakePlugin extends Command
{
    protected function configure()
    {
        $this->setName('make:plugin')
             ->setDescription('Some Description')
             ->setHelp('Some help')
             ->addArgument('plugin-name', InputArgument::REQUIRED, 'Type plugin name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Hello World!, %s', $input->getArgument('plugin-name')));
    }
}