<?php

/**
 * TechDivision\Import\Product\Bundle\Actions\Processors\Batch\ProductBundleOptionPersistBatchProcessor
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product-bundle
 * @link      http://www.techdivision.com
 */

namespace TechDivision\Import\Product\Bundle\Actions\Processors\Batch;

use TechDivision\Import\Actions\Processors\Batch\AbstractPersistBatchProcessor;

/**
 * The product bundle option persist batch processor implementation.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product-bundle
 * @link      http://www.techdivision.com
 */
class ProductBundleOptionPersistBatchProcessor extends AbstractPersistBatchProcessor
{

    /**
     * {@inheritDoc}
     * @see \TechDivision\Import\Product\Bundle\Actions\Processors\Batch\AbstractPersistBatchProcessor::getNumberOfPlaceholders()
     */
    protected function getNumberOfPlaceholders()
    {
        return 4;
    }

    /**
     * {@inheritDoc}
     * @see \TechDivision\Import\Product\Bundle\Actions\Processors\Batch\AbstractPersistBatchProcessor::getStatement()
     */
    protected function getStatement()
    {
        $utilityClassName = $this->getUtilityClassName();
        return $utilityClassName::CREATE_PRODUCT_BUNDLE_OPTION;
    }

    /**
     * Persist's the passed row.
     *
     * @param array $row The row to persist
     *
     * @return string The last inserted ID
     */
    public function execute($row)
    {
        $this->addToStack($row);
        return (string) $this->getStackSize();
    }
}