<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\BookingPolicyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookingPolicyRepository::class)]
class BookingPolicy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Business::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Business $business = null;

    #[ORM\Column(type: Types::TIME_IMMUTABLE)]
    private ?\DateTimeImmutable $timeFrom = null;

    #[ORM\Column(type: Types::TIME_IMMUTABLE)]
    private ?\DateTimeImmutable $timeTo = null;

    #[ORM\Column]
    private int $cancelBeforeMinutes;

    #[ORM\Column]
    private int $reminderBeforeMinutes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBusiness(): ?Business
    {
        return $this->business;
    }

    public function setBusiness(Business $business): static
    {
        $this->business = $business;

        return $this;
    }

    public function getTimeFrom(): ?\DateTimeImmutable
    {
        return $this->timeFrom;
    }

    public function setTimeFrom(\DateTimeImmutable $timeFrom): static
    {
        $this->timeFrom = $timeFrom;

        return $this;
    }

    public function getTimeTo(): ?\DateTimeImmutable
    {
        return $this->timeTo;
    }

    public function setTimeTo(\DateTimeImmutable $timeTo): static
    {
        $this->timeTo = $timeTo;

        return $this;
    }

    public function getCancelBeforeMinutes(): int
    {
        return $this->cancelBeforeMinutes;
    }

    public function setCancelBeforeMinutes(int $cancelBeforeMinutes): static
    {
        $this->cancelBeforeMinutes = $cancelBeforeMinutes;

        return $this;
    }

    public function getReminderBeforeMinutes(): int
    {
        return $this->reminderBeforeMinutes;
    }

    public function setReminderBeforeMinutes(int $reminderBeforeMinutes): static
    {
        $this->reminderBeforeMinutes = $reminderBeforeMinutes;

        return $this;
    }
}
