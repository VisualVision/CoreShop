<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2019 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Component\Product\Repository;

use CoreShop\Component\Product\Model\ProductInterface;
use CoreShop\Component\Product\Model\ProductSpecificPriceRuleInterface;
use CoreShop\Component\Rule\Repository\RuleRepositoryInterface;

interface ProductSpecificPriceRuleRepositoryInterface extends RuleRepositoryInterface
{
    /**
     * @param ProductInterface $product
     *
     * @return ProductSpecificPriceRuleInterface[]
     */
    public function findForProduct(ProductInterface $product);
}
