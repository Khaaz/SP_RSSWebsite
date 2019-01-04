<?php

namespace DAL_Class;

/**
 * DAL_Class Rss
 * @package DAL_Class
 */
class Rss {
    private $RssUrl;
    private $WebsiteName;
    private $SiteUrl;

    public function __construct(string $RssUrl, string $WebsiteName, string $SiteUrl) {
        $this->RssUrl = $RssUrl;
        $this->WebsiteName = $WebsiteName;
        $this->SiteUrl = $SiteUrl;
    }

    /**
     * @return string
     */
    public function getRssUrl(): string
    {
        return $this->RssUrl;
    }

    /**
     * @return string
     */
    public function getWebsiteName(): string
    {
        return $this->WebsiteName;
    }

    /**
     * @return string
     */
    public function getSiteUrl(): string
    {
        return $this->SiteUrl;
    }
}