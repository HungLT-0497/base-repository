<?php

namespace HungLT;

use Illuminate\Support\ServiceProvider;
use HungLT\Console\RepositoryMakeCommand;
use HungLT\Console\RepositoryInterfaceMakeCommand;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $commands = [
        RepositoryMakeCommand::class,
        RepositoryInterfaceMakeCommand::class
    ];
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
    public function provides()
    {
        return ['repository'];
    }
}
