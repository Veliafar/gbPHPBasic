<?php
class User
{
    private int $ID;
    private string $name;
    private string $email;
    private ?string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

    private array $comments;
    private array $tasks;


    public function __construct(string $name, string $email, ?string $sex, ?string $age)
    {
        $this->ID = uniqid();
        $this->name = $name;
        $this->email = $email;
        $this->sex = $sex ?? null;
        $this->age = $age ?? null;
        $this->dateCreated = new DateTime();
    }

    function addComment(Comment $comment): void {
        $this->comments[] = $comment;
    }

    function addTask(Task $task): void {
        $this->tasks[] = $task;
    }
}