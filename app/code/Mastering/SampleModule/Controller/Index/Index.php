<?php


namespace Mastering\SampleModule\Controller\Index;


use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Factory;
use Magento\Framework\Controller\ResultFactory;


class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * @inheritDoc
     */
    public function execute()
    {

        // $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
       // $result->setContents('Hello Boy');
       // return $result;
         return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
       // $this->_view->loadLayout();
       // $this->_view->renderLayout();
    }
}