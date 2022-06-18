<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;


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
        //   'name' => 'Aditya Gustian',
        //   'email' => 'adityagustian11@gmail.com',
        //   'password' => Bcrypt('12345')
        // ]);
        
        // User::create([
        //   'name' => 'Bayu Ari Saputra',
        //   'email' => 'bayuarisaputra@gmail.com',
        //   'password' => Bcrypt('12345')
        // ]);
        
        User::factory(5)->create();
        
        Category::create([
          'name' => 'Programming',
          'slug' => 'programming'
        ]);
        
        Category::create([
          'name' => 'Personal',
          'slug' => 'personal'
        ]);
        
        Category::create([
          'name' => 'UI/UX',
          'slug' => 'ui/ux'
        ]);
        
        Post::factory(20)->create();
        
        
        // Post::create([
        //   'title' => 'Judul Pertama',
        //   'slug' => 'judul-pertama',
        //   'excerpt' => 'Lorem ipsum Pertama',
        //   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima esse impedit odit! Temporibus eos necessitatibus aliquid nam! Animi qui, similique non sit itaque quia veniam. Voluptate maiores id eaque consequuntur earum sed, pariatur perferendis a,</p><p> ipsa deleniti et quam quis tempora sunt repellendus nostrum? Est quo adipisci nulla iure, aspernatur nisi ducimus tempora necessitatibus, consectetur repellendus quisquam nobis ab minus neque omnis, sed voluptates. Provident officia saepe a incidunt rem, id voluptatibus sint amet dolores, libero expedita totam animi fugit.</p><p> repellat ex enim distinctio! Porro ex nostrum corporis illo voluptate voluptatibus eius omnis ratione voluptatem at officiis suscipit culpa sapiente, accusantium id aliquam dicta totam sed repudiandae deleniti vel beatae, excepturi, eum odit. Eveniet voluptate error eius eos veritatis vero obcaecati perspiciatis voluptatum. Modi quibusdam similique ducimus eaque consectetur pariatur omnis, natus voluptatum! Consectetur quos impedit fuga illo repellat reprehenderit nihil consequuntur saepe explicabo, nam eligendi voluptas quibusdam modi perferendis?adasahs</p>',
        //   'category_id' => '1',
        //   'user_id' => '1',
        // ]);
        
        // Post::create([
        //   'title' => 'Judul Kedua',
        //   'slug' => 'judul-ke-dua',
        //   'excerpt' => 'Lorem ipsum Kedua',
        //   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima esse impedit odit! Temporibus eos necessitatibus aliquid nam! Animi qui, similique non sit itaque quia veniam. Voluptate maiores id eaque consequuntur earum sed, pariatur perferendis a,</p><p> ipsa deleniti et quam quis tempora sunt repellendus nostrum? Est quo adipisci nulla iure, aspernatur nisi ducimus tempora necessitatibus, consectetur repellendus quisquam nobis ab minus neque omnis, sed voluptates. Provident officia saepe a incidunt rem, id voluptatibus sint amet dolores, libero expedita totam animi fugit.</p><p> repellat ex enim distinctio! Porro ex nostrum corporis illo voluptate voluptatibus eius omnis ratione voluptatem at officiis suscipit culpa sapiente, accusantium id aliquam dicta totam sed repudiandae deleniti vel beatae, excepturi, eum odit. Eveniet voluptate error eius eos veritatis vero obcaecati perspiciatis voluptatum. Modi quibusdam similique ducimus eaque consectetur pariatur omnis, natus voluptatum! Consectetur quos impedit fuga illo repellat reprehenderit nihil consequuntur saepe explicabo, nam eligendi voluptas quibusdam modi perferendis?adasahs</p>',
        //   'category_id' => '1',
        //   'user_id' => '1',
        // ]);
        
        // Post::create([
        //   'title' => 'Judul Ketiga',
        //   'slug' => 'judul-ke-tiga',
        //   'excerpt' => 'Lorem ipsum Tiga',
        //   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima esse impedit odit! Temporibus eos necessitatibus aliquid nam! Animi qui, similique non sit itaque quia veniam. Voluptate maiores id eaque consequuntur earum sed, pariatur perferendis a,</p><p> ipsa deleniti et quam quis tempora sunt repellendus nostrum? Est quo adipisci nulla iure, aspernatur nisi ducimus tempora necessitatibus, consectetur repellendus quisquam nobis ab minus neque omnis, sed voluptates. Provident officia saepe a incidunt rem, id voluptatibus sint amet dolores, libero expedita totam animi fugit.</p><p> repellat ex enim distinctio! Porro ex nostrum corporis illo voluptate voluptatibus eius omnis ratione voluptatem at officiis suscipit culpa sapiente, accusantium id aliquam dicta totam sed repudiandae deleniti vel beatae, excepturi, eum odit. Eveniet voluptate error eius eos veritatis vero obcaecati perspiciatis voluptatum. Modi quibusdam similique ducimus eaque consectetur pariatur omnis, natus voluptatum! Consectetur quos impedit fuga illo repellat reprehenderit nihil consequuntur saepe explicabo, nam eligendi voluptas quibusdam modi perferendis?adasahs</p>',
        //   'category_id' => '2',
        //   'user_id' => '1',
        // ]);
        
        // Post::create([
        //   'title' => 'Judul Keempat',
        //   'slug' => 'judul-ke-empat',
        //   'excerpt' => 'Lorem ipsum Empat',
        //   'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima esse impedit odit! Temporibus eos necessitatibus aliquid nam! Animi qui, similique non sit itaque quia veniam. Voluptate maiores id eaque consequuntur earum sed, pariatur perferendis a,</p><p> ipsa deleniti et quam quis tempora sunt repellendus nostrum? Est quo adipisci nulla iure, aspernatur nisi ducimus tempora necessitatibus, consectetur repellendus quisquam nobis ab minus neque omnis, sed voluptates. Provident officia saepe a incidunt rem, id voluptatibus sint amet dolores, libero expedita totam animi fugit.</p><p> repellat ex enim distinctio! Porro ex nostrum corporis illo voluptate voluptatibus eius omnis ratione voluptatem at officiis suscipit culpa sapiente, accusantium id aliquam dicta totam sed repudiandae deleniti vel beatae, excepturi, eum odit. Eveniet voluptate error eius eos veritatis vero obcaecati perspiciatis voluptatum. Modi quibusdam similique ducimus eaque consectetur pariatur omnis, natus voluptatum! Consectetur quos impedit fuga illo repellat reprehenderit nihil consequuntur saepe explicabo, nam eligendi voluptas quibusdam modi perferendis?adasahs</p>',
        //   'category_id' => '2',
        //   'user_id' => '2',
        // ]);
        
        
    }
}
