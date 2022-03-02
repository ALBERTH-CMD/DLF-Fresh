<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\DarkModeWasToggled;
use JeroenNoten\LaravelAdminLte\Events\ReadingDarkModePreference;
use Illuminate\Support\Facades\Log;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
         // Register listener for ReadingDarkModePreference event. We use this
        // event to setup dark mode initial status for AdminLTE package.

        Event::listen(
            ReadingDarkModePreference::class,
            [$this, 'handleReadingDarkModeEvt']
        );

        // Register listener for DarkModeWasToggled AdminLTE event.

        Event::listen(
            DarkModeWasToggled::class,
            [$this, 'handleDarkModeWasToggledEvt']
        );
    }

    public function handleReadingDarkModeEvt(ReadingDarkModePreference $event)
    {
        // TODO: Implement the next method to get the dark mode preference for the
        // current authenticated user. Usually this preference will be stored on a database,
        // it is your task to get it.

        /*$darkModeCfg = $this->getDarkModeSettingFromDB();

        // Setup initial dark mode preference.

        if ($darkModeCfg) {
            $event->darkMode->enable();
        } else {
            $event->darkMode->disable();
        }*/
    }

    public function handleDarkModeWasToggledEvt(DarkModeWasToggled $event)
    {
        // Get the new dark mode preference (enabled or not).

        $darkModeCfg = $event->darkMode->isEnabled();

        if ($darkModeCfg) {
            Log::debug("Dark mode preference is now enabled!");
        } else {
            Log::debug("Dark mode preference is now disabled!");
        }

        // Store the new dark mode preference on the database.

        $this->storeDarkModeSettingOnDB($darkModeCfg);

        // TODO: Implement previous method to store the new dark mode
        // preference for the authenticated user. Usually this preference will
        // be stored on a database, it is your task to store it.
    }
}
