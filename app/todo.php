<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
	//Accessor - Util para modificar muitas entradas - caso contrário use ucfirst()
	//Deixa a primeira letra maiuscula antes de enviar para a view (Deve ter o memsmo nome da variável)
    public function getTitleAttribute($value){
    	return ucfirst($value);
    }

    //Mutator
    //Aplica mudanca antes de salvar a info no banco de dados (forço q a primeira letra seja maiuscula)
    public function setTitleAttribute($value){
    	return $this->attributes['Title'] = ucfirst($value);
    }
}
