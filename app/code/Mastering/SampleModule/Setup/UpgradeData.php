<?php
/**
 * Copyright © FSW, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Mastering\SampleModule\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;


class UpgradeData implements UpgradeDataInterface
{

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if(version_compare($context->getVersion(),'1.0.1', '<')){
            $setup->getConnection()->update(
                $setup->getTable('mastering_sample_item'),
                [
                    'description' => 'Default Desciption'
                ],
                $setup->getConnection()->quoteInto('id = ?', 1)
            );
        }
        $setup->endSetup();
    }

}
