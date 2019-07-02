<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GATK extends Model
{
    //recoger los campos del formulario que se meteran en la bd
    protected $fillable = [
        'commandLine',
        'GATKfamiliar',
        'analyzeData',
        'inputBenefit',
        'researchInterests',
        'institution',
        'position',
        'fullName',
        'email',
        'inputDinner',
        'inputAlhambra',
        'dietaryReq',
        'waitingList'
    ];
}
