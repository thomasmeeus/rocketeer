<?php
namespace Rocketeer\Commands;

class DeploySetupCommand extends DeployCommand
{

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'deploy:setup';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Set up the website for deployment';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		$this->defineTasks();

		$this->remote->task('setupFolders');
	}

}