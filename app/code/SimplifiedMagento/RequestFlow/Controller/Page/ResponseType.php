<?php


namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\View\Result\PageFactory;



class ResponseType extends Action
{

    protected $pageFactory;

    protected $jsonFactory;

    public function __construct(Context $context, PageFactory $pageFactory, JsonFactory $jsonFactory)
    {
        $this->pageFactory = $pageFactory;

        $this->jsonFactory = $jsonFactory;

        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        return $this->jsonFactory->create()->setData(['key' => 'value', 'key 2' => ['item1' => 'better', 'item2' => 'sad']]);
      // return $this->pageFactory->create();
    }
}