<?php
/**
 * Woopra plugin for Magento 
 *
 * @category    design_default
 * @package     Yireo_Woopra
 * @author      Yireo (http://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (http://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

class Yireo_Woopra_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getApiKey()
    {
        return Mage::getStoreConfig('woopra/settings/website_id');
    }

    public function enabled()
    {
        return (bool)Mage::getStoreConfig('woopra/settings/active');
    }

    public function test()
    {
        return (bool)Mage::getStoreConfig('woopra/settings/test');
    }
}
