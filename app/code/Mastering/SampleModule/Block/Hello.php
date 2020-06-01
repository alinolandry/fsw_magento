<?php


namespace Mastering\SampleModule\Block;


use Magento\Framework\View\Element\Template;
use Mastering\SampleModule\Model\ResourceModel\Item\Collection;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;


class Hello extends Template
{
    private $collectionFactory;


    public function __construct(Template\Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        // $this->$collectionFactory = $collectionFactory; method of training we use factory, so when i use it, it's no working for me I used objectManager
        parent::__construct($context, $data);
    }

    /**
     * @return \Mastering\SampleModule\Model\Item[]
     */
    public function getItems()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $model = $objectManager->create('\Mastering\SampleModule\Model\Item')->getCollection();
        // return $this->collectionFactory->create()->getItems();
        return $model;
    }

}