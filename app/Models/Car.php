<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'description'];

    protected $hidden = ['updated_at'];

    protected $visible = ['name', 'founded', 'description'];

    public function carmodels() {
        return $this->hasMany(CarModel::class);
    } // End carmodels

    public function engines() {
        return $this->hasManyThrough(
            Engine::class, 
            CarModel::class,
            'car_id', // fk on CarModel
            'model_id' // fk on Engine
        );
    } // End engines

    // Define a has one through
    public function productionDate() {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id', // fk on CarProductionDate
            'model_id' // fk on CarModel
        );
    } // End productionDate

    public function products() {
        return $this->belongsToMany(Product::class);
    } // End products
}

