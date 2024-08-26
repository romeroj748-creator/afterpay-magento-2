<?php declare(strict_types=1);

namespace Afterpay\Afterpay\Block\Cta;

use Afterpay\Afterpay\Model\Config;
use Magento\Framework\View\Element\Template;

class Product extends Template
{
    private Config $config;

    public function __construct(
        Template\Context $context,
        Config           $config,
        array            $data = []
    ) {
        parent::__construct($context, $data);
        $this->config = $config;
    }

    protected function _toHtml()
    {
        if ($this->config->getIsEnableCtaProductPage() && !$this->config->getIsEnableProductPageHeadless()) {
            return parent::_toHtml();
        }

        return '';
    }
}
