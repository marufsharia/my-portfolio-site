<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Index extends Component
{

    public $message = "Not Click";
    public function render()
    {
        return view('livewire.dashboard.index');
    }

    public function disableTelescope()
    {

        $this->setEnvironmentValue('TELESCOPE_ENABLED', 'telescope.enabled', 'false');
        $this->message = "Click done";
    }

    private function setEnvironmentValue($environmentName, $configKey, $newValue)
    {
        file_put_contents(App::environmentFilePath(), str_replace(
            $environmentName . '=' . Config::get($configKey),
            $environmentName . '=' . $newValue,
            file_get_contents(App::environmentFilePath())
        ));

        Config::set($configKey, $newValue);

        // Reload the cached config
        if (file_exists(App::getCachedConfigPath())) {
            Artisan::call("config:cache");
        }
    }
}