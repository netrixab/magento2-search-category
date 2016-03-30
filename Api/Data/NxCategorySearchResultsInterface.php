<?php
/**
 * Created by PhpStorm.
 * User: thomasnordkvist
 * Date: 16-03-30
 * Time: 11:10
 */

namespace Netrix\Catalog\Api\Data;

/**
 * @api
 */
interface NxCategorySearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get attributes list.
     *
     * @return \Magento\Catalog\Api\Data\CategoryInterface[]
     */
    public function getItems();

    /**
     * Set attributes list.
     *
     * @param \Magento\Catalog\Api\Data\CategoryInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}