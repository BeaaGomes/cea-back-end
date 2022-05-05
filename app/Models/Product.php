<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'image',
        'user_id'
    ];

    public function tryToUpdate($field, $new_value){
        $user = Auth::user();
        
        if ($user->id == $this->user_id){
            $this[$field] = $new_value;
            $this->save();
            return true;
        }

        return false;
    }

    public function tryToDelete(){
        $user = Auth::user();

        if ($user->id == $this->user_id){
            $this->deleteImage();
            $this->delete();
            return true;
        }

        return false;
    }

    public function deleteImage(){
        unlink($this->fixImagePath($this->image));
    }

    private function fixImagePath($image_path){
        return "storage/" . substr($image_path, 6);
    }
}
