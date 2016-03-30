<?php
/**
 * Created by PhpStorm.
 * User: thomasnordkvist
 * Date: 16-03-30
 * Time: 08:26
 */

namespace Netrix\Catalog\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * @api
 */
interface NxCategoryRepositoryInterface
{
    /**
     * Get category list
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Netrix\Catalog\Api\Data\NxCategorySearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}