<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTranslation extends Model
{ 
    use HasFactory; 
    use Translatable; // 2. To add translation methods

    // 3. To define which attributes needs to be translated
    protected $guarded = [];
    
}