<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\BusinessType;
use App\Repository\BusinessRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BusinessRepository::class)]
class Business
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(enumType: BusinessType::class)]
    private ?BusinessType $businessType = null;

    #[ORM\ManyToOne(targetEntity: City::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?City $city = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'owner_id', nullable: false)]
    private ?User $owner = null;

    #[ORM\Column]
    private int $defaultCancelBeforeMinutes;

    #[ORM\Column]
    private int $defaultReminderBeforeMinutes;

    #[ORM\Column(length: 100)]
    private ?string $timezone = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getBusinessType(): ?BusinessType
    {
        return $this->businessType;
    }

    public function setBusinessType(BusinessType $businessType): static
    {
        $this->businessType = $businessType;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(City $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(User $owner): static
    {
        $this->owner = $owner;

        return $this;
    }

    public function getDefaultCancelBeforeMinutes(): int
    {
        return $this->defaultCancelBeforeMinutes;
    }

    public function setDefaultCancelBeforeMinutes(int $defaultCancelBeforeMinutes): static
    {
        $this->defaultCancelBeforeMinutes = $defaultCancelBeforeMinutes;

        return $this;
    }

    public function getDefaultReminderBeforeMinutes(): int
    {
        return $this->defaultReminderBeforeMinutes;
    }

    public function setDefaultReminderBeforeMinutes(int $defaultReminderBeforeMinutes): static
    {
        $this->defaultReminderBeforeMinutes = $defaultReminderBeforeMinutes;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(string $timezone): static
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
