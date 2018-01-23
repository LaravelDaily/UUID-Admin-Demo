<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
/**
 * Class Role
 *
 * @package App
 * @property string $title
*/
class Role extends Model
{
    protected $fillable = ['title', 'uuid'];
    
    public static function boot()
	{
		parent::boot();
		self::creating(function ($model) {
			$model->uuid = (string) Uuid::generate(4);
		});
	}
	
	public function getRouteKeyName()
	{
		return 'uuid';
	}
    
}
