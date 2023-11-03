<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post  ///extends Model berfungsi untuk buat database
{
    private static $blog_posts = [
        [
        "title" => "Judul Pertama",
        "slug" => "judul-pertama",
        "author" => "Fila",
        "body" => "Lorem ipsum dolor sit amet, 
        consectetur adipisicing elit. 
        Quisquam, quod, quaerat, quasi, quibusdam, 
        quidem, quod, quaerat, quasi, quibusdam, 
        quidem, quod, quaerat, quasi, quibusdam,
         quidem, quod, quaerat, quasi, quibusdam, 
         quidem, quod, quaerat."
        ],
        [
        "title" => "Judul Kedua",
        "slug" => "judul-kedua",
        "author" => "Fila Akbar",
        "body" => "Lorem ipsum dolor sit amet, 
        consectetur adipisicing elit. 
        Quisquam, quod, quaerat, quasi, quibusdam, 
        quidem, quod, quaerat, quasi, quibusdam, 
        quidem, quod, quaerat, quasi, quibusdam,
         quidem, quod, quaerat, quasi, quibusdam, 
         quidem, quod, quaerat."
        ]
    ]; 

    public static function all()
    {
        return self::$blog_posts;
    }
    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p) {
            if($p["slug"] === $slug) {
               $post = $p;
        }
     }
     return $post;
    }
}
