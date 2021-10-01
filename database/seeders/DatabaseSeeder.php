<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::create([
            'name' => 'M Haikal Fikri',
            'username' => 'mhaikalfikri',
            'email' => 'mhaikalfikri@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio obcaecati unde iste vero tempore, esse quis suscipit quasi, iure hic earum eum iusto voluptas cum inventore nobis modi aliquam? Minus voluptatem voluptatum ipsum quae quam, similique corporis quos error cum, labore exercitationem totam fugiat nemo consectetur adipisci, veniam esse eligendi ducimus sunt incidunt illum eaque odio rem nam? Eum, inventore error voluptatibus nisi fugiat dicta, aperiam laboriosam ab, amet impedit perspiciatis quaerat! Doloribus quis reprehenderit aliquid non voluptates eos ad ea mollitia. Impedit atque beatae, assumenda adipisci, ipsum eaque laboriosam illo repudiandae iusto voluptatum quam enim nisi dolor,',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio obcaecati unde iste vero tempore, esse quis suscipit quasi, iure hic earum eum iusto voluptas cum inventore nobis modi aliquam? Minus voluptatem voluptatum ipsum quae quam, similique corporis quos error cum, labore exercitationem totam fugiat nemo consectetur adipisci, veniam esse eligendi ducimus sunt incidunt illum eaque odio rem nam? Eum, inventore error voluptatibus nisi fugiat dicta, aperiam laboriosam ab, amet impedit perspiciatis quaerat! Doloribus quis reprehenderit aliquid non voluptates eos ad ea mollitia. Impedit atque beatae, assumenda adipisci, ipsum eaque laboriosam illo repudiandae iusto voluptatum quam enim nisi dolor, sunt tenetur?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio obcaecati unde iste vero tempore, esse quis suscipit quasi, iure hic earum eum iusto voluptas cum inventore nobis modi aliquam? Minus voluptatem voluptatum ipsum quae quam, similique corporis quos error cum, labore exercitationem totam fugiat nemo consectetur adipisci, veniam esse eligendi ducimus sunt incidunt illum eaque odio rem nam? Eum, inventore error voluptatibus nisi fugiat dicta, aperiam laboriosam ab, amet impedit perspiciatis quaerat! Doloribus quis reprehenderit aliquid non voluptates eos ad ea mollitia. Impedit atque beatae, assumenda adipisci, ipsum eaque laboriosam illo repudiandae iusto voluptatum quam enim nisi dolor,',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio obcaecati unde iste vero tempore, esse quis suscipit quasi, iure hic earum eum iusto voluptas cum inventore nobis modi aliquam? Minus voluptatem voluptatum ipsum quae quam, similique corporis quos error cum, labore exercitationem totam fugiat nemo consectetur adipisci, veniam esse eligendi ducimus sunt incidunt illum eaque odio rem nam? Eum, inventore error voluptatibus nisi fugiat dicta, aperiam laboriosam ab, amet impedit perspiciatis quaerat! Doloribus quis reprehenderit aliquid non voluptates eos ad ea mollitia. Impedit atque beatae, assumenda adipisci, ipsum eaque laboriosam illo repudiandae iusto voluptatum quam enim nisi dolor, sunt tenetur?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio obcaecati unde iste vero tempore, esse quis suscipit quasi, iure hic earum eum iusto voluptas cum inventore nobis modi aliquam? Minus voluptatem voluptatum ipsum quae quam, similique corporis quos error cum, labore exercitationem totam fugiat nemo consectetur adipisci, veniam esse eligendi ducimus sunt incidunt illum eaque odio rem nam? Eum, inventore error voluptatibus nisi fugiat dicta, aperiam laboriosam ab, amet impedit perspiciatis quaerat! Doloribus quis reprehenderit aliquid non voluptates eos ad ea mollitia. Impedit atque beatae, assumenda adipisci, ipsum eaque laboriosam illo repudiandae iusto voluptatum quam enim nisi dolor,',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio obcaecati unde iste vero tempore, esse quis suscipit quasi, iure hic earum eum iusto voluptas cum inventore nobis modi aliquam? Minus voluptatem voluptatum ipsum quae quam, similique corporis quos error cum, labore exercitationem totam fugiat nemo consectetur adipisci, veniam esse eligendi ducimus sunt incidunt illum eaque odio rem nam? Eum, inventore error voluptatibus nisi fugiat dicta, aperiam laboriosam ab, amet impedit perspiciatis quaerat! Doloribus quis reprehenderit aliquid non voluptates eos ad ea mollitia. Impedit atque beatae, assumenda adipisci, ipsum eaque laboriosam illo repudiandae iusto voluptatum quam enim nisi dolor, sunt tenetur?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio obcaecati unde iste vero tempore, esse quis suscipit quasi, iure hic earum eum iusto voluptas cum inventore nobis modi aliquam? Minus voluptatem voluptatum ipsum quae quam, similique corporis quos error cum, labore exercitationem totam fugiat nemo consectetur adipisci, veniam esse eligendi ducimus sunt incidunt illum eaque odio rem nam? Eum, inventore error voluptatibus nisi fugiat dicta, aperiam laboriosam ab, amet impedit perspiciatis quaerat! Doloribus quis reprehenderit aliquid non voluptates eos ad ea mollitia. Impedit atque beatae, assumenda adipisci, ipsum eaque laboriosam illo repudiandae iusto voluptatum quam enim nisi dolor,',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio obcaecati unde iste vero tempore, esse quis suscipit quasi, iure hic earum eum iusto voluptas cum inventore nobis modi aliquam? Minus voluptatem voluptatum ipsum quae quam, similique corporis quos error cum, labore exercitationem totam fugiat nemo consectetur adipisci, veniam esse eligendi ducimus sunt incidunt illum eaque odio rem nam? Eum, inventore error voluptatibus nisi fugiat dicta, aperiam laboriosam ab, amet impedit perspiciatis quaerat! Doloribus quis reprehenderit aliquid non voluptates eos ad ea mollitia. Impedit atque beatae, assumenda adipisci, ipsum eaque laboriosam illo repudiandae iusto voluptatum quam enim nisi dolor, sunt tenetur?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
