<?php

class JR_AttributeOptionImage_Model_Observer
{
    public function updateLayout()
    {
        $layout = Mage::getSingleton('core/layout');
        $layout->getBlock('head')
            ->setCanLoadExtJs(true)
            ->addJs('mage/adminhtml/variables.js')
            ->addJs('mage/adminhtml/wysiwyg/widget.js')
            ->addJs('lib/flex.js')
            ->addJs('lib/FABridge.js')
            ->addJs('mage/adminhtml/flexuploader.js')
            ->addJs('mage/adminhtml/browser.js')
            ->addJs('prototype/window.js')
            ->addItem('js_css', 'prototype/windows/themes/default.css')
            ->addItem('js_css', 'prototype/windows/themes/magento.css');
    }

    public function addAttributeOptionImageFlagProperty($oObserver) {
        $oFieldset = $oObserver->getForm()->getElement('base_fieldset');
        $oFieldset->addField('enable_option_image', 'select', array(
            'name' => 'enable_option_image',
            'label' => Mage::helper('catalog')->__('Has Option Image'),
            'values' => Mage::getModel('adminhtml/system_config_source_yesno')->toOptionArray(),
        ), '-');
    }

}