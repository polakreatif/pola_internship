<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewArticleListsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_can_view_the_article_lists()
    {
        // prepare
        factory(Article::class, 10)->create();
      
        // execute
        $response = $this->get('/');

        // asserts 
        $articles = Article::latest()->take(9)->get();
    
        foreach ($articles as $article) {
            $response->assertSee($article->judul);
            $response->assertSee($article->isi);
            $response->assertSee($article->tanggal_dibuat->format('d M Y h:i'));
        }
    }
}
