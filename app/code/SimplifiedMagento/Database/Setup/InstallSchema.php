<?php


namespace SimplifiedMagento\Database\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{

    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     * @throws \Zend_Db_Exception
     */

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $table = $setup->getConnection()
                ->newTable($setup->getTable('affiliate_member'))
                ->addColumn(
                     'entity_id',
                     Table::TYPE_INTEGER,
                         null,
                         ['identity' => true, 'nullable' => false, 'primary' => true],
                         'MEMBER ID'
                 )
                ->addColumn(
                    'name',
                     Table::TYPE_TEXT,
                     255,
                     ['nullable'=> true],
                     'NAME OF MEMBER'
                 )
                ->addColumn(
                     'address',
                     Table::TYPE_TEXT,
                     255,
                     ['nullable' => true],
                     'ADDRESS OF MEMBER'
                 )
                ->addColumn(
                     'status',
                     Table::TYPE_BOOLEAN,
                     10,
                     ['nullable' => true, 'default' => false],
                     'STATUS'
                 )
                ->addColumn(
                     'created_at',
                     Table::TYPE_TIMESTAMP,
                     null,
                     ['nullable' => true, 'default' => Table::TIMESTAMP_INIT],
                     'TIME CREADTED'
                 )
                ->addColumn(
                     'updated_at',
                     Table::TYPE_TIMESTAMP,
                     null,
                     ['nullable' => true, 'default' => Table::TIMESTAMP_INIT_UPDATE],
                     'TIME UPDATED'
                 )
                ->setComment(
                     'Affiliate Member Table'
                );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}