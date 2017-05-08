<?php

namespace CoreShop\Component\Shipping\Rule\Action;

use CoreShop\Component\Address\Model\AddressInterface;
use CoreShop\Component\Core\Model\CarrierInterface;

class DiscountPercentActionProcessor implements CarrierPriceActionProcessorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getPrice(CarrierInterface $carrier, AddressInterface $address, array $configuration, $withTax = true)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getModification(CarrierInterface $carrier, AddressInterface $address, $price, array $configuration)
    {
        return -1 * ($price * ($configuration['percent'] / 100));
    }
}