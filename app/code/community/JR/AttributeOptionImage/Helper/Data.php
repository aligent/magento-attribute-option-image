<?php

class JR_AttributeOptionImage_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getAttributeOptionImage($optionId)
    {
        $images = $this->getAttributeOptionImages();
        $image = array_key_exists($optionId, $images) ? $images[$optionId] : '';
        if ($image && false === strpos($image, 'http://')) {
            $image = Mage::getDesign()->getSkinUrl($image);
        }

        return $image;
    }

    public function getAttributeOptionImages()
    {
        $images = Mage::getResourceModel('eav/entity_attribute_option')->getAttributeOptionImages();

        return $images;
    }
    
    public function getAttributeOptionThumb($optionId)
    {
        $images = $this->getAttributeOptionThumbs();
        $image = array_key_exists($optionId, $images) ? $images[$optionId] : '';
        if ($image && false === strpos($image, 'http://')) {
            $image = Mage::getDesign()->getSkinUrl($image);
        }

        return $image;
    }
    
    public function getAttributeOptionThumbs()
    {
        $images = Mage::getResourceModel('eav/entity_attribute_option')->getAttributeOptionThumbs();

        return $images;
    }
}