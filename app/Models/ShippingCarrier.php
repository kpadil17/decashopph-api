<?php
/**
 * Class OrderCarrier 
 *
 * @package App\Models
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ShippingCarrier;

class ShippingCarrier extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'de_shipping_carrier';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_shipping_method';
}