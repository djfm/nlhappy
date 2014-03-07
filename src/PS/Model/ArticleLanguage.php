<?php

namespace PS\Model;

class ArticleLanguage extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'ArticleLanguage';
	protected $fillable = array('article_id', 'language_id');
	public $timestamps = false;
};