<?php
/**
 * Google Tag Manager
 *
 * Copyright © 2017 MagePal. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagePal\GoogleTagManager\Block\Data;

use Magento\Framework\View\Element\Template\Context;
use MagePal\GoogleTagManager\Model\Cart as GtmCartModel;
/**
 * Block : Datalayer for cart view page
 *
 * @package MagePal\GoogleTagManager
 * @class   Customer
 */
class Cart extends \Magento\Framework\View\Element\Template
{

    /**
     * @var GtmCartModel
     */
    protected $gtmCart;


    /**
     * @param Context $context
     * @param GtmCartModel $gtmCart
     */
    public function __construct(
        Context $context,
        GtmCartModel $gtmCart
    )
    {
        $this->gtmCart = $gtmCart;
    }


    /**
     * Add product data to datalayer
     *
     * @return $this
     */
    function _prepareLayout()
    {
        /** @var $tm \MagePal\GoogleTagManager\Block\DataLayer */
        $tm = $this->getParentBlock();

        $tm->addVariable('cart', $this->gtmCart->getCart());
    }

}
