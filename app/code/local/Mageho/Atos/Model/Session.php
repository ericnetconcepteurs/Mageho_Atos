<?php
/*
 * Mageho
 * Ilan PARMENTIER
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is available
 * through the world-wide-web at this URL: http://www.opensource.org/licenses/OSL-3.0
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to contact@mageho.com so we can send you a copy immediately.
 *
 * @category     Mageho
 * @package     Mageho_Atos
 * @author       Mageho, Ilan PARMENTIER <contact@mageho.com>
 * @copyright   Copyright (c) 2014  Mageho (http://www.mageho.com)
 * @license      http://www.opensource.org/licenses/OSL-3.0  Open Software License (OSL 3.0)
 */

class Mageho_Atos_Model_Session extends Mage_Core_Model_Session_Abstract
{
    protected $_quoteId;
    
    public function __construct()
    {
        $this->init('atos');
    }

    /**
     * Unset all data associated with object
     */
    public function unsetAll() 
    {
        parent::unsetAll();
        $this->_quoteId = null;
    }
    
    protected function _getQuoteIdKey() {
        return 'quote_id_' . Mage::app()->getStore()->getWebsiteId();
    }

    public function setQuoteId($quoteId) {
        $this->setData($this->_getQuoteIdKey(), $quoteId);
    }

    public function getQuoteId() {
        return $this->getData($this->_getQuoteIdKey());
    }
}
