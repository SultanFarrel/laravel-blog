<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Sultan Farrel',
            'username' => 'farreltfc15',
            'email' => 'farreltfc15@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Jhon Doe',
        //     'email' => 'JhonDoe@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur repudiandae expedita officiis voluptas exercitationem corrupti velit unde',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur repudiandae expedita officiis voluptas exercitationem corrupti velit unde, quas deserunt, consectetur doloribus repellat incidunt optio dolore earum odit ea ducimus vel obcaecati corporis temporibus pariatur sequi tempora dignissimos? Doloribus inventore sapiente mollitia aliquid voluptatem quam maxime ipsam deserunt eligendi perferendis excepturi, illum adipisci? Vitae dolor quo ex ratione facere labore ab unde, culpa dignissimos obcaecati a accusamus numquam aut eligendi repellendus quia recusandae, maxime quae fuga praesentium provident saepe! Quo vel, harum assumenda ratione aliquid repudiandae, optio provident laboriosam maiores veritatis fuga aut saepe beatae nobis itaque laborum expedita soluta. Ducimus pariatur et magni fuga nulla eius cumque nostrum, dolores voluptas modi fugiat expedita qui ipsa rerum maxime perspiciatis deleniti in provident illum vitae ratione. Recusandae natus obcaecati excepturi quia! Temporibus eveniet iusto quia a. Molestiae rerum perspiciatis in assumenda quisquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur repudiandae expedita officiis voluptas exercitationem corrupti velit unde',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur repudiandae expedita officiis voluptas exercitationem corrupti velit unde, quas deserunt, consectetur doloribus repellat incidunt optio dolore earum odit ea ducimus vel obcaecati corporis temporibus pariatur sequi tempora dignissimos? Doloribus inventore sapiente mollitia aliquid voluptatem quam maxime ipsam deserunt eligendi perferendis excepturi, illum adipisci? Vitae dolor quo ex ratione facere labore ab unde, culpa dignissimos obcaecati a accusamus numquam aut eligendi repellendus quia recusandae, maxime quae fuga praesentium provident saepe! Quo vel, harum assumenda ratione aliquid repudiandae, optio provident laboriosam maiores veritatis fuga aut saepe beatae nobis itaque laborum expedita soluta. Ducimus pariatur et magni fuga nulla eius cumque nostrum, dolores voluptas modi fugiat expedita qui ipsa rerum maxime perspiciatis deleniti in provident illum vitae ratione. Recusandae natus obcaecati excepturi quia! Temporibus eveniet iusto quia a. Molestiae rerum perspiciatis in assumenda quisquam.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur repudiandae expedita officiis voluptas exercitationem corrupti velit unde',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur repudiandae expedita officiis voluptas exercitationem corrupti velit unde, quas deserunt, consectetur doloribus repellat incidunt optio dolore earum odit ea ducimus vel obcaecati corporis temporibus pariatur sequi tempora dignissimos? Doloribus inventore sapiente mollitia aliquid voluptatem quam maxime ipsam deserunt eligendi perferendis excepturi, illum adipisci? Vitae dolor quo ex ratione facere labore ab unde, culpa dignissimos obcaecati a accusamus numquam aut eligendi repellendus quia recusandae, maxime quae fuga praesentium provident saepe! Quo vel, harum assumenda ratione aliquid repudiandae, optio provident laboriosam maiores veritatis fuga aut saepe beatae nobis itaque laborum expedita soluta. Ducimus pariatur et magni fuga nulla eius cumque nostrum, dolores voluptas modi fugiat expedita qui ipsa rerum maxime perspiciatis deleniti in provident illum vitae ratione. Recusandae natus obcaecati excepturi quia! Temporibus eveniet iusto quia a. Molestiae rerum perspiciatis in assumenda quisquam.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
