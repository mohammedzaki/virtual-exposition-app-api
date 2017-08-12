<?php

namespace App\Constants;

use Illuminate\Support\Facades\Facade;

class SessionKeyFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'SessionKey';
    }

}
