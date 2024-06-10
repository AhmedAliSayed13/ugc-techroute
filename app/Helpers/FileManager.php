<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
class FileManager
{
    protected $disk;

    public function __construct($disk = 'public')
    {
        $this->disk = $disk;
    }

    public function uploadFile(UploadedFile $file, $directory = 'uploads')
    {
        $extension = $file->getClientOriginalExtension();
        $timestamp = Carbon::now()->timestamp;
        $filename =  Str::random(10).$timestamp . '.' . $extension;
        $path = Storage::disk($this->disk)->putFileAs($directory, $file, $filename);
        return $path;
    }

    public function deleteFile($path)
    {
        Storage::disk($this->disk)->delete($path);
    }

    public function updateFile($path, UploadedFile $file=null, $directory = 'uploads')
    {
        if($file){
        $extension = $file->getClientOriginalExtension();
        $timestamp = Carbon::now()->timestamp;
        $filename = 'type_' . $timestamp . '.' . $extension;
        Storage::disk($this->disk)->delete($path);
        $path = Storage::disk($this->disk)->putFileAs($directory, $file, $filename);
        }
        return $path;
    }
    public function getFileUrl($path)
    {
        return Storage::disk($this->disk)->url($path);
    }
}
