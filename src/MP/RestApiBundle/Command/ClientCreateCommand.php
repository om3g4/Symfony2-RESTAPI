<?php

namespace MP\RestApiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use MP\RestApiBundle\Entity\Client;

class ClientCreateCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('mp:rest-api:client:create')
            ->setDescription('Creates a new client')
		;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $clientManager = $this->getContainer()->get('fos_oauth_server.client_manager.default');
        $client = $clientManager->createClient();
        $client->setRedirectUris(array('http://www.google.com'));
        $client->setAllowedGrantTypes(array('authorization_code', 'token'));
        $clientManager->updateClient($client);
        $output->writeln(sprintf('Added a new client with public id <info>%s</info>.', $client->getPublicId()));        
    }
}