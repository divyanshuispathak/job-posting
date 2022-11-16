<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
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
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);
        Listing::factory(5)->create([
            'user_id' => $user->id
        ]);

        // Listing::create(
        //     [
        //         'title' => 'laravel senior Developer',
        //         'tags' => 'laravel, javascript',
        //         'company' => 'Acme Corp',
        //         'location' => 'Boston, MA',
        //         'email' => 'email1@email.com',
        //         'website' => 'https://www.acme.com',
        //         'description' => 'lorem lorem lorem fgkj sdfjk sduihfsidjh gsijijsdg ijsgijs gsn'
        //     ]
        //     );
        // Listing::create([
        //         'title' => 'laravel senior Developer',
        //         'tags' => 'laravel, javascript',
        //         'company' => 'Acme Corp',
        //         'location' => 'Boston, MA',
        //         'email' => 'email1@email.com',
        //         'website' => 'https://www.acme.com',
        //         'description' => 'lorem lorem lorem fgkj sdfjk sduihfsidjh gsijijsdg ijsgijs gsn'
        // ]);     
    }
}
