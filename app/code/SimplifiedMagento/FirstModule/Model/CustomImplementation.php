<?php


namespace SimplifiedMagento\FirstModule\Model;


use Magento\Catalog\Api\ProductRepositoryInterface;


class CustomImplementation implements ProductRepositoryInterface
{



    /**
     * Create product
     *
     * @param \Magento\Catalog\Api\Data\ProductInterface $product
     * @param bool $saveOptions
     * @return \Magento\Catalog\Api\Data\ProductInterface
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\StateException
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(\Magento\Catalog\Api\Data\ProductInterface $product, $saveOptions = false)
    {
        // TODO: Implement save() method.
    }

    /**
     * @param string $sku
     * @param bool $editMode
     * @param int|null $storeId
     * @param bool $forceReload
     * @return Data\ProductInterface
     */
    public function get($sku, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement get() method.
    }

    /**
     * @param int $productId
     * @param bool $editMode
     * @param int|null $storeId
     * @param bool $forceReload
     * @return Data\ProductInterface
     */
    public function getById($productId, $editMode = false, $storeId = null, $forceReload = false)
    {
        // TODO: Implement getById() method.
    }

    /**
     * @param Data\ProductInterface $product
     * @return bool
     */
    public function delete(\Magento\Catalog\Api\Data\ProductInterface $product)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param string $sku
     * @return bool
     */
    public function deleteById($sku)
    {
        // TODO: Implement deleteById() method.
    }

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return Data\ProductSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }
}