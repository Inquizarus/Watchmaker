<?php
namespace Inquizarus\Watchmaker;

interface StopwatchInterface
{

    /**
     * @return int
     */
    public function getStartTime(): int;

    /**
     * @return int
     */
    public function getStopTime(): int;

    /**
     * Starts the timer
     */
    public function start(): void;

    /**
     * Stops the timer
     */
    public function stop(): void;

    /**
     * Returns the total time taken between stopwatch starting
     * and stopping
     *
     * @return int
     */
    public function difference(): int;

    /**
     * Set a closure that Stopwatch will use to generate timestamps.
     *
     * @param \Closure $time
     *
     * @return StopwatchInterface
     */
    public function setTimeFunction(\Closure $time): StopwatchInterface;
}