<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students_table";
    protected $primaryKey = 'id';
    protected $fillable = [
        'student_id',
        'firstname',
        'middlename',
        'lastname',
        'year_section',
        'date_of_birth',
        'address'
    ];
}
