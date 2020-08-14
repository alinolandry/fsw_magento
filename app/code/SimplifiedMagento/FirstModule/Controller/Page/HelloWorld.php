<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\ObjectManager\ObjectManager;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Vault\Api\PaymentTokenManagementInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\App\Request\Http;
use SimplifiedMagento\FirstModule\Model\HeavyService;


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


    protected $productFactory;

    protected $_eventManager;

    protected $http;

    protected $heavyService;

    public function __construct(Context $context,
                                ProductFactory $productFactory,
                                PencilFactory $pencilFactory,
                                PencilInterface $pencilInterface,
                                PaymentTokenManagementInterface $paymentTokenManagement,
                                ManagerInterface $_eventManager,
                                Http $http,
                                HeavyService $heavyService
    )
    {
        $this->productFactory = $productFactory;
        $this->pencilFactory = $pencilFactory;
        $this->pencilInterface = $pencilInterface;
        $this->paymentTokenManagement = $paymentTokenManagement;
        $this->_eventManager = $_eventManager;
        $this->http = $http;
        $this->heavyService = $heavyService;

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

       // $pencil = $this->pencilFactory->create(array("name"=>"Alain", "school"=>"Montreal High School"));

       // $product = $this->productFactory->create()->load(1);
       // $product->setName("Samsung s20");

      //  $productName = $product->getIdBySku("Tenis RAY Ban-Version 2");
        // var_dump($productName);
        // echo $productName;

        // events / Observer
        // $message = new \Magento\Framework\DataObject(array("greeting" => "Good afternoon"));
        // $this->_eventManager->dispatch("custom_event", ['greeting'=>$message]);
        // echo $message->getGreeting();
        // echo "Main Function "."<br/>";

        $id = $this->http->getParam('id', 0);
        if($id == 1){
            $this->heavyService->printHeavyServiceMessage();
        }else{
            echo "Heavy Service Not used";
        }
    }


}