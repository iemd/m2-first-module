<?php

namespace Packt\SweetTweet\Block;

use Abraham\TwitterOAuth\TwitterOAuth;

class Tweets extends \Magento\Framework\View\Element\Template {

    private $consumerKey;
    private $consumerSecret;
    private $accessToken;
    private $accessTokenSecret;
     
    public function searchTweets() {

        $connection = $this->twitterDevAuth();
        $result = $connection->get("search/tweets", array("q" =>$this->getData('hashtag'), "result_type"=>"recent", "count" =>10));
        return $result->statuses;

    }
    private function twitterDevAuth() {

        $this->consumerKey = YOUR_CONSUMER_KEY;
        $this->consumerSecret = YOUR_CONSUMER_SECRET;
        $this->accessToken = YOUR_ACCESS_TOKEN;
        $this->accessTokenSecret = YOUR_ACCESS_TOKEN_SECRET;
        return new TwitterOAuth($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);

    }
}