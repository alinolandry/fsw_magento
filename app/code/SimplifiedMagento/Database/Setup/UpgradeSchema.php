<?php
/**
 * Copyright © FSW, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace SimplifiedMagento\Database\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\DB\Ddl\Table;


class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if(version_compare($context->getVersion(), '0.0.2', '<')){
            $setup->getConnection()->addColumn(
                $setup->getTable('affiliate_member'),
                'phone_number',
                [
                    'type' => Table::TYPE_TEXT,
                    'nullable' => false,
                    'comment' => 'PHONE NUMBER OF MEMBER'
                ]
            );
        }

        $setup->endSetup();
    }
}
