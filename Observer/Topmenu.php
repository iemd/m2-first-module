<?php

namespace Packt\SweetTweet\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Data\Tree\Node;
use Magento\Framework\Event\ObserverInterface;

class Topmenu implements ObserverInterface {
    /**
    * @param EventObserver $observer
    * @return $this
    */
    public function execute(EventObserver $observer)
    {
        $urlInterface = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\UrlInterface');
        $active = strpos($urlInterface->getCurrentUrl(), "sweettweet");
        $menu = $observer->getMenu();
        $tree = $menu->getTree();
        $data = [
            'name' => __("SweetTweet"),
            'id' => 'tweetsmenu',
            'url' => $urlInterface->getBaseUrl() . 'sweettweet',
            'is_active' => $active
        ];
        $node = new Node($data, 'id', $tree, $menu);
        $menu->addChild($node);
        return $this;
    }
}