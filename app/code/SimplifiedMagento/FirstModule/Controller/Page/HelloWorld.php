<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\ObjectManager\ObjectManager;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Vault\Api\PaymentTokenManagementInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;


/**
 * Class HelloWorld
 * @package SimplifiedMagento\FirstModule\Controller\Page
 */
class HelloWorld extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PencilInterface
     */
    protected $pencilInterface;

    /**
     * @var ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var PaymentTokenManagementInterface
     */
    protected $paymentTokenManagement;

    /**
     * @var PencilFactory
     */
    protected $pencilFactory;


    public function __construct(Context $context,
                                PencilFactory $pencilFactory,
                                PencilInterface $pencilInterface,
                                PaymentTokenManagementInterface $paymentTokenManagement
    )
    {
        $this->pencilFactory = $pencilFactory;
        $this->pencilInterface = $pencilInterface;
        $this->paymentTokenManagement = $paymentTokenManagement;
        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        // echo $this->pencilInterface->getPencilType();

        // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        // $student = $objectManager->create('\SimplifiedMagento\FirstModule\Model\Student');
        // $pencil = $objectManager->create('\SimplifiedMagento\FirstModule\Model\Pencil');
       // $book = $objectManager->create('\SimplifiedMagento\FirstModule\Model\Book');

        $pencil = $this->pencilFactory->create(array("name"=>"Alain", "school"=>"Montreal High School"));
        var_dump($pencil);
    }


}