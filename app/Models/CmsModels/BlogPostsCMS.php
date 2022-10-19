<?php
namespace App\Models\CmsModels;
use Illuminate\Database\Eloquent\Model;
class BlogPostsCMS extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table = 'blog';
}