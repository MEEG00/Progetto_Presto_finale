<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;


class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    protected $casts = [
        'labels'=>'array'
    ];

    public function article(){
        return $this->belongsTo(Article::class);
    }

    public static function GetUrlByFilePath($filePath, $w=null, $h=null,) {
        if (!$w && !$h) {
            return Storage::url($filePath);
        }
        $path=dirname($filePath);
        $filename=basename($filePath);
        $file="{$path}/crop_{$w}x{$h}_{$filename}";
        // dd(Storage::url($file));
        return Storage::url($file);
    }

    public function getUrl($w=null, $h=null){
        return Image::getUrlbyFilePath($this->path,$w,$h);
    }

}
