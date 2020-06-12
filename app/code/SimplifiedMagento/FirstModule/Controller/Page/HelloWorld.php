<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;


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
     * HelloWorld constructor.
     * @param Context $context
     * @param PencilInterface $pencilInterface
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(Context $context,
                                PencilInterface $pencilInterface,
                                ProductRepositoryInterface $productRepository
    )
    {
        $this->pencilInterface = $pencilInterface;
        $this->productRepository = $productRepository;
        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        // echo $this->pencilInterface->getPencilType();

        echo get_class($this->productRepository);
    }


}