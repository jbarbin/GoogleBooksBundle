<?php

namespace JBarbin\GoogleBooksBundle\GoogleAPI;

use GuzzleHttp\Client;

class GoogleAPI {

    public function searchBook($title = NULL, $api_key = NULL){

        $query_params = [];

        if (isset($api_key) && $api_key <> ''){
            $query_params[] = 'key=' . urldecode($api_key);
        }

        $client = new Client([
            'base_uri' => 'https://www.googleapis.com',
        ]);
        $response = $client->request('GET', '/books/v1/volumes?q=' . urlencode($title) . '&' . implode('&', $query_params));
        $books = (string)$response->getBody();

        return json_decode($books);

    }

}