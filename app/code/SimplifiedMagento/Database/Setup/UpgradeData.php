<?php
/**
 * Copyright © FSW, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace SimplifiedMagento\Database\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;


class UpgradeData implements UpgradeDataInterface
{

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if(version_compare($context->getVersion(),'0.0.3', '<')){
            $setup->getConnection()->insert(
                $setup->getTable('affiliate_member'),
                [
                    'name' => 'Laberge',
                    'address' => '75 Quebec',
                    'status' => true,
                    'phone_number' => '895653545'
                ]
            );
        }
        $setup->endSetup();
    }

}
