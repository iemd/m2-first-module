<?php

namespace Packt\SweetTweet\Block;

class Index extends \Magento\Framework\View\Element\Template {

    public function getMagento2() {
        return $this->getData('urlMagento2');
    }

    public function getMagentoDev() {
        return $this->getData('urlMagentoDev');
    }

    public function getMagentoLive() {
        return $this->getData('urlMagentoLive');
    }
}