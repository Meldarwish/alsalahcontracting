<?php
namespace App\Models\CmsModels;
use Illuminate\Database\Eloquent\Model;
class EmailContactModelCMS extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    protected $table   = 'email_contact';
    protected $fillable = ['name', 'email','phone','subject','message','attach','date',
    'time','readed','stuts'
];
}