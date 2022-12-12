<?php
class Task
{
    public string $taskName = "";
    public int $taskTime = 0;

    public function __construct(string $taskName, int $taskTime)
    {
        $this->taskName = $taskName;
        $this->taskTime = $taskTime;
    }
}