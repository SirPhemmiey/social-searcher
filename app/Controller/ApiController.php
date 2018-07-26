<?php

class ApiController extends AppController {

    public function index() {
        $this->layout = false; 
        if ($this->request->is('post')) {
            $term = $_POST['term'];
            $network = $_POST['network'];
            $url = "https://api.social-searcher.com/v2/search?q='$term'&network=$network&limit=3";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $output = json_decode(curl_exec($ch), true);
            curl_close($ch);
        }
        $this->set(compact('output', 'term'));
    }
}