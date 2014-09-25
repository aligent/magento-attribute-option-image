<?php

class JR_AttributeOptionImage_Model_Eav_Entity_Attribute_Source_Table extends Mage_Eav_Model_Entity_Attribute_Source_Table
{
    public function getOptionImage($value)
    {
        $options = Mage::getResourceModel('eav/entity_attribute_option_collection')
            ->setPositionOrder('asc')
            ->setAttributeFilter($this->getAttribute()->getId())
            ->setStoreFilter($this->getAttribute()->getStoreId())
            ->load()
            ->toArray();
        foreach ($options['items'] as $item) {
            if ($item['option_id'] == $value) {
                return $item['image'];
            }
        }
        return false;
    }
    
    public function getOptionThumb($value)
    {
        $options = Mage::getResourceModel('eav/entity_attribute_option_collection')
            ->setPositionOrder('asc')
            ->setAttributeFilter($this->getAttribute()->getId())
            ->setStoreFilter($this->getAttribute()->getStoreId())
            ->load()
            ->toArray();
        foreach ($options['items'] as $item) {
            if ($item['option_id'] == $value) {
                return $item['thumb'];
            }
        }
        return false;
    }

    public function getOptionHex($value)
    {
        $options = Mage::getResourceModel('eav/entity_attribute_option_collection')
            ->setPositionOrder('asc')
            ->setAttributeFilter($this->getAttribute()->getId())
            ->setStoreFilter($this->getAttribute()->getStoreId())
            ->load()
            ->toArray();
        foreach ($options['items'] as $item) {
            if ($item['option_id'] == $value) {
                return $item['hex'];
            }
        }
        return false;
    }

}