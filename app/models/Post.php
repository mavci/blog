<?php

class Post extends Eloquent {

	protected $fillable = array('title', 'slug', 'content', 'user_id');

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = $value;

		$this->attributes['slug'] = Str::slug($value);
	}

}