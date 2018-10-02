<?php
/**
 *  Magento 2.x Magento2x_RegistrationFormClone
 *
 * @Package    Magento2x_RegistrationFormClone
 * @Developer  Abdul Matin <matinict@gmail.com>
 * @Author     Matin(https://matinict.wordpress.com/)
 * @Dependency    SSLWireless Address(https://github.com/sslcommerz)
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sslwireless\Seller\Controller\Register;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}
