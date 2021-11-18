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

        $this->consumerKey = "T49HH2isOpdpowc3dBhXCHWbA";
        $this->consumerSecret = "vBSxrrUCf9Z9P8pD6GXDvrzk32YANtxStIeu4U47zf1wBCahOn";
        $this->accessToken = "1278199565993168897-L4S7ObJZhzZPG9KAo3VWQKb95TGNOV";
        $this->accessTokenSecret = "rt4VgVoIdufJMG0NuMWcU9sldq8yhPuiwnIJVkY6TXXMt";
        return new TwitterOAuth($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);

    }
}