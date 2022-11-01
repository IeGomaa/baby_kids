<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AuthCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command For Start Project';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('Please Enter Your Name');
        $email = $this->ask('Please Enter Your Email');
        $password = $this->ask('Please Enter Your Password');

        if (User::where('email', $email)->first()) {
            $this->ask('Sorry Email Was Exists !!');
        } else {
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)
            ]);
            $this->info('User Created !');
        }
        return true;
    }
}
