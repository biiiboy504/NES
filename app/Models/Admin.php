<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Admin extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
     
    
    public static $logCustomFields = [
        'last_access' => 'Last access on {elapsed_time}.'
   ];
}
