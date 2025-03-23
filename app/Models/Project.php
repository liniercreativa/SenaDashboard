<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Project extends Model
{
    use HasFactory;
    use LogsActivity;
    protected $table = 'project';
    protected $fillable = ['name', 'image', 'description', 'description_eng', 'year', 'type', 'lat', 'lng', 'turunanbisnis', 'software'];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()->logOnlyDirty();
    }
}
