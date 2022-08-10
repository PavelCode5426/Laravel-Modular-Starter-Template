<?php

namespace App\Modules\Example\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    protected $name = 'Example Command';
    protected $signature = 'example-command';
    protected $description = 'Description of Example Command';
}
