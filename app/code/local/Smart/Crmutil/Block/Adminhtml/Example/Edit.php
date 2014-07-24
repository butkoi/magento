<?php
/**
 * Created by PhpStorm.
 * User: ButKoi
 * Date: 7/24/14
 * Time: 12:54 AM
 */
class Smart_Crmutil_Block_Adminhtml_Example_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();

        $this->_objectId = 'id';
        $this->_blockGroup = 'crmutil';
        $this->_controller = 'adminhtml_example';
        $this->_mode = 'edit';
/*
        $this->_addButton('save_config', array(
            'label' => Mage::helper('adminhtml')->__('Save Config'),
            'onclick' => 'saveAndContinueEdit()',
            'class' => 'save',
        ), -100);
        //$this->_updateButton('save', 'label', Mage::helper('crmutil')->__('Save Example'));

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('form_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'edit_form');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'edit_form');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";*/
    }

    public function getHeaderText()
    {
        if (Mage::registry('example_data') && Mage::registry('example_data')->getId())
        {
            return Mage::helper('crmutil')->__('Edit Example "%s"', $this->htmlEscape(Mage::registry('example_data')->getName()));
        } else {
            return Mage::helper('crmutil')->__('CRM module configuration');
        }
    }

}