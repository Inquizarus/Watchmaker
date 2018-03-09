<?php
namespace Inquizarus\Watchmaker;

class Stopwatch implements StopwatchInterface
{
    /** @var \Closure */
    private $time = null;

    /** @var int */
    private $started = 0;

    /** @var int */
    private $stopped = 0;

    /**
     * @inheritDoc
     */
    public function getStartTime(): int
    {
        return $this->started;
    }

    /**
     * @inheritDoc
     */
    public function getStopTime(): int
    {
        return $this->stopped;
    }

    /**
     * @inheritDoc
     */
    public function start(): void
    {
        $this->started = $this->time ? call_user_func_array($this->time, []) : microtime(true);
    }

    /**
     * @inheritDoc
     */
    public function stop(): void
    {
        $this->stopped = $this->time ? call_user_func_array($this->time, []) : microtime(true);
    }

    /**
     * @inheritDoc
     */
    public function difference(): int
    {
        return $this->getStopTime() - $this->getStartTime();
    }

    /**
     * @inheritDoc
     */
    public function setTimeFunction(\Closure $time): StopwatchInterface
    {
        $this->time = $time;
        return $this;
    }

}