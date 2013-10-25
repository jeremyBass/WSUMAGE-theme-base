<?php
/**
 * @package		Wsu_ThemeControll
 * @author		Wsu
 * @copyright	Copyright 2012 - 2013 Wsu
 */
$installer = $this;
$installer->startSetup();

//WYSIWYG hidden by default
Mage::getConfig()->saveConfig('cms/wysiwyg/enabled', 'hidden');

Mage::getSingleton('themecontroll/cssgen_generator')->generateCss('grid',   NULL, NULL);
Mage::getSingleton('themecontroll/cssgen_generator')->generateCss('layout', NULL, NULL);
Mage::getSingleton('themecontroll/cssgen_generator')->generateCss('design', NULL, NULL);

$installer->endSetup();
