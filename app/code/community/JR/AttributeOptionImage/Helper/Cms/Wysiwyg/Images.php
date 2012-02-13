<?php

class JR_AttributeOptionImage_Helper_Cms_Wysiwyg_Images extends Mage_Cms_Helper_Wysiwyg_Images
{
    public function isUsingStaticUrlsAllowed()
    {
        if (Mage::getSingleton('adminhtml/session')->getStaticUrlsAllowed()) {
            return true;
        }

        return parent::isUsingStaticUrlsAllowed();
    }
}