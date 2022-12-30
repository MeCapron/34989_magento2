<?php

declare(strict_types=1);

namespace Module\DataObject\Model;

class LoyaltyCard
{
    private string $label;

    /**
     * @var \Module\DataObject\Model\Sub\Card[]
     */
    private array $cards;

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return void
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return \Module\DataObject\Model\Sub\Card[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * @param \Module\DataObject\Model\Sub\Card[] $cards
     *
     * @return void
     */
    public function setCards(array $cards): void
    {
        $this->cards = $cards;
    }
}
