<?php

$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$setup->getConnection()->changeColumn(
    $setup->getTable('catalog/eav_attribute'),
    'option_image',
    'enable_option_image',
    array(
        'type'  =>  Varien_Db_Ddl_Table::TYPE_SMALLINT,
        'nullable'  =>  true,
        'unsigned'  =>  true,
        'comment'   =>  'Enable Option Image per attribute'
    )
);
//$setup->getConnection()->addColumn(
//    $setup->getTable('catalog/eav_attribute'),
//    'has_option_image',
//    array(
//        'type'  =>  Varien_Db_Ddl_Table::TYPE_BOOLEAN,
//        'nullable'  => true,
//        'comment'   =>  'Enable Option Image per attribute'
//    )
//);

$installer->endSetup();
