<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScientificWork extends Model
{
    use HasFactory;

	// Disable timestamps
	public $timestamps = false;

	protected $appends = ['author', 'info'];

	protected $fillable = [
		'subarea_id', 'title', 'publish_date', 'abstract', 'keywords', 'pdf_url', 'user_id'
	];

	public function getAuthorAttribute() {
		return User::find($this->user_id)->name;
	}

	public function getInfoAttribute() {
		return $this->publish_date;
	}
}
