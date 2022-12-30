<?php

declare(strict_types=1);

namespace Module\DataObject\Model\Sub\Nested;

class CardData
{
    private ?int $cardNumber = null;

    /**
     * @return int|null
     */
    public function getCardNumber(): ?int
    {
        return $this->cardNumber;
    }

    /**
     * @param int $cardNumber
     *
     * @return void
     */
    public function setCardNumber(int $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }
}
