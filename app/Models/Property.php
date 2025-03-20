<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	 use HasFactory;
	
	protected $table = 'clients';
	
    protected $fillable = [
		'title', 
		'description', 
		'num_of_bedrooms', 
		'num_of_bathrooms', 
		'location', 
		'price', 
		'property_type', 
		'photo'
	];
	
	public $timestamps = true;

}
