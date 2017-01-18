<?php
/**
 * Copyright © 2015 Mageplaza . All rights reserved.
 */
namespace Mageplaza\Thank\Block\Thank;
use Mageplaza\Thank\Block\BaseBlock;
use Magento\Checkout\Block\Onepage\Success;
class Index extends Success
{
	public $hello='Hello World';

	public function getTest(){
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$object        = $objectManager->get('Magento\Customer\Model\Session');
		$category = $object->getCustomer()->getName();
		return $category;
	}
	
}
