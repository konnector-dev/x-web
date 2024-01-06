<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Url extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'user_id',
        'project_id',
        'url',
        'name',
        'status',
        'state',
        'last_checked_at',
        'last_up_at',
        'last_down_at',
        'downtime_duration',
        'notifications_sent',
        'notification_type',
        'notification_type_id',
        'monitoring_frequency_minutes'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
