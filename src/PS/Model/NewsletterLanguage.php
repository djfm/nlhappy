<?php

namespace PS\Model;

class NewsletterLanguage extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'NewsletterLanguage';
	protected $fillable = array('title', 'title_size', 'edito');
	public $timestamps = false;

	public function newsletter()
	{
		return $this->belongsTo('PS\Model\Newsletter');
	}

	public function language()
	{
		return $this->belongsTo('PS\Model\Language');
	}

	public function articles()
	{
		//return $this->language->articles();
		return $this->hasMany('PS\Model\NewsletterArticle');
		/*
		return $this->hasManyThrough(
			'PS\Model\NewsletterArticle',
			'PS\Model\ArticleLanguage'
		);*/
	}

	public function fetchArticles()
	{

	}
};