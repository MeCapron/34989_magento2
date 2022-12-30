<?php

declare(strict_types=1);

namespace Module\DataObject\Model\Sub;

class Card
{
    private \Module\DataObject\Model\Sub\Nested\CardData $cardData;

    /**
     * @return \Module\DataObject\Model\Sub\Nested\CardData
     */
    public function getCardData(): \Module\DataObject\Model\Sub\Nested\CardData
    {
        return $this->cardData;
    }

    /**
     * @param \Module\DataObject\Model\Sub\Nested\CardData $cardData
     *
     * @return void
     */
    public function setCardData(\Module\DataObject\Model\Sub\Nested\CardData $cardData): void
    {
        $this->cardData = $cardData;
    }
}
