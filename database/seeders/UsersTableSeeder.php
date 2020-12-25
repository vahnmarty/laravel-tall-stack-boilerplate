<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Team;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        //$this->createPermissions();
        $this->createUsers();
    }

    public function createRoles()
    {
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'staff']);
        Role::firstOrCreate(['name' => 'user']);
    }

    public function createUsers()
    {
        $this->createAdmins();
        $this->createStaffs();
        $this->createNormalUsers();
    }

    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->first_name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }

    public function createAdmins()
    {
        if(!User::whereEmail('admin@laravel.com')->first())
        {
            $user = User::firstOrCreate([
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@laravel.com',
                'password' => bcrypt('password')
            ]);

            $user->assignRole('admin');

            $this->createTeam($user);
        }
    }

    public function createStaffs()
    {
        if(!User::whereEmail('staff@laravel.com')->first())
        {
            $user = User::firstOrCreate([
                'first_name' => 'Staff1',
                'last_name' => 'Staff',
                'email' => 'staff@laravel.com',
                'password' => bcrypt('password')
            ]);

            $user->assignRole('staff');
            $this->createTeam($user);
        }
    }

    public function createNormalUsers()
    {
        if(!User::whereEmail('user@laravel.com')->first())
        {
            $user = User::firstOrCreate([
                'first_name' => 'User',
                'last_name' => 'User',
                'email' => 'user@laravel.com',
                'password' => bcrypt('password')
            ]);

            $user->assignRole('user');
            $this->createTeam($user);
        }
    }
}
