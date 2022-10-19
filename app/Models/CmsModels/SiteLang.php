<?php
namespace App\Models\CmsModels;
use Illuminate\Database\Eloquent\Model;

class SiteLang extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table = 'site_lang';
    protected $fillable = ['code', 'name', 'dir','is_main',];

}
