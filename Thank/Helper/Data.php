<?php
/**
 * Copyright © 2015 Mageplaza . All rights reserved.
 */
namespace Mageplaza\GoogleTagManager\Helper;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	const XML_PATH_GENERAL_ENABLED = 'googletagmanager/general/is_enabled';
    const XML_PATH_GENERAL_TAG_ID = 'googletagmanager/general/tag_id';
	/**
     * @param \Magento\Framework\App\Helper\Context $context
     */
	public function __construct(\Magento\Framework\App\Helper\Context $context
	) {
		parent::__construct($context);
	}

	public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
    public function isEnabled($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_GENERAL_ENABLED, $storeId);

    }
    public function getTagId($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_GENERAL_TAG_ID, $storeId);

    }
}