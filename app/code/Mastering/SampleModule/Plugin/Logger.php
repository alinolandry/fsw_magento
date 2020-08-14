<?php


namespace Mastering\SampleModule\Plugin;

use Mastering\SampleModule\Console\Command\AddItem;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Class Logger
 * @package Mastering\SampleModule\Plugin
 */
class Logger
{
    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @param AddItem $command
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    public function beforeRun(AddItem $command, InputInterface $input, OutputInterface $output)
    {
        $output->writeln("beforeExecute");
    }


    /**
     * @param AddItem $command
     * @param \Closure $proceed
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    public function aroundRun(AddItem $command, \Closure $proceed, InputInterface $input, OutputInterface $output)
    {
        $output->writeln("aroundExecute before call");
        $proceed->call($command, $input, $output);
        $output->writeln('aroundExecute after call');
        $this->output = $output;
    }

    /**
     * @param AddItem $command
     */
    public function afterRun(AddItem $command)
    {
        $this->output->writeln('afterExecute');
    }

}