<?php

$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$tableOption = $this->getTable('eav_attribute_option');
$installer->startSetup();

$installer->run("
ALTER TABLE `{$tableOption}`
    ADD `image` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
");

$installer->endSetup();
