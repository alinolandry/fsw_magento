<?php
/**
 * Copyright © FSW, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace SimplifiedMagento\Database\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{


    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            [
                'name' => 'Alex',
                'address' => '25 Quebec',
                'status' => true
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            [
                'name' => 'Landry ',
                'address' => '6658 Montreal',
                'status' => true
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            [
                'name' => 'Joel',
                'address' => '589 Trois Rivière',
                'status' => true
            ]
        );

        $setup->endSetup();
    }
}