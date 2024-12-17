<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Sultan Farrel",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi saepe facilis impedit incidunt, adipisci ea a nulla. Impedit facere quisquam, tempore, labore vero eius deleniti alias rem quasi perferendis deserunt unde nesciunt aut cumque repellat corrupti debitis? Ducimus hic blanditiis sint quisquam excepturi nam, totam iure ex suscipit fugit accusantium. Ipsam possimus ea iste incidunt. Officiis commodi tenetur quos similique quibusdam accusantium sit a culpa minima qui perferendis, ut, modi aliquid dolorem voluptatibus? Praesentium, doloremque. Excepturi natus id inventore ducimus."
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Jhon Doe",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, atque iure minus maiores itaque accusamus voluptatibus nulla hic, tempore fuga libero ullam consequuntur saepe? Amet nam eius unde aspernatur, dolorum itaque, natus tenetur quasi quidem placeat rerum quas quisquam ullam deserunt optio alias eligendi quos facere explicabo quam architecto exercitationem. Eligendi quisquam dignissimos earum explicabo, quidem impedit. Voluptate nemo debitis doloribus hic. Atque molestiae repudiandae aut explicabo et esse natus tenetur nesciunt autem aperiam debitis eum quam, provident temporibus, rerum odio, recusandae deleniti reprehenderit exercitationem id? Provident illum voluptatibus omnis deserunt. Aliquam dolorum nemo perspiciatis praesentium officiis numquam nisi explicabo!"
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
