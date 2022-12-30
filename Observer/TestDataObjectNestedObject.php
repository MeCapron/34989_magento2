<?php

declare(strict_types=1);

namespace Module\DataObject\Observer;

use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Customer\Api\Data\CustomerInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Module\DataObject\Model\LoyaltyCard;
use Module\DataObject\Model\Sub\Card;

class TestDataObjectNestedObject implements ObserverInterface
{
    private DataObjectHelper $dataObjectHelper;

    private CustomerInterfaceFactory $customerFactory;

    public function __construct(
        DataObjectHelper $dataObjectHelper,
        CustomerInterfaceFactory $customerFactory
    ) {
        $this->dataObjectHelper = $dataObjectHelper;
        $this->customerFactory = $customerFactory;
    }

    public function execute(Observer $observer): void
    {
        $customer = $this->customerFactory->create();

        $this->dataObjectHelper->populateWithArray(
            $customer,
            [
                'extension_attributes' => [
                    'loyaltyCards' => [
                        [
                            'label' => 'My first card',
                            'cards' => [
                                [
                                    'card_data' => [
                                        'card_number' => 157
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            CustomerInterface::class
        );

        /** @var LoyaltyCard $loyaltyCard */
        $loyaltyCard = current($customer->getExtensionAttributes()->getLoyaltyCards());

        /** @var Card $innerCard */
        $innerCard = current($loyaltyCard->getCards());

        echo sprintf('The card number is %d', $innerCard->getCardData()->getCardNumber());
    }
}
