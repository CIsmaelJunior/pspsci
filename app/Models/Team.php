<?php

namespace App\Models;


use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;
    use HasSlug;

    protected $guarded = [];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
        ->generateSlugsFrom(['titre', 'nom', 'prenoms'])
        ->saveSlugsTo('slug')
        ->slugsShouldBeNoLongerThan(50);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function getFullNameAttribute()
    {
        $full_name="";

        $full_name .= $this->titre . " " ?: "";

        $full_name .= $this->nom . " " . $this->prenoms;


        return $full_name;
    }

    public function getPhotoPathAttribute()
    {
        return asset("storage/" . $this->photo);
    }

    // Dans le modèle Utilisateur.php
    public function scopeActifs($query)
    {
        return $query->where('statut', 1);
    }
}
