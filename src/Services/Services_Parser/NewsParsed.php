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
    public $nbClics;

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
        preg_match('/^(http(s)?:\/\/)?(www\.)?([a-zA-Z0-9\.]*)\//', $website, $matches);
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
            $this->title = $title ? $title : 'No title available.';
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
            $this->description = $description ? $description : 'No description available.';
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

        if (!$this->date) {
            $this->date = 'No date available.';
        }
    }

    public function cleanFillEmpty() {

        $this->url = \Utility\Cleaner::Clean_url($this->url);
        $this->nbClics = 0;

        if (!isset($this->website)) {
            $this->website = 'No website available.';
        } else {
            $this->website = \Utility\Cleaner::Clean_websiteName($this->website);
        }

        if (!isset($this->title)) {
            $this->title = 'No title available.';
        } else {
            $this->title = \Utility\Cleaner::Clean_string($this->title);
        }

        if (!$this->description) {
            $this->description = 'No description available.';
        } else {
            $this->description = \Utility\Cleaner::Clean_string($this->description);
        }

        if (!$this->date) {
            $published_date = new DateTime('now');
            $this->date = $published_date->format('Y-m-d  H:i:s');
        }
    }
}