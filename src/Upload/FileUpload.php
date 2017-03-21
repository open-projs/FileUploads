<?php
/**
 * Created by PhpStorm.
 * User: Valmir
 * Date: 20/03/2017
 * Time: 04:56
 */

namespace FileUploads\UPload;


class FileUpload
{
    private $path;
    private $files;

    function __construct($path,$files)
    {
        $this->path = $path;
        $this->files = $files;
    }


    function moveUpload(){
        $count=0;
        foreach ($this->files['name'] as $file) {
            $dirFile[] = $this->path . '\\' . basename($file);
        }
        foreach ($this->files['tmp_name'] as $file){
            move_uploaded_file($file,$dirFile[$count]);
            $count++;
        }
    }

}