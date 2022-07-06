<?php

namespace App\Http\Livewire;

use Livewire\Component;

class News extends Component
{
    public $postdetail;

    public function mount($id)
    {
        

       $post = json_decode(file_get_contents("https://igov.umy.ac.id/wp-json/wp/v2/posts?include[]=". $id ."&_embed"), true);

       $this->postdetail = [
            "id"    => $id,
            "title" => $post[0]['title']['rendered'],        
            "featured_image" => $post[0]['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['large']['source_url'],        
            "content" => $post[0]['content']['rendered'],        
            "date" => $post[0]['date'],        
       ];
    }
    public function render()
    {
        return view('livewire.news')
        ->layout('components.layoutfront');
    }
}
