<?php

/**
 * TechDivision\Import\Product\Bundle\Actions\Processors\Batch\ProductBundleSelectionPricePersistBatchProcessor
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
 * The product bundle selection persist batch processor implementation.
 *
 * @author    Tim Wagner <t.wagner@techdivision.com>
 * @copyright 2016 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/import-product-bundle
 * @link      http://www.techdivision.com
 */
class ProductBundleSelectionPricePersistBatchProcessor extends AbstractPersistBatchProcessor
{

    /**
     * The number of placeholders of the prepared statement.
     *
     * @return integer The number of placeholers
     * @see \TechDivision\Import\Actions\Processors\Batch\AbstractBatchBaseProcessor::getNumberOfPlaceholders()
     */
    protected function getNumberOfPlaceholders()
    {
        return 4;
    }

    /**
     * Return's the SQL statement that has to be prepared.
     *
     * @return string The SQL statement
     * @see \TechDivision\Import\Actions\Processors\Batch\AbstractBatchBaseProcessor::getStatement()
     */
    protected function getStatement()
    {
        $utilityClassName = $this->getUtilityClassName();
        return $utilityClassName::CREATE_PRODUCT_BUNDLE_SELECTION_PRICE;
    }
}
