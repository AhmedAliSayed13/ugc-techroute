<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class FreshMigrateExcept extends Command
{
    protected $signature = 'migrate:fresh-except {table}';
    protected $description = 'Drop all tables except the specified table and run migrations with seeding';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $exceptTable = $this->argument('table');

        // Get all tables in the database
        $tables = DB::select('SHOW TABLES');
        $databaseName = DB::getDatabaseName();
        $tables = array_map('current', $tables);

        // Drop all tables except the one specified
        Schema::disableForeignKeyConstraints();
        foreach ($tables as $table) {
            if ($table !== $exceptTable) {
                Schema::drop($table);
            }
        }
        Schema::enableForeignKeyConstraints();

        // Run migrations and seeders
        $this->call('migrate', ['--seed' => true]);

        $this->info('All tables dropped except ' . $exceptTable . ' and migrations refreshed with seeding.');
    }
}
