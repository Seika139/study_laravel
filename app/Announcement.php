<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public function getData(){
      return $this->id . ': ' . $this->title . ' (' . $this->is_published . ')';
    }
}
