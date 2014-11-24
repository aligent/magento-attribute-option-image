<?php

class JR_AttributeOptionImage_Model_Eav_Mysql4_Entity_Attribute_Option extends Mage_Eav_Model_Mysql4_Entity_Attribute_Option
{
    public function getAttributeOptionImages()
    {
        return $this->getAttributeColumnValue('image');
    }
    
    public function getAttributeOptionThumbs()
    {
        return $this->getAttributeColumnValue('thumb');
    }

    public function getAttributeOptionHex()
    {
        return $this->getAttributeColumnValue('hex');
    }
    public function getAttributeColumnValue($columnName)
    {
        /**
         * Reason using static instead of $_property because resource is not singleton
         * and query is called multiple times on same table with same arguments
         * because multiple instances exist of that option
         */
        static $return = array();
        if (isset($return[$columnName])){
            return $return[$columnName];
        }

        $select = $this->getReadConnection()
            ->select()
            ->from($this->getTable('eav/attribute_option'), array('option_id', $columnName))
            ->where("$columnName != ''");

        $return[$columnName] = $this->getReadConnection()->fetchPairs($select);
        return $return[$columnName];
    }
}