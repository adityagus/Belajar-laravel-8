<?php

namespace App\Models;

class post 
{
      static $blog_posts = [
        [
          "title" => "Judul Post Pertama",
          "slug" => "judul-post-pertama",
          "author" => "Aditya Gustian",
          "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, blanditiis officia dolorem reprehenderit asperiores atque enim ratione, consequatur unde quod maxime illo. Ex odio quibusdam quod, libero inventore expedita est ut culpa in veritatis autem impedit cumque ducimus quasi molestias, atque aspernatur quae? Suscipit et asperiores doloremque similique rerum. Blanditiis ipsa nesciunt sint adipisci impedit delectus fuga, tempora accusantium molestiae praesentium aliquam sapiente! Maiores, dolorum officiis voluptates, impedit iure sit, labore consectetur voluptate ducimus maxime rerum incidunt id facilis voluptas."
        ],
        [
          "title" => "Judul Post Kedua",
          "slug" => "judul-post-kedua",
          "author" => "Bayu Ari Saputra",
          "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ratione architecto atque deserunt harum quae consequatur, et ea. Facilis recusandae aperiam cum, nobis earum fugit ipsam enim animi odit! Repellat deserunt iste laborum possimus fugit placeat quod obcaecati cumque voluptatibus quidem! Dolorem, dolores tenetur! Nulla optio dolores repellat harum nesciunt impedit quae voluptatibus reprehenderit aliquam maiores fuga sit atque id fugit, consectetur totam eveniet neque vel non, illum provident eos nisi? Numquam eum tenetur officiis provident nulla sit pariatur architecto quisquam similique autem vero, et itaque quibusdam cumque veniam labore modi. Quod, voluptate quasi? A magni labore eius beatae rem!"
        ],
      ]; 

      public static function all()
      {
        return self::$blog_posts;
      }

      public static function find($slug)
      {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p ) {
          if($p["slug"] === $slug ) {
            $post = $p;
          }
        }

        return $post;
      }
}
