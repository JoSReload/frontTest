<?php namespace Josreload\ChenkaCrud\Composers;


use Josreload\ChenkaCrud\AppSettings\AppSettingsRepository;

class AppSettingsComposer {

    /**
     * @var \Josreload\ChenkaCrud\AppSettings\AppSettingsRepository
     */
    private $app_setting;

    function __construct(AppSettingsRepository $app_setting)
    {
        $this->app_setting = $app_setting;
    }

    public function compose($view) {
        $view->with('app_settings', $this->app_setting->getAll());
    }
} 