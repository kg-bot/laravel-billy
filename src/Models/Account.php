<?php
/**
 * Created by PhpStorm.
 * User: nts
 * Date: 19.4.18.
 * Time: 01.30
 */

namespace KgBot\Billy\Models;


use KgBot\Billy\Utils\Model;

class Account extends Model
{
    protected $entity     = 'accounts';
    protected $primaryKey = 'id';
}
