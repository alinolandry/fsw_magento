<?php
/**
 *
 * Copyright © FSW, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Mastering\SampleModule\Controller\Adminhtml\Item;


use Mastering\SampleModule\Model\ItemFactory;


class Save extends \Magento\Backend\App\Action
{
    /**
     * @var $itemFactory
     */
    private $itemFactory;

    /**
     * Save constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param ItemFactory $itemFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        ItemFactory $itemFactory
    )
    {
        $this->$itemFactory = $itemFactory;
        parent::__construct($context);
    }


    /**
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {
        $this->$itemFactory->create()->setData($this->getRequest()->getPostValue()['general'])->save();
        if (!empty($this->resultRedirectFactory)) {
            return $this->resultRedirectFactory->create()->setPath('mastering/index/index');
        }
    }
}
