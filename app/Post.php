<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public function getPaginateByLimit(int $limit_count = 100)
 {
    return $this->orderBy('updated_at', 'ASC')->paginate($limit_count);
 }
}
