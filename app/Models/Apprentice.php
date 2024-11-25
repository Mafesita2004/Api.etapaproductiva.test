<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Apprentice extends Model
{
    use HasFactory;
    public function Contract(){
        return $this->belongsTo(Contract::class, 'id_contract');
    }
    public function Trainer(){
        return $this->belongsTo(Trainer::class, 'id_trainer');
    }
     // Relación con la tabla contracts

     // Relación con la tabla followups
     public function followup()
     {
         return $this->belongsTo(Followup::class, 'id_followup');
     }

     // Relación con la tabla companies
     public function company()
     {
         return $this->belongsTo(Company::class, 'id_company');
     }

    public function Message(){
        return $this->hasMany('App\Models\Message');
    }

    protected $fillable = ['id','program', 'ficha'];

    protected $allowIncluded = [];

    protected $allowFilter = ['id','program', 'ficha'];

    protected $allowSort = ['id','program', 'ficha'];

    public function scopeIncluded(Builder $query)
    {
        if (empty($this->allowIncluded) || empty(request('included'))) {
            return;
        }

        $relations = explode(',', request('included'));
        $allowIncluded = collect($this->allowIncluded);

        foreach ($relations as $key => $relationship) {
            if (!$allowIncluded->contains($relationship)) {
                unset($relations[$key]);
            }
        }

        $query->with($relations);
    }

    public function scopeFilter(Builder $query)
    {
        if (empty($this->allowFilter) || empty(request('filter'))) {
            return;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $field => $value) {
            if ($allowFilter->contains($field)) {
                $query->where($field, $value);
            }
        }
    }

    public function scopeSort(Builder $query)
    {
        if (empty($this->allowSort) || empty(request('sort'))) {
            return;
        }

        $sortFields = explode(',', request('sort'));
        $allowSort = collect($this->allowSort);

        foreach ($sortFields as $sortField) {
            $direction = 'asc';

            if (substr($sortField, 0, 1) === '-') {
                $direction = 'desc';
                $sortField = substr($sortField, 1);
            }

            if ($allowSort->contains($sortField)) {
                $query->orderBy($sortField, $direction);
            }
        }
    }
}


