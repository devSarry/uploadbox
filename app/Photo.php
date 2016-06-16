<?php

namespace App;

use DebugBar;
use Illuminate\Database\Eloquent\Model;
use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model {


    protected $fillable = ['name', 'file_name', 'path', 'thumbnail_name'];

    protected $file;


    /**
     *
     */
    protected static function boot()
    {
        static::created(function ($photo)
        {
            return $photo->upload();
        });
    }

    /**
     * Get all of the owning imageable models.
     */
    public function imageable()
    {
        return $this->morphTo();
    }

    /**
     * Anytime we say $photo->name = new.jpg we want to update the path and the thumbnail path too
     *
     * @param $name
     */
    public function setFileNameAttribute($name)
    {
        $this->attributes['file_name'] = $name;

        $this->path = $this->baseDir() . '/' . $name;

        $this->thumbnail_path = $this->baseDir() . '/tn-' . $name;
    }

    /**
     * Create a Photo object from a file
     *
     * @param UploadedFile $file
     * @return static
     */
    public static function fromFile(UploadedFile $file)
    {
        $photo = new static;

        $photo->file = $file; //setting the file object to the Photo class


        $photo->fill([
            'name' => $file->getClientOriginalName(),
            'file_name' => $photo->fileName()
        ]);

        return $photo;
    }

    /**
     * @return string
     */
    public function baseDir()
    {
        return 'uploads/photos';
    }

    /**
     * Prepare the file name that will be used on the saved image
     *
     * @return mixed
     */
    public function fileName()
    {
        return time() . str_replace(' ', '_', $this->file->getClientOriginalName());
    }



    /**
     * Save the photo in a public directory
     *
     */
    public function upload()
    {
        $this->file->move($this->baseDir(), $this->file_name);

        $this->makeThumbnail();
    }

    /**
     *
     */
    public function makeThumbnail()
    {
        $img = Image::make($this->path)
            ->fit(400)
            ->save($this->thumbnail_path);
    }

    public function crop()
    {

    }

}
