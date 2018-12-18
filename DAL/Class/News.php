<?php

/**
 * Class News
 */
class News {

    private $url;
    private $title;
    private $website;
    private $date;

    public function __construct(string $url, string $title, string $website, string $date) {
        $this->url = $url;
        $this->title = $title;
        $this->website = $website;
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
}