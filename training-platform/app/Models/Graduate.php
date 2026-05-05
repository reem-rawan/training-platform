<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    protected $table = 'Graduates';
    protected $primaryKey = 'graduate_id';
    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'major',
        'graduation_year',
        'ProgramID',
        'BranchID',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class, 'graduate_id', 'graduate_id');
    }
}
