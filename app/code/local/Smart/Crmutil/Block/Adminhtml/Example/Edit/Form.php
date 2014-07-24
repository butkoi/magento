<?php
/**
 * Created by PhpStorm.
 * User: ButKoi
 * Date: 7/24/14
 * Time: 12:57 AM
 */
class Smart_Crmutil_Block_Adminhtml_Example_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        if (Mage::getSingleton('adminhtml/session')->getExampleData())
        {
            $data = Mage::getSingleton('adminhtml/session')->getExamplelData();
            Mage::getSingleton('adminhtml/session')->getExampleData(null);
        }
        elseif (Mage::registry('example_data'))
        {
            $data = Mage::registry('example_data')->getData();
        }
        else
        {
            $data = array();
        }
        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method' => 'post',
            'enctype' => 'multipart/form-data',
        ));

        $form->setUseContainer(true);

        $this->setForm($form);

        $fieldset = $form->addFieldset('example_form', array(
            'legend' =>Mage::helper('crmutil')->__('Config Crm module')
        ));

        $fieldset->addField('config', 'select', array(
            'label'     => Mage::helper('crmutil')->__('Enable/Disable Crm module'),
            'name'      => 'level',
            'values'    => array(
                array(
                    'value'     => 1,
                    'label'     => Mage::helper('crmutil')->__('yes'),
                ),

                array(
                    'value'     => 2,
                    'label'     => Mage::helper('crmutil')->__('no'),
                ),
            ),
        ));
        $fieldset->addField('zip_from', 'text', array(
            'name'      => 'zip_from',
            'label'     => Mage::helper('tax')->__('Range From'),
            'required'  => true,
            'maxlength' => 9,
            'class'     => 'validate-digits'
        ));

        $this->setChild(
            'form_after',
            $this->getLayout()->createBlock('adminhtml/widget_form_element_dependence')
                ->addFieldMap('config', 'config')
                ->addFieldMap('zip_from', 'zip_from')
                ->addFieldDependence('zip_from', 'config', '1')
        );
        $form->setValues($data);

        return parent::_prepareForm();
    }
}