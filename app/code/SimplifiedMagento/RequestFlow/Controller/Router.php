<?php


namespace SimplifiedMagento\RequestFlow\Controller;


use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;

class Router implements RouterInterface
{

    protected $actionFactory;

    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    /**
     * Match application action by request
     *
     * @param RequestInterface $request
     * @return ActionInterface
     */
    public function match(RequestInterface $request)
    {
        // return  something like this without trim function: /customer-account-login
        $path = trim($request->getPathInfo(), '/'); // with trim, we have only customer-account-login
        $paths = explode('-',$path);  // here we segment the string to differents elements
        $request->setModuleName($paths[0]);
        $request->setControllerName($paths[1]);
        $request->setActionName($paths[2]);

        return $this->actionFactory->create('Magento\Framework\App\Action\Forward', ['request'=> $request]);
    }
}