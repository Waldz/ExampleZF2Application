<?php

namespace Application\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zend\Mvc\Application;

/**
 * Class HelloCommand
 */
class HelloCommand extends Command
{

    /**
     * Zend mvc application.
     *
     * @var Application $zendApplication
     */
    private $zendApplication;

    /**
     * Initialize Reschedule command with Zend application instance
     *
     * @param Application $zendApplication Zend application
     */
    public function __construct(Application $zendApplication)
    {
        $this->zendApplication = $zendApplication;

        parent::__construct($this->getName());
    }

    /**
     * Configure Reschedule command.
     */
    protected function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('I say something back');
    }

    /**
     * Execute Reschedule command
     *
     * @param InputInterface $input Input interface
     * @param OutputInterface $output Output interface
     * @return boolean Return true on success
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo 'Hello, my darling. It works';
        return true;
    }
}
