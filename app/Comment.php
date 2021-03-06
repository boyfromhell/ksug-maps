<?php

namespace KSUGMap;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Traits\Tappable;

class Comment extends Model
{
    use Tappable;

    protected $guarded = [];
    public $appends = ['frontend_date'];
    protected $dates = ['approved_at'];

    public function getIsApprovedAttribute()
    {
        return filled($this->approved_at);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function scopeWhereApproved($q)
    {
        return $q->whereNotNull('approved_at');
    }

    public function approve()
    {
        return tap($this)->update([
            'approved_at' => now(),
        ]);
    }

    public function getFrontendDateAttribute()
    {
        return $this->created_at->format('m.d.Y');
    }
}
