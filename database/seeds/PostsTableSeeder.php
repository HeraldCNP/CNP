<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use App\Category;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();
        Tag::truncate();

        $category = new Category;
        $category->name = "Categoria 1";
        $category->save();

        $category = new Category;
        $category->name = "Categoria 2";
        $category->save();

        $post = new Post();
        $post->title = "Mi primer Post";
        $post->url = str_slug("Mi primer Post");
        $post->excerpt = "Extracto de mi primer post";
        $post->body = "<p>Contenido de mi primer post</p>";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 1']));

        $post = new Post();
        $post->title = "Mi segundo Post";
        $post->url = str_slug("Mi segundo Post");
        $post->excerpt = "Extracto de mi segundo post";
        $post->body = "<p>Contenido de mi segundo post</p>";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 2;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 2']));

        $post = new Post();
        $post->title = "Mi Tercer Post";
        $post->url = str_slug("Mi tercer Post");
        $post->excerpt = "Extracto de mi Tercer post";
        $post->body = "<p>Contenido de mi Tercer post</p>";
        $post->published_at = Carbon::now()->subDay(1);
        $post->category_id = 2;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 3']));


        $post = new Post();
        $post->title = "Mi Cuarto Post";
        $post->url = str_slug("Mi Cuarto Post");
        $post->excerpt = "Extracto de mi Cuarto post";
        $post->body = "<p>Contenido de mi Cuarto post</p>";
        $post->published_at = Carbon::now()->subDay(4);
        $post->category_id = 1;
        $post->save();

        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 4']));
    }
}
