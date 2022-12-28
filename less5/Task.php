<?php
class TaskLesson5
{
    private int $ID;
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;

    private DateTime $dateDone;

    private int $priority;

    private bool $isDone;

    private User $user;

    private array $comments;

    public function __construct(User $user, string $description, int $priority = 2)
    {
        $this->ID = uniqid();
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
        $this->dateCreated = new DateTime();
        $this->dateUpdated = new DateTime();
    }

    function getDescription(): string {
        return $this->description;
    }

    function setDescription(string $description): void {
        $this->dateUpdated = new DateTime();
        $this->description = $description;
    }

    function getDateCreated(): DateTime {
        return $this->dateCreated;
    }

    function getDateUpdated(): DateTime {
        return $this->dateUpdated;
    }

    function getDateDone(): DateTime {
        return $this->dateDone;
    }

    function getPriority(): int {
        return $this->priority;
    }

    function setPriority(int $priority): void {
        $this->dateUpdated = new DateTime();
        $this->priority = $priority;
    }

    function getIsDone(): bool {
        return $this->isDone;
    }

    function markAsDone(): void {
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
        $this->isDone = true;
    }

    function getUser(): User {
        return $this->user;
    }

    function addComment(Comment $comment): void {
        $this->comments[] = $comment;
    }

}