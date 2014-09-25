<?php

class JR_AttributeOptionImage_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getAttributeOptionImage($optionId)
    {
        $images = $this->getAttributeOptionImages();
        $image = array_key_exists($optionId, $images) ? $images[$optionId] : '';
        if ($image && (strpos($image, 'http') !== 0)) {
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
        if ($image && (strpos($image, 'http') !== 0)) {
            $image = Mage::getDesign()->getSkinUrl($image);
        }

        return $image;
    }
    
    public function getAttributeOptionThumbs()
    {
        $images = Mage::getResourceModel('eav/entity_attribute_option')->getAttributeOptionThumbs();

        return $images;
    }

    public function getAttributeOptionHex($optionId)
    {
        $aHexValues = $this->getAttributeOptionHexs();
        $vHexValue = array_key_exists($optionId, $aHexValues) ? $aHexValues[$optionId] : '';
        return $vHexValue;
    }

    public function getAttributeOptionHexs()
    {
        $aHexValues = Mage::getResourceModel('eav/entity_attribute_option')->getAttributeOptionHex();

        return $aHexValues;
    }
}