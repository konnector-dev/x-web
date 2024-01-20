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
        'monitoring_frequency_minutes',
        'http_status_code',
    ];

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';

    public const STATE_UP = 'up';
    public const STATE_DOWN = 'down';
    public const STATE_PENDING = 'pending';
    public const STATE_TIMEOUT = 'timeout';
    public const STATE_ERROR = 'error';


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
