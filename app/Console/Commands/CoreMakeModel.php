<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Nwidart\Modules\Commands\ModuleMakeCommand;

class CoreMakeModel extends ModuleMakeCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'module:make-core-model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function handle(): int
    {
        $nameModule  = $this->argument('name')[0];
        parent::handle();
        return 0;
    }

}
