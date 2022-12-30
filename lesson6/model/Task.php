<?php

class Task
{
  public string $description;

  private DateTime $dateCreate;

  private DateTime $dateUpdate;

  private bool $isDone;

  public function __construct(string $description)
  {
    $this->description = $description;
    $this->dateCreate = new DateTime();
    $this->dateUpdate = new DateTime();
    $this->isDone = false;
  }

  public function markAsDone(): void
  {
    $this->dateUpdate = new DateTime();
    $this->isDone = true;
  }

  public function markAsUndone(): void
  {
    $this->dateUpdate = new DateTime();
    $this->isDone = false;
  }

  public function getDateCreate(): string
  {
    return $this->dateCreate->format('d.m.Y H:i');
  }

  public function getDateUpdate(): string
  {
    return $this->dateUpdate->format('d.m.Y H:i:s');
  }

  public function getIsDone(): bool
  {
    return $this->isDone;
  }

}