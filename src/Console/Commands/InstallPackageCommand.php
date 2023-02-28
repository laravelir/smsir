<?php

namespace Laravelir\SMSIR\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallPackageCommand extends Command
{
    protected $signature = 'smsir:install';

    protected $description = 'Install the package SMSIR';

    public function handle()
    {
        $this->line("\t... Welcome To SMSIR Installer ...");


        //config
        if (File::exists(config_path('smsir.php'))) {
            $confirm = $this->confirm("package.php already exist. Do you want to overwrite?");
            if ($confirm) {
                $this->publishConfig();
                $this->info("config overwrite finished");
            } else {
                $this->info("skipped config publish");
            }
        } else {
            $this->publishConfig();
            $this->info("config published");
        }


        $this->info("SMSIR Successfully Installed.\n");
        $this->info("\t\tGood Luck.");
    }


    private function publishConfig()
    {
        $this->call('vendor:publish', [
            '--provider' => "Laravelir\\SMSIR\\Providers\\SMSIRServiceProvider",
            '--tag'      => 'smsir-config',
            '--force'    => true
        ]);
    }
}
