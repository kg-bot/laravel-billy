<?php
/**
 * Created by PhpStorm.
 * User: nts
 * Date: 31.3.18.
 * Time: 16.48
 */

namespace KgBot\Models;


use KgBot\Utils\Model;

class Supplier extends Model
{
    public $number;
    public $company_name;

    protected $entity     = 'suppliers';
    protected $primaryKey = 'id';
    protected $fillable   = [

        "number",
        "company_name",
        "company_vat",
        "address_street",
        "address_street2",
        "address_city",
        "address_zipcode",
        "address_country",
        "contact_email",
        "contact_phone",
        "locale",
        "currency",
        "vat_zone",
        "payment_terms_id",
        "supplier_group_id",
    ];
}