<?php

namespace JBarbin\GoogleBooksBundle\GoogleAPI;

use GuzzleHttp\Client;

class GoogleAPI {

    public function searchBook(Query $query){

        $extra_params = [];
        $query_params = [];

        $api_key = $query->getApiKey();
        $title = $query->getTitle();
        $author = $query->getAuthor();
        $maxResults = $query->getMaxResults();
        $startIndex = $query->getStartIndex();

        //Mapping query parameters
        if (isset($title) && $title <> ''){
            $query_params[] = 'intitle:' . urlencode($title);
        }
        if ($author && $author){
            $query_params[] = 'inauthor:' . urlencode($author);
        }

        //Mapping extras parameters
        if (isset($maxResults) && $maxResults <> ''){
            $extra_params[] = 'key=' . urldecode($maxResults);
        }
        if (isset($startIndex) && $startIndex <> ''){
            $extra_params[] = 'key=' . urldecode($startIndex);
        }
        if (isset($api_key) && $api_key <> ''){
            $extra_params[] = 'key=' . urldecode($api_key);
        }

        $client = new Client([
            'base_uri' => 'https://www.googleapis.com',
        ]);
        $response = $client->request('GET', '/books/v1/volumes?q=' . implode('+', $query_params) . '&' . implode('&', $extra_params));
        $books = (string)$response->getBody();

        return json_decode($books);

    }

}