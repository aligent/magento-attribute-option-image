<?php

$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$setup->getConnection()->addColumn(
    $setup->getTable('catalog/eav_attribute'),
    'enable_option_image',
    array(
        'type'  =>  Varien_Db_Ddl_Table::TYPE_SMALLINT,
        'nullable'  =>  true,
        'unsigned'  =>  true,
        'comment'   =>  'Enable Option Image per attribute'
    )
);

$installer->endSetup();
