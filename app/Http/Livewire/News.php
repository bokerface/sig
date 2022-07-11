<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class News extends Component
{
    public $postdetail;

    public function mount($id)
    {



        $post = Http::withoutVerifying()->withHeaders([])->get("https://igov.umy.ac.id/wp-json/wp/v2/posts", [
            "include[]" => $id,
            "_embed" => ''
        ])->json();



        $this->postdetail = [
            "id"    => $id,
            "title" => $post[0]['title']['rendered'],
            "featured_image" => $post[0]['_embedded']['wp:featuredmedia'][0]['source_url'],
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
