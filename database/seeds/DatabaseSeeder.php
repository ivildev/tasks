<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::query()->truncate();
        App\Task::query()->truncate();
        App\Category::query()->truncate();
        App\Client::query()->truncate();
        App\Project::query()->truncate();
        //App\Activity::query()->truncate();
        // $this->call(UsersTableSeeder::class);

/*        $clients = "";
        $projects = "";
        $categories = "";

        $users = factory(App\User::class,5)
            ->create()
            ->each(function ($u) use (&$clients, &$projects, &$categories) {
                $clients = $u->clients()->saveMany(factory(App\Client::class,2)->make());
                $projects = $u->projects()->saveMany(factory(App\Project::class,2)->make());
                $categories = $u->categories()->saveMany(factory(App\Category::class,2)->make());

                $u->tasks()->saveMany(factory(App\Task::class,15)->make());
            });


        factory(App\Task::class, 5)->create([
            'user_id' => $users[0]->id,
            'project_id' => $clients[1]->id,
            'category_id' => $projects[0]->id,
            'client_id' => $categories[0]->id,
        ]);*/





        $users = factory(App\User::class,5)
            ->create()
            ->each(function ($u)  {
                $clients = $u->clients()->saveMany(factory(App\Client::class,3)->make());
                $projects = $u->projects()->saveMany(factory(App\Project::class,3)->make());
                $categories = $u->categories()->saveMany(factory(App\Category::class,3)->make());

                //var_dump($clients);
                $faker = Faker::create();
                //var_dump($faker);

                for ($i = 0 ; $i < 9 ; $i++) {
                    $task = $u->tasks()->save(factory(App\Task::class)->make([
                        'project_id' => $faker->numberBetween($projects[0]->id, $projects[2]->id),
                        'category_id' => $faker->numberBetween($categories[0]->id, $categories[2]->id),
                        'client_id' => $faker->numberBetween($clients[0]->id, $clients[2]->id)
                    ]));
                    //var_dump($task);
                    //$tasks = App\Task::find($task->id);
                    $task->activities()->saveMany(factory(App\Activity::class,3)->make());

                }
            });

/*
        $faker = Faker::create();

        for ($i = 0 ; $i < 5 ; $i++) {

            factory(App\Task::class)->create([
                'user_id' => $users[0]->id,
                'project_id' => $faker->numberBetween($clients[0]->id, $clients[2]->id),
                'category_id' => $projects[0]->id,
                'client_id' => $categories[0]->id,
            ]);

        }*/

        //var_dump($clients);

    }
}
