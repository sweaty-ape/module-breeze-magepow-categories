<?php

namespace SweatyApe\BreezeMagepowCategories\Plugin;

class Categories
{
    private $helper;

    public function __construct(
        \Swissup\Breeze\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }

    public function afterGetTemplate(
        \Magepow\Categories\Block\Categories $subject,
        $result
    ) {
        if (!$this->helper->isEnabled()) {
            return $result;
        }

        return 'SweatyApe_BreezeMagepowCategories::categories.phtml';
    }
}
