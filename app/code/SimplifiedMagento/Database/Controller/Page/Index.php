<?php


namespace SimplifiedMagento\Database\Controller\Page;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;



class Index extends Action
{
    protected $affiliateMemberFactory;
    /**
     * Index constructor.
     */
    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
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
       $affiliateMember = $this->affiliateMemberFactory->create();

       // update datas of member who have id 1
        $member = $affiliateMember->load(1);
        $member->setAddress("new update address");
        $member->save();

        // create a new data
        // $affiliateMember->addData(['name' => 'New Boy', 'address' => 'New Boy Address', 'status' => false, 'phone_number' => '2464654654']);
        // $affiliateMember->save();

        // delete datas of member who have id 5
         // $member = $affiliateMember->load(5);
         // $member->delete();
          var_dump($member->getData());
    }
}