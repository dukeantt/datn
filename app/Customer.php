<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Symfony\Component\HttpKernel\Profiler\Profile;

class Customer extends Authenticatable
{
    protected $table = "user";

}
