<?php
/**
 * Copyright (c) 2014-2026 Plugin Company
 *
 * This file is part of Product Shipping Rates Per Country, released under the MIT License.
 * See the LICENSE file in the project root.
 */
class Plugincompany_Shippingproduct_Block_Preset_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _getModel(){
        return Mage::registry('current_preset');
    }

    protected function _getHelper(){
        return Mage::helper('plugincompany_shippingproduct');
    }

    protected function _getModelTitle(){
        return 'Product Shipping Rate Per Country Preset';
    }

    protected function _prepareForm()
    {
        $form   = new Varien_Data_Form(array(
            'id'        => 'edit_form',
            'action'    => $this->getUrl('*/*/save',array('id'=>$this->getRequest()->getParam('id'))),
            'method'    => 'post'
        ));

        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }

}
