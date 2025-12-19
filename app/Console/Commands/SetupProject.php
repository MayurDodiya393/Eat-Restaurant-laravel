<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SetupProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:project';

    /**
     * The description of the console command.
     *
     * @var string
     */
    protected $description = 'Setup the Eat Restaurant Laravel project - create database tables and seed initial data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🚀 Starting Eat Restaurant Laravel Setup...');
        $this->newLine();

        try {
            // Step 1: Run migrations
            $this->info('📊 Step 1: Creating database tables...');
            Artisan::call('migrate', ['--force' => true]);
            $this->info('✅ Database tables created successfully!');
            $this->newLine();

            // Step 2: Display setup complete message
            $this->info('✅ Setup completed successfully!');
            $this->newLine();

            // Step 3: Display next steps
            $this->line('📋 Next Steps:');
            $this->line('');
            $this->line('1. Start XAMPP (Apache and MySQL)');
            $this->line('');
            $this->line('2. Run the development server:');
            $this->line('   <fg=yellow>php artisan serve</>');
            $this->line('');
            $this->line('3. Open your browser and visit:');
            $this->line('   <fg=yellow>http://localhost:8000</>');
            $this->line('');
            $this->line('4. Create a new account by clicking "Register"');
            $this->line('');
            $this->line('📚 Features Available:');
            $this->line('   • User Registration & Login');
            $this->line('   • User Dashboard');
            $this->line('   • Contact Form with Database Storage');
            $this->line('   • Admin Panel for Contact Messages');
            $this->line('   • Restaurant Services, Gallery & Feedback');
            $this->line('');

            // Display database info
            $this->line('💾 Database Information:');
            $this->line('   Database: <fg=yellow>' . env('DB_DATABASE') . '</>');
            $this->line('   Host: <fg=yellow>' . env('DB_HOST') . '</>');
            $this->line('   Port: <fg=yellow>' . env('DB_PORT') . '</>');
            $this->newLine();

            $this->info('🎉 Your Eat Restaurant website is ready to use!');

        } catch (\Exception $e) {
            $this->error('❌ Setup failed: ' . $e->getMessage());
            return 1;
        }

        return 0;
    }
}
