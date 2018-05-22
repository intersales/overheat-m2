<?php

namespace InterSales\Overheat\Helper;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    const XML_PATH_API_KEY = 'intersales_overheat/general/apiKey';
    const XML_PATH_IS_ENABLED = 'intersales_overheat/general/isEnableOverheat';
    const XML_PATH_Tracking_Code = 'intersales_overheat/general/jsTrackingCode';

    public function __construct(\Magento\Framework\App\Helper\Context $context)
    {
        parent::__construct($context);
    }

    public function hasTrackingCode()
    {
        return $this->getApiKey() != '';
    }

    public function getApiKey()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_API_KEY, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getTrackingCode()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_Tracking_Code, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function isActive()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_IS_ENABLED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}