<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ContactEmail extends Model
{
    public $fillable =
    ['name','from','subject','to','msg'];
}
