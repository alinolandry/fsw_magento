<?php


namespace SimplifiedMagento\Database\Model;

use Magento\Catalog\Model\AbstractModel;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;

class AffiliateMember extends AbstractModel
{
    protected function _construct()
    {
      $this->_init(AffiliateMemberResource::class);
    }

}