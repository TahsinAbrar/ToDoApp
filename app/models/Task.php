<?php

class Task extends \Eloquent {
//    public static $relationsData = array(
//        'project' => array(self::BELONGS_TO, 'Project')
//    );
    public static $sluggable = array();
	protected $fillable = ['project_id', 'name', 'slug', 'completed', 'description','image'];

    public static $rules = array(
        'name'			=> 'required|min:4',
        'slug'			=> 'required|unique:tasks',
        'description'	=> 'required',
    );
    public function project()
    {
        return $this->belongsTo('Project');
    }
}