<?php

namespace Services_Parser;

use DateTime;

/**
 * DAL_Class NewsParsed
 * @package Services_Parser
 */
class NewsParsed {

    public $url;
    public $website;
    public $title;
    public $description;
    public $date;

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website)
    {
        preg_match('/^(http(s)?:\/\/)?(www\.)?([a-zA-Z]*\.[a-z]{2,8})/', $website, $matches);
        $this->website = $matches[4];
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        if ($this->title) {
            $this->title = $this->title.$title;
        } else {
            $this->title = $title;
        }
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        if ($this->description) {
            $this->description = $this->description.$description;
        } else {
            $this->description = $description;
        }
    }

    /**
     * @param mixed $date
     * @throws
     */
    public function setDate($date)
    {
        try {
            $published_date = new DateTime($date);
        } catch (\Exception $e) {
            $published_date = new DateTime('now');
        }
        $this->date = $published_date->format('Y-m-d  H:i:s');
    }
}