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
}