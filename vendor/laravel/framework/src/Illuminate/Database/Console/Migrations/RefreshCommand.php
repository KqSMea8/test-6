<?php
 namespace Illuminate\Database\Console\Migrations; use Illuminate\Console\Command; use Illuminate\Console\ConfirmableTrait; use Symfony\Component\Console\Input\InputOption; class RefreshCommand extends Command { use ConfirmableTrait; protected $name = 'migrate:refresh'; protected $description = 'Reset and re-run all migrations'; public function handle() { if (! $this->confirmToProceed()) { return; } $database = $this->input->getOption('database'); $path = $this->input->getOption('path'); $force = $this->input->getOption('force'); $step = $this->input->getOption('step') ?: 0; if ($step > 0) { $this->runRollback($database, $path, $step, $force); } else { $this->runReset($database, $path, $force); } $this->call('migrate', [ '--database' => $database, '--path' => $path, '--force' => $force, ]); if ($this->needsSeeding()) { $this->runSeeder($database); } } protected function runRollback($database, $path, $step, $force) { $this->call('migrate:rollback', [ '--database' => $database, '--path' => $path, '--step' => $step, '--force' => $force, ]); } protected function runReset($database, $path, $force) { $this->call('migrate:reset', [ '--database' => $database, '--path' => $path, '--force' => $force, ]); } protected function needsSeeding() { return $this->option('seed') || $this->option('seeder'); } protected function runSeeder($database) { $this->call('db:seed', [ '--database' => $database, '--class' => $this->option('seeder') ?: 'DatabaseSeeder', '--force' => $this->option('force'), ]); } protected function getOptions() { return [ ['database', null, InputOption::VALUE_OPTIONAL, 'The database connection to use.'], ['force', null, InputOption::VALUE_NONE, 'Force the operation to run when in production.'], ['path', null, InputOption::VALUE_OPTIONAL, 'The path of migrations files to be executed.'], ['seed', null, InputOption::VALUE_NONE, 'Indicates if the seed task should be re-run.'], ['seeder', null, InputOption::VALUE_OPTIONAL, 'The class name of the root seeder.'], ['step', null, InputOption::VALUE_OPTIONAL, 'The number of migrations to be reverted & re-run.'], ]; } } 