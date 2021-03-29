<?php

namespace App;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;


class Personne extends Model
{
 
    protected $table = 'personne';
    protected $fillable = array('parent_id','order','nom');
    public static $rules = array(
                             'parent_id'=>'required',
                                'order'=>'required',
                                 'nom'=>'required'
                                
                              
                                
                                );
      

             public function parent()
             {
            return $this->belongsTo(Personne::class ,'parent_id');
            }
}
?>