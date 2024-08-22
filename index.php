<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
<<<<<<< HEAD
namespace gitCheckout Magento\Backend\Controller\Adminhtml\Auth;
=======
 
die("happy");
echo "happy";
namespace Magento\Backend\Controller\Adminhtml\Auth;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
    ) {
        parent::__construct($context);
        $this->resultRawFactory = $resultRawFactory;
    }

    /**
     * Retrieve response for deniedIframeAction()
     *
     * @return string
     */
    protected function _getDeniedIframe()
    {
        return '<script>parent.window.location = \''
            . $this->_helper->getHomePageUrl() . '\';</script>';
    }

    /**
     * Denied IFrame action
     *
     * @return \Magento\Framework\Controller\Result\Raw
     */
    public function foobar()
    {
        /** @var \Magento\Framework\Controller\Result\Raw $resultRaw */
        $resultRaw = $this->resultRawFactory->create();
        return $resultRaw->setContents($this->_getDeniedIframe());
    }
}
