<?php 

namespace Command; 

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class DefaultCommand extends Command
{
	protected function configure(){
        
        $this->setName("Default:showMessage")
                ->setDescription("Mostra uma mensagem de boas vindas ao framework")
                ->addArgument('Name', InputArgument::REQUIRED, 'seu nome :)');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        
        $input_name = $input->getArgument('Name');
        
        $output->writeln('Bem vindo '.$input_name.', ao console do framework. Aqui voce consegue criar seus proprios comandos personalizados.');

    }
}