<?php

namespace Stolentine\CommandsMigration;

use Illuminate\Console\Command;

class RestartCommand extends Command
{
    protected $signature = 'migrate:restart';
    protected $description = 'Restart last migration';

    public function handle()
    {
        $this->call('migrate:rollback');
        $this->call('migrate');
    }
}
