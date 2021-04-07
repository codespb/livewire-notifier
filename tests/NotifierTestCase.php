<?php
namespace Codemotion\LaraveLivewireNotifier\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Codemotion\LaraveLivewireNotifier\LaravelLivewireNotifierServiceProvider;

class TestCase extends OrchestraTestCase
{
  public function setUp(): void
  {
    parent::setUp();
    // additional setup
  }

  protected function getPackageProviders($app)
  {
    return [
    LaravelLivewireNotifierServiceProvider::class,
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    // perform environment setup
  }
}