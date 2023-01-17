<?php

class Task
{
  private int $id;
  public string $description;

  private DateTime $dateCreate;

  private DateTime $dateUpdate;

  private bool $isDone;

  private bool $userID;

  public function __construct(
    string $description,
    int $userID,
    int | bool $isDone = false,
    string $dateCreate = '',
    string $dateUpdate = '',
    int $id = 0,
  )
  {
    $this->id = $id;
    $this->description = $description;
    $this->dateCreate = !$dateCreate ? new DateTime() : $this->prepareStringDate($dateCreate);
    $this->dateUpdate = !$dateUpdate ? new DateTime() : $this->prepareStringDate($dateUpdate);
    $this->isDone = boolval($isDone);
    $this->userID = $userID;
  }

  public function prepareStringDate(string $dateString): DateTime {
    $datePrepare = new DateTime();
    $datePrepare->setTimestamp(strtotime($dateString));
    return $datePrepare;
  }

  public function changeTaskReady(int $isDone): void
  {
    $this->dateUpdate = new DateTime();
    $this->isDone = boolval($isDone);
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

  public function getID(): int
  {
    return $this->id;
  }

  public function getUserID(): int
  {
    return $this->userID;
  }

}