<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Announcement extends Model
{
  public function getData(){
    return $this->id . ': ' . $this->title . ' (' . $this->is_published . ')';
  }


  protected $guarded = array('id');

  public static $rules = array(
    'title' => 'required',
    'announcement' => 'required',
    'is_published' => 'integer',
    'created_by' => 'integer'
  );
}
