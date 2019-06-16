<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use SMartins\PassportMultiauth\HasMultiAuthApiTokens;

class Company extends Authenticatable
{
    use HasMultiAuthApiTokens;
}
