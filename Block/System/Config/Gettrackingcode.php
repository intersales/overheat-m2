<?php
namespace InterSales\Overheat\Block\System\Config;
class Gettrackingcode extends \Magento\Config\Block\System\Config\Form\Field
{
    const TrackCode_TEMPLATE = 'InterSales_Overheat::system/config/gettrackingcode.phtml';

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if (!$this->getTemplate())
        {
            $this->setTemplate(static::TrackCode_TEMPLATE);
        }
        return $this;
    }

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        // Remove scope label
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    public function getAjaxUrl()
    {

        return $this->getUrl('intersales_overheat/system_config/gettrackingcode');
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $this->addData(array(
            'button_label' => __('Get Track Code'),
            'html_id' => $element->getHtmlId()
        ));

        return $this->_toHtml();
    }
}