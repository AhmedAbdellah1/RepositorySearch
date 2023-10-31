<?php

namespace App\Controller;

use App\Model\GithubRepository;
use GuzzleHttp\Client;

class ApiController
{
    public static function searchRepositories($top = 100, $date = '2019-01-10', $lang = '')
    {
        $top = $top ? $top : 100;
        $date = $date ? $date : '2019-01-10';
        $lang = $lang ? $lang : '';

        $url = "https://api.github.com/search/repositories?q=created:>$date+language:$lang&sort=stars&order=desc&per_page=$top";

        $client = new Client();
        $response = $client->request('GET', $url);

        $data = json_decode($response->getBody(), true);

        $repositories = [];

        $count = 0;

        foreach ($data['items'] as $item) {

            $count++;

            $id = $item['id'];

            $lang = $item['language'];

            $stargazersCount = $item['stargazers_count'];

            $createdAt = $item['created_at'];

            $repository = new GithubRepository($count, $id, $lang, $stargazersCount, $createdAt);

            $repositories[] = $repository;
        }
        return $repositories;
    }
}
