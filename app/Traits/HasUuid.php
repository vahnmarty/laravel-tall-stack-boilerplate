<?php

 
namespace App\Traits;
 
trait HasUuid {
 
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->uuid = (string) \Str::uuid();
        }); 
    }

    public function scopeUuid($query, $uuid){
        return $query->where('uuid', $uuid);
    }

    public function getSimpleUuidAttribute(){
        $uuid = explode('-', $this->uuid);
        return $uuid[0];
    }
 
}