<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Product Shipping Rates Per Country, released under the MIT License.
 * See the LICENSE file in the project root.
 */
?>
<?php
$installer = $this;


$setId = Mage::getModel('catalog/product')->getDefaultAttributeSetId();
$installer->addAttributeGroup(Mage_Catalog_Model_Product::ENTITY, $setId, 'Product Shipping Rates', 1000);

$installer->installEntities();
