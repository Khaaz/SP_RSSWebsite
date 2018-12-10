<?php
/**
 * Created by PhpStorm.
 * User: khaaz
 * Date: 12/4/18
 * Time: 11:26 PM
 */

class News {

    private $url;
    private $titre;
    private $siteProvenance;
    private $date;

    public function __construct(String $url, String $titre, String $siteProvenance, String $date) {
        $this->url = $url;
        $this->titre =$titre;
        $this->siteProvenance =$siteProvenance;
        $this->date =$date;

    }

}