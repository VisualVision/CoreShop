<?php

namespace CoreShop\Bundle\CoreBundle\Product\ProductPriceRule\Condition;

use CoreShop\Component\Address\Context\CountryContextInterface;
use CoreShop\Component\Address\Model\ZoneInterface;
use CoreShop\Component\Core\Model\CountryInterface;
use CoreShop\Component\Product\Model\ProductInterface;
use CoreShop\Component\Rule\Condition\ConditionCheckerInterface;
use Webmozart\Assert\Assert;

class ZonesConditionChecker implements ConditionCheckerInterface
{
    /**
     * @var CountryContextInterface
     */
    private $countryContext;

    /**
     * @param CountryContextInterface $countryContext
     */
    public function __construct(CountryContextInterface $countryContext)
    {
        $this->countryContext = $countryContext;
    }

    /**
     * {@inheritdoc}
     */
    public function isValid($subject, array $configuration)
    {
        Assert::isInstanceOf($subject, ProductInterface::class);

        $country = $this->countryContext->getCountry();

        if (!$country instanceof CountryInterface) {
            return false;
        }

        if (!$country->getZone() instanceof ZoneInterface) {
            return false;
        }

        return in_array($country->getZone()->getId(), $configuration['zones']);
    }
}