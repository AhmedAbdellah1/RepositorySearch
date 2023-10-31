<?php

namespace App\Model;

class GithubRepository
{

    private $count;
    private $id;
    private $language;
    private $stargazersCount;
    private $createdAt;

    public function __construct($count, $id, $language, $stargazersCount, $createdAt)
    {
        $this->count = $count;
        $this->id = $id;
        $this->language = $language;
        $this->stargazersCount = $stargazersCount;
        $this->createdAt = $createdAt;
    }

    public function getAllData()
    {
        return array(
            "count" => $this->getCount(),
            "id" => $this->getId(),
            "language" => $this->getLanguage(),
            "stargazersCount" => $this->getStargazersCount(),
            "createdAt" => $this->getCreatedAt()
        );
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getStargazersCount()
    {
        return $this->stargazersCount;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
