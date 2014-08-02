<?php
class Wsu_Themecontrol_Adminhtml_CssgenController extends Mage_Adminhtml_Controller_Action {
    public function indexAction() {
        $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/wsu_themecontrol/"));
    }
    public function gridAction() {
        $website = Mage::app()->getRequest()->getParam('website');
        $store = Mage::app()->getRequest()->getParam('store');
        $themecontrol_layout_url = $this->getUrl('adminhtml/system_config/edit/section/wsu_themecontrol_layout', array(
            'website' => $website,
            'store' => $store
        ));
        Mage::getSingleton('wsu_themecontrol/cssgen_generate')->generateCss('grid', $website, $store);
        Mage::getSingleton('wsu_themecontrol/cssgen_generate')->generateCss('layout', $website, $store);
        $this->getResponse()->setRedirect($themecontrol_layout_url);
    }
    public function designAction() {
        $website = Mage::app()->getRequest()->getParam('website');
        $store = Mage::app()->getRequest()->getParam('store');
        $themecontrol_design_url = $this->getUrl('adminhtml/system_config/edit/section/wsu_themecontrol_design', array(
            'website' => $website,
            'store' => $store
        ));
        Mage::getSingleton('wsu_themecontrol/cssgen_generate')->generateCss('design', $website, $store);
        $this->getResponse()->setRedirect($themecontrol_design_url);
    }
}