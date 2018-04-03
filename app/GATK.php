<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GATK extends Model
{
    //Esto es para recoger los campos del formulario que se meteran en la bd
    protected $fillable = [
        'commandLine',
        'GATKfamiliar',
        'analyzeData',
        'inputBenefit', 
        'inputInterests', 
        'inputCompany', 
        'inputPosition', 
        'inputFullName',
        'inputEmail'    ];
}