<?php
/**
 * Copyright © 2015 Mageplaza . All rights reserved.
 */
namespace Mageplaza\Thank\Block\Thank;
use Mageplaza\Thank\Block\BaseBlock;
use Magento\CatalogWidget\Block\Product\ProductsList;
class Product extends ProductsList
{
	public function getProductCollection(){

		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$object        = $objectManager->get('Magento\Catalog\Model\CategoryFactory');
		$category = $object->create()->load(2);
		return $category->getProductCollection()->addAttributeToSelect('*');
		//return 3;
	}
	
}
