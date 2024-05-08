<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';  // ensure the table name matches your database schema
    protected $fillable = [
     'title', 'salary', 'employer_id' 
 ];
    public function employer()
    {
        // Corrected syntax: return statement should have a space, not an underscore
        return $this->belongsTo(Employer::class);  
   }

}
