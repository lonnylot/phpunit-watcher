<?php

namespace Lonnylot\PhpUnitWatcher\Screens;

use Lonnylot\PhpUnitWatcher\Terminal;

abstract class Screen
{
    /** @var \Lonnylot\PhpUnitWatcher\Terminal */
    protected $terminal;

    public function useTerminal(Terminal $terminal)
    {
        $this->terminal = $terminal;

        return $this;
    }

    public function draw()
    {
        return $this;
    }

    public function registerListeners()
    {
        return $this;
    }

    public function clear()
    {
        passthru("echo '\033\143'");

        return $this;
    }

    public function removeAllListeners()
    {
        $this->terminal->removeAllListeners();

        return $this;
    }

    public function clearPrompt()
    {
        $this->terminal->clearPrompt();

        return $this;
    }
}
