<?php

namespace PS\Model;

class Language extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'Language';
	protected $fillable = array('code');
	public $timestamps = false;

	public function newsletterLanguages()
	{
		return $this->hasMany('PS\Model\NewsletterLanguage');
	}

	public function articles()
	{
		return $this->belongsToMany('PS\Model\NewsletterArticle', 'ArticleLanguage', 'article_id', 'language_id');
	}
};