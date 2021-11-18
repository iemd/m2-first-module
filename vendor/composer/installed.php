<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0',
        'version' => '1.0.0.0',
        'type' => 'magento2-module',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'packt/sweet-tweet',
        'dev' => true,
    ),
    'versions' => array(
        'abraham/twitteroauth' => array(
            'pretty_version' => '0.6.6',
            'version' => '0.6.6.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../abraham/twitteroauth',
            'aliases' => array(),
            'reference' => 'fc0766220c79087ac8178625d34e88ca29160d5b',
            'dev_requirement' => false,
        ),
        'packt/sweet-tweet' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'type' => 'magento2-module',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
    ),
);
