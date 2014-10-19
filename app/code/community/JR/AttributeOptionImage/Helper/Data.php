<?php

class JR_AttributeOptionImage_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * Having Solr in use for Layered Navigation messes with attributes (see below).
     *
     * @author Jonathan Day <jonathan@aligent.com.au>
     * @return bool
     */
    public function isSolrActive(){
        if(class_exists(Mage::getConfig()->getHelperClassName('enterprise_search'),false) && Mage::helper('enterprise_search')->getIsEngineAvailableForNavigation()){
            return true;
        }
        return false;
    }

    /**
     * When Solr is used for Layered Navigation it returns the option Label instead of the Option Id. Given that "Black" could be an option label on multiple attributes,
     * we have to load the attribute to determine the option_id to therefore load the linked image/thumb/hex. blech.
     *
     * @author Jonathan Day <jonathan@aligent.com.au>
     * @param $vAttributeLabel
     * @param $vAttributeIdentifier
     * @return int
     * @throws Mage_Core_Exception
     */
    public function getAttributeOptionIdFromLabel($vAttributeLabel, $vAttributeIdentifier){
        if(is_string($vAttributeIdentifier)){
            $oAttribute = Mage::getModel('catalog/resource_eav_attribute')->loadByCode(Mage_Catalog_Model_Product::ENTITY, $vAttributeIdentifier);
        }
        else {
            $oAttribute = Mage::getModel('catalog/resource_eav_attribute')->load($vAttributeIdentifier);
        }
        $iResult = $oAttribute->getSource()->getOptionId($vAttributeLabel);
        return $iResult;
    }

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