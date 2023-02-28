<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    public function getDate()
    {
        $date = date("M d Y", strtotime($this->sale_date));
        return $date;
    }
}
