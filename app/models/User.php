<?php

class User extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required|min:5',
        'email' => 'required|email'
    );

}
