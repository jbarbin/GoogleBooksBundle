<?php

namespace JBarbin\GoogleBooksBundle\GoogleAPI;


class Query {

    private $api_key;
    private $title;
    private $author;
    private $maxResults;
    private $startIndex;

    public function __construct($api_key = NULL) {
        $this->api_key = $api_key;
    }

    /**
     * @return null
     */
    public function getApiKey() {
        return $this->api_key;
    }

    /**
     * @param null $api_key
     */
    public function setApiKey($api_key) {
        $this->api_key = $api_key;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author) {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getMaxResults() {
        return $this->maxResults;
    }

    /**
     * @param mixed $maxResults
     */
    public function setMaxResults($maxResults) {
        $this->maxResults = $maxResults;
    }

    /**
     * @return mixed
     */
    public function getStartIndex() {
        return $this->startIndex;
    }

    /**
     * @param mixed $startIndex
     */
    public function setStartIndex($startIndex) {
        $this->startIndex = $startIndex;
    }



}