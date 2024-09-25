<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
   
    use HasFactory;
    protected $fillable = ['name', 'email', 'telephone'];
    protected $allowIncluded = ['Followup'];
    protected $allowFilter = ['id', 'name', 'email', 'telephone'];
    protected $allowSort = ['id', 'name', 'email', 'telephone'];
    
    public function Followup(){
        return $this->hasMany('\App\Models\Followup');
    }

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

        // Ejecutamos el query con las relaciones permitidas
        $query->with($relations);
    }
     //return $relations;
    // return $this->allowIncluded;
    public function scopeFilter(Builder $query)
    {

        if (empty($this->allowFilter) || empty(request('filter'))) {
            return;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $filter => $value) {

            if ($allowFilter->contains($filter)) {

                $query->where($filter, 'LIKE', '%' . $value . '%');//nos retorna todos los registros que conincidad, asi sea en una porcion del texto
            }
        }
    }
    public function scopeSort(Builder $query)
{
    if (empty($this->allowSort) || empty(request('sort'))) {
        return; // Salimos si no hay nada que ordenar
    }


    $sortFields = explode(',', request('sort'));

    // Colocamos en una colección lo que tiene $allowSort
    $allowSort = collect($this->allowSort);

    foreach ($sortFields as $sortField) {

        $direction = 'asc';

        if (substr($sortField, 0, 1) === '-') {
            $direction = 'desc';
            $sortField = substr($sortField, 1); 
        }

        // Si el campo de ordenamiento está permitido, lo agregamos a la consulta
        if ($allowSort->contains($sortField)) {
            $query->orderBy($sortField, $direction); // Ejecutamos la query con la dirección deseada
        }
    }


}

}
