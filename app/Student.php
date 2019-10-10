<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'g_a_t_k_s';
    protected $fillable = ['email', 'fullName', 'commandLine', 'GATKfamiliar', 'analyzeData', 'researchInterests', 'position', 'inputDinner', 'inputAlhambra', 'institution', 'dietaryReq'];
}
