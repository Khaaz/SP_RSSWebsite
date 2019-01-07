<?php

namespace Services;

use PDOException;
/**
 * Class XmlService
 * @package Services
 */
class XmlService {

    private $parser;

    private $rssList;

    public function __construct() {
        $this->parser = new \Services_Parser\XmlParser();

        $this->rssList = array();
    }

    /**
     * Function that runs everytime the RSS list needs to be updated
     */
    public function updateRssList() {
        $rssList = \Models\ModelAdmin::getRss();

        foreach($rssList as $rss) {
            $this->rssList[] = $rss->getRssUrl();
        }
    }

    /**
     * Function that runs everytime the news DB need to be updated
     *
     * Can be be optimized with by updating Rss list on another timer (making the 2 process being separated)
     */
    public function run() {
        // retrieve DB for link list
        $this->updateRssList();

        foreach($this->rssList as $rss) {

            // Parse rss feed
            $this->parser->parse($rss);
            $result = $this->parser->getResult(); // result is an array of newsParsed
            // Create a list of News from parsed News
            $news = \DAL_Factory\NewsFactory::createNewsFromParsed($result);

            // Update de Database
            foreach($news as $n) {
                try {
                    \Models\ModelService::addNews($n);
                } catch (PDOException $e) {
                    echo $e;
                    // do nothing - means the news is already in the DB
                    // eventually log the error?
                }
            }
        }
    }
}