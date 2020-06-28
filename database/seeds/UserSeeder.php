<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB; // 特定の値を使いたいとき
// use Illuminate\Support\Facades\Hash; // 特定の値を使いたいとき

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // 特定の値を使いたいとき
        // DB::table('users')->insert([
        //     'name' => 'foo',
        //     'email' => 'foo@example.com',
        //     'password' => Hash::make('password')
        // ]);

        factory(App\User::class, 50)->create(); // database/factories/UserFactory.php？を使って50件作成
        // factory(App\User::class, 50)->create([ // database/factories/UserFactory.php？を使って値を上書きして50件作成
        //     'name' => 'foo',
        //     'email_verified_at' => null
        // ]);

        // factory(App\User::class, 50)->create()->each(function ($user) { // 50件のレコード
        //     $user->posts()->save(factory(App\Post::class)->make());
        //     $user->posts()->createMany(
        //         factory(App\Post::class, 50)->make()->toArray()
        //     );
        // });
    }
}
