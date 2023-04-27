<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        // dd($user);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // $user = User::factory(10)->create();

        // dd($user);

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // // (me) alternatively rename user to users and foreach($users as $user){ Post::create([

        // Post::create([
        //     'user_id' => $user[0]->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique velitut lorem commodo viverra. Quisque tellus lorem, egestas sit amet urna a, tincidunt lacus. Maecenas hendrerit tellus sed ullamcorper laoreet. Praesent vitae mauris at erat efficitur vehicula nec eget leo. Vivamus porttitor, lorem vel porta lobortis, quam tellus elementum leo, vel faucibus felis ligula sed enim. Maecenas cursus tellus a ullamcorper laoreet. Aenean leo diam, convallis faucibus venenatis ac, tincidunt sed erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla lobortis finibus molestie. Nulla eu augue ut lectus luctus gravida quis sed lectus. Aenean accumsan arcu at suscipit rhoncus. Aenean lobortis ligula ligula, vel luctus urna ultricies nec.</p>',
        // ]);

        // Post::create([
        //     'user_id' => $user[0]->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p>Nam tristique velitut lorem commodo viverra.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique velitut lorem commodo viverra. Quisque tellus lorem, egestas sit amet urna a, tincidunt lacus. Maecenas hendrerit tellus sed ullamcorper laoreet. Praesent vitae mauris at erat efficitur vehicula nec eget leo. Vivamus porttitor, lorem vel porta lobortis, quam tellus elementum leo, vel faucibus felis ligula sed enim. Maecenas cursus tellus a ullamcorper laoreet. Aenean leo diam, convallis faucibus venenatis ac, tincidunt sed erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla lobortis finibus molestie. Nulla eu augue ut lectus luctus gravida quis sed lectus. Aenean accumsan arcu at suscipit rhoncus. Aenean lobortis ligula ligula, vel luctus urna ultricies nec.</p>',
        // ]);

        //     $title = 'My work post'.rand();
        //     Post::create([
        //         'user_id' => $user->id,
        //         'category_id' => $work->id,
        //         'title' => $title,
        //         'slug' => str_slug($title),
        //         'excerpt' => 'Excerpt for my post',
        //         'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique velitut lorem commodo viverra. Quisque tellus lorem, egestas sit amet urna a, tincidunt lacus. Maecenas hendrerit tellus sed ullamcorper laoreet. Praesent vitae mauris at erat efficitur vehicula nec eget leo. Vivamus porttitor, lorem vel porta lobortis, quam tellus elementum leo, vel faucibus felis ligula sed enim. Maecenas cursus tellus a ullamcorper laoreet. Aenean leo diam, convallis faucibus venenatis ac, tincidunt sed erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla lobortis finibus molestie. Nulla eu augue ut lectus luctus gravida quis sed lectus. Aenean accumsan arcu at suscipit rhoncus. Aenean lobortis ligula ligula, vel luctus urna ultricies nec.</p>',
        //     ]);
        // }



        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Excerpt for my post',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique velitut lorem commodo viverra. Quisque tellus lorem, egestas sit amet urna a, tincidunt lacus. Maecenas hendrerit tellus sed ullamcorper laoreet. Praesent vitae mauris at erat efficitur vehicula nec eget leo. Vivamus porttitor, lorem vel porta lobortis, quam tellus elementum leo, vel faucibus felis ligula sed enim. Maecenas cursus tellus a ullamcorper laoreet. Aenean leo diam, convallis faucibus venenatis ac, tincidunt sed erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla lobortis finibus molestie. Nulla eu augue ut lectus luctus gravida quis sed lectus. Aenean accumsan arcu at suscipit rhoncus. Aenean lobortis ligula ligula, vel luctus urna ultricies nec.</p>',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
