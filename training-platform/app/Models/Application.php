<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'Applications';
    protected $primaryKey = 'application_id';
    public $timestamps = false;

    protected $fillable = [
        'graduate_id',
        'opportunity_id',
        'status',
    ];

    public function graduate()
    {
        return $this->belongsTo(Graduate::class, 'graduate_id', 'graduate_id');
    }

    public function opportunity()
    {
        return $this->belongsTo(OpportunityTraining::class, 'opportunity_id', 'opportunity_id');
    }
}
