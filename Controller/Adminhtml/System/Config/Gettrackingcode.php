<?php
namespace InterSales\Overheat\Controller\Adminhtml\System\Config;
class Gettrackingcode extends \Magento\Backend\App\Action
{
    protected $resultJsonFactory;
    protected $helper;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \InterSales\Overheat\Helper\Data $helper
    )
    {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->helper = $helper;
        parent::__construct($context);
    }

    protected function _getSyncSingleton()
    {
        return $this->_objectManager->get('InterSales\Overheat\Model\Gateway');
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('InterSales_Overheat::config');
    }

    public function execute()
    {
        $trackingCode = '';
        $errorMessage = '';
        $validateCode = $this->getRequest()->getParam('validate_code');

        if ($validateCode != '')
        {
            $trackingCode = $this->_getSyncSingleton()->getTrackingCode($validateCode);
        }
        else
        {
            $errorMessage = __('Api Key is required');
        }

        if ($trackingCode == '')
        {
            $errorMessage = __('Api Key is not valid');
        }

        $result = $this->resultJsonFactory->create();
        return $result->setData(array(
            'errorMessage' => $errorMessage,
            'trackingCode' => $trackingCode
        ));
    }
}
