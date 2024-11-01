<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\ApartmentSponsor;
use App\Models\Image;
use App\Models\Message;
use App\Models\Service;
use App\Models\Sponsor;
use views;



class Apartment extends Model
{  //  protected $casts = [

//     'image' => 'array'
// ];


    protected $fillable = [
        'user_id',
        'name',
        'images',
        'address',
        'description',
        'room',
        'bed',
        'bathroom',
        'mq',
        'latitude',
        'longitude',

    ];

    use HasFactory;

    public function images()
    {
        return $this->belongsToMany(Image::class, 'apartment_images', 'apartment_id', 'image_id');
    }
    public function sponsors()
    {
        return $this->belongsToMany(Sponsor::class);
    }
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    public function views()
    {
        return $this->hasMany(views::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function slugger($string)
    {
        $baseSlug = Str::slug($string);

        $i = 1;

        $slug = $baseSlug;

        while (self::where('slug', $slug)->first()) {
            $slug = $baseSlug . '-' . $i;
            $i++;
        }

        return $slug;
    }

    public function getRouteKey()
    {
        return $this->slug;
    }

    public function active_sponsors()
    {
        return $this->sponsors(ApartmentSponsor::class)->withPivot('start_date', 'end_date');
    }
}
