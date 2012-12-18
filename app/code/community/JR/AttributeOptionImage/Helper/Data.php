<?php

class JR_AttributeOptionImage_Helper_Data extends Mage_Core_Helper_Abstract
{
    
    protected $images = null;
    protected $thumbs = null;
    
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
        if (is_null($this->images)) {
            $this->images = Mage::getResourceModel('eav/entity_attribute_option')->getAttributeOptionImages();
        }
        return $this->images;
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
        if (is_null($this->thumbs)) {
            $this->thumbs = Mage::getResourceModel('eav/entity_attribute_option')->getAttributeOptionThumbs();
        }
        return $this->thumbs;
    }
}