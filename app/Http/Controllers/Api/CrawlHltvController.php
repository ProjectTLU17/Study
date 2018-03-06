<?php

namespace App\Http\Controllers;

use Response;
use App\Http\UserRequest;
class CrawlHltvController extends Controller
{
    public function index(){
      $starting_url = 'http://google.com';
      $options = [
      'type' => 'main', // $type is optional.(Default: main),
      'url_deletion' => true  // Default: true
      ];
      $result = \SearchBot::request($starting_url, $options);

      if($result->exists()) {

        // Symfony\Component\BrowserKit\Response
        // See http://api.symfony.com/2.3/Symfony/Component/BrowserKit/Response.html
        $response = $result->response();

        // Symfony\Component\DomCrawler/Crawler
        // See http://api.symfony.com/2.3/Symfony/Component/DomCrawler/Crawler.html
        $crawler = $result->crawler();

        $result->links(function($url, $text){

          // All links including URL & text will come here.

        });

        $result->queues(function($crawler_queue, $url, $text){

          // All links that do not exist in DB will come here.
          // $crawler_queue has already type and url.
          $crawler_queue->save();

        });
        return Response::json($crawler);

      } else {

        $e = $result->exception();
        echo $e->getMessage();
        $type = $result->type();
        $url = $result->url();

        return Response::json($e);

      }

    }
}
