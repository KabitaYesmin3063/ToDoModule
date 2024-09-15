<?php
namespace App\Models;
use App\Http\Controllers\TodoController;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Todo extends Model
{
   
    protected $fillable = [
        'title', 'description', 'location', 'address', 'due_date'
    ];
}


