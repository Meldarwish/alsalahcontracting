<?php
namespace App\Models\CmsModels;
use Illuminate\Database\Eloquent\Model;

class GallerySectionsModelCMS extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table = 'photos_videos_sections';
    protected $fillable = ['langkey', 'name', 'stuts','trype',];

}


