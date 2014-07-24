<?php
/**
 * Created by PhpStorm.
 * User: ButKoi
 * Date: 7/23/14
 * Time: 11:08 PM
 */
 class Smart_Crmutil_Adminhtml_CrmutilController extends Mage_Adminhtml_Controller_Action{
     public function indexAction()
     {

         $this->loadLayout();
         $this->renderLayout();
     }

     public function newAction()
     {
         $this->_forward('edit');
     }

     public function editAction()
     {
/*         $id = $this->getRequest()->getParam('id', null);
         $model = Mage::getModel('awesome/example');
         if ($id) {
             $model->load((int) $id);
             if ($model->getId()) {
                 $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
                 if ($data) {
                     $model->setData($data)->setId($id);
                 }
             } else {
                 Mage::getSingleton('adminhtml/session')->addError(Mage::helper('awesome')->__('Example does not exist'));
                 $this->_redirect('');
             }
         }
         Mage::register('example_data', $model);*/

         $this->loadLayout();
         $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
         $this->renderLayout();
     }

     public function saveAction()
     {
        /* if ($data = $this->getRequest()->getPost())
         {
             $model = Mage::getModel('awesome/example');
             $id = $this->getRequest()->getParam('id');
             if ($id) {
                $model->load($id);
             }
             $model->setData($data);

             Mage::getSingleton('adminhtml/session')->setFormData($data);
            try {
                 if ($id) {
                    $model->setId($id);
                }
                 $model->save();

                if (!$model->getId()) {
                   Mage::throwException(Mage::helper('awesome')->__('Error saving example'));
                }

                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('awesome')->__('Example was successfully saved.'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);

                 The following line decides if it is a "save" or "save and continue"
                 if ($this->getRequest()->getParam('back')) {
                     $this->_redirect('edit', array('id' => $model->getId()));
                 } else {
                    $this->_redirect('');
                 }

             } catch (Exception $e) {
                 Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                 if ($model && $model->getId()) {
                    $this->_redirect('edit', array('id' => $model->getId()));
                 } else {
                    $this->_redirect('');
                }
             }

             return;
         }
        Mage::getSingleton('adminhtml/session')->addError(Mage::helper('awesome')->__('No data found to save'));*/
         $this->_redirect('*/*/');
     }

/*     public function deleteAction()
     {
         if ($id = $this->getRequest()->getParam('id')) {
             try {
                 $model = Mage::getModel('awesome/example');
                 $model->setId($id);
                 $model->delete();
                 Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('awesome')->__('The example has been deleted.'));
                 $this->_redirect('');
                 return;
             }
             catch (Exception $e) {
                 Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                 $this->_redirect('edit', array('id' => $this->getRequest()->getParam('id')));
                 return;
             }
         }
         Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Unable to find the example to delete.'));
         $this->_redirect('');
     }
  	}*/
 }
  ?>