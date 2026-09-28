<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class RestaurantTable extends Resource
{
    #[ORM\Column]
    private bool $hasWindowView = false;

    #[ORM\Column(length: 100)]
    private ?string $zone = null;

    public function hasWindowView(): bool
    {
        return $this->hasWindowView;
    }

    public function setHasWindowView(bool $hasWindowView): static
    {
        $this->hasWindowView = $hasWindowView;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(string $zone): static
    {
        $this->zone = $zone;

        return $this;
    }
}
