<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use DB;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    
    protected $table = 'users';

    protected $primaryKey = 'id_user';

	public $timestamps = false;

    protected $fillable = [
        'id_user',
        'username',
        'password'
    ];

    protected $guarded = [];

    public function getAuthPassword() {
        return $this->password;
    }

}
