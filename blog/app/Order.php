<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderController
 *
 * @author  The scaffold-interface created at 2016-02-25 01:58:40pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Order extends Model
{

    public $timestamps = false;

    protected $table = 'orders';

	
	public function client()
	{
		return $this->belongsTo('App\Client');
	}

	
}
