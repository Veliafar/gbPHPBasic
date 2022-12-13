<?php
class Task
{
    public string $name = "";
    public int $time = 0;

    public function __construct(string $name, int $time)
    {
        $this->name = $name;
        $this->time = $time;
    }
}