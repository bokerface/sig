<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class News extends Component
{
    public $postdetail;

    public function mount($id)
    {
        

    //    $post = json_decode(file_get_contents("https://igov.umy.ac.id/wp-json/wp/v2/posts?include[]=". $id ."&_embed"), true);

       $post = Http::withHeaders([])->post('"https://igov.umy.ac.id/wp-json/wp/v2/posts?include[]=". $id ."&_embed"', [
        // 'username' => $this->username,
        // 'password' => $this->password,
    ])->object();

    dd($post);


    //    $this->postdetail = [
    //         "id"    => $id,
    //         "title" => $post[0]['title']['rendered'],        
    //         "featured_image" => $post[0]['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['large']['source_url'],        
    //         "content" => $post[0]['content']['rendered'],        
    //         "date" => $post[0]['date'],        
    //    ];
    }
    public function render()
    {
        
        $post = Http::withHeaders([])->post('"https://igov.umy.ac.id/wp-json/wp/v2/posts?include[]=". $id ."&_embed"', [
            // 'username' => $this->username,
            // 'password' => $this->password,
        ])->object();
    
        dd($post);

        return view('livewire.news')
        ->layout('components.layoutfront');
    }
}
