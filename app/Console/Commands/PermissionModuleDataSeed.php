<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Module\Permission\Models\Module;
use Illuminate\Support\Facades\Artisan;

class PermissionModuleDataSeed extends Command
{
    protected $signature = 'permission:seed';

    protected $description = 'Seeds All Permission Module Tables';

    public function handle()
    {
        Artisan::call('db:seed', [
            '--class' => 'Module\Permission\database\seeds\DatabaseSeeder'
        ]);
        

        $this->info('Permission module tables seeded successfully!');
    }
}
