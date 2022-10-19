<?php
namespace App\Models\CmsModels;
use Illuminate\Database\Eloquent\Model;
class UserAccessRollsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table = 'user_access_rolls';
}