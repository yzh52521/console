<?php


namespace Pkg6\Console;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;


class OutputStyle  extends SymfonyStyle
{
    /**
     * The output instance.
     * @var OutputInterface
     */
    private $output;

    /**
     * Create a new Console OutputStyle instance.
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    public function __construct(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;

        parent::__construct($input, $output);
    }

    /**
     * Returns whether verbosity is quiet (-q).
     * @return bool
     */
    public function isQuiet()
    {
        return $this->output->isQuiet();
    }

    /**
     * Returns whether verbosity is verbose (-v).
     * @return bool
     */
    public function isVerbose()
    {
        return $this->output->isVerbose();
    }

    /**
     * Returns whether verbosity is very verbose (-vv).
     * @return bool
     */
    public function isVeryVerbose()
    {
        return $this->output->isVeryVerbose();
    }

    /**
     * Returns whether verbosity is debug (-vvv).
     * @return bool
     */
    public function isDebug()
    {
        return $this->output->isDebug();
    }

    /**
     * Get the underlying Symfony output implementation.
     * @return OutputInterface
     */
    public function getOutput()
    {
        return $this->output;
    }
}