# Extension FAQ

## Can I use the extension to specify shipping rates per state, region or ZIP code?

No. Product Shipping Rates Per Country can only be used to specify shipping rates per country and per product.

## Can I use the plugin to configure shipping rates based on weight / quantity?

No. The extension can be used to configure shipping rates per product or per item. To specify the shipping rates based on weight or quantity, you can use the Table Rates shipping method.

## Is it possible to charge a fixed order shipping fee?

Yes, you can configure a fixed order shipping fee per country in the extension's config page by navigating to **System > Configuration > Shipping Methods**.

## Is it possible to show the shipping rates on the product page?

To show the shipping rates per country directly on the product page, you can add the following code snippet to the product page phtml template:

```php
<?php echo Mage::helper('plugincompany_shippingproduct')->getShippingRate($_product,'US'); ?>
```

The example above will show the product shipping rate for the United States, which of course can be changed to any country by modifying the country code.

---

[Documentation index](./README.md) · [README](../README.md) · [Online version](https://plugin.company/knowledge-base/docs/magento-product-shipping-rates-per-country/faq/)
