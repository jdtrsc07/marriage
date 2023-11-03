<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use FTP_BINARY; 
class FileUpload extends Controller
{
    public function uploadFile()
    {
        $file = request()->file('file'); // Assuming you are uploading a file through a form
    
        if ($file) {
            // Store the file using the FTP disk with binary transfer mode
            Storage::disk('ftp')->put('New Directory/filename.pdf', file_get_contents($file), FTP_BINARY);
    
            return 'File uploaded successfully!';
        } else {
            return 'No file selected!';
        }
    }
}
