<?php

//class Project extends \Eloquent {
//	protected $fillable = ['name', 'slug'];
//    public function tasks()
//    {
//        return $this->hasMany('Task');
//    }
//}
class Project extends LaravelBook\Ardent\Ardent {

    protected $fillable = ['name', 'slug'];
    public static $sluggable = array();
    public static $rules = array(
        'name'			=> 'required|min:4',
        'slug'			=> 'required',	);
    public function tasks()
    {
        return $this->hasMany('Task');
    }
}