<?php
class Comment
{
    private int $ID;
    private User $author;
    private TaskLesson5 $task;
    private string $text;
    private DateTime $dateCreated;


    public function __construct(User $author, TaskLesson5 $task, string $text)
    {
        $this->ID = uniqid();
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
        $this->dateCreated = new DateTime();
    }
}