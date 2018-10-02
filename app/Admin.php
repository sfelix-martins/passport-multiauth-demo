<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use SMartins\PassportMultiauth\HasMultiAuthApiTokens;

class Admin extends Authenticatable
{
    use Notifiable, HasMultiAuthApiTokens;
}
