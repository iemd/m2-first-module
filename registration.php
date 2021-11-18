<?php
\Magento\Framework\Component\ComponentRegistrar::register(
\Magento\Framework\Component\ComponentRegistrar::MODULE,
'Packt_SweetTweet',
__DIR__
);
require_once __DIR__ . "/vendor/abraham/twitteroauth/autoload.php";