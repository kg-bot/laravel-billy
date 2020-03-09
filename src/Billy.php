<?php
/**
 * Created by PhpStorm.
 * User: nts
 * Date: 31.3.18.
 * Time: 15.12
 */

namespace KgBot\Billy;


use KgBot\Billy\Builders\AccountBuilder;
use KgBot\Billy\Builders\BillBuilder;
use KgBot\Billy\Builders\CountryBuilder;
use KgBot\Billy\Builders\CurrencyBuilder;
use KgBot\Billy\Builders\CustomerBuilder;
use KgBot\Billy\Builders\CustomerGroupBuilder;
use KgBot\Billy\Builders\EmployeeBuilder;
use KgBot\Billy\Builders\InventoryAdjustmentBuilder;
use KgBot\Billy\Builders\InventoryMovementBuilder;
use KgBot\Billy\Builders\InvoiceBuilder;
use KgBot\Billy\Builders\JournalBuilder;
use KgBot\Billy\Builders\LocationBuilder;
use KgBot\Billy\Builders\LotBuilder;
use KgBot\Billy\Builders\OrderBuilder;
use KgBot\Billy\Builders\PaymentTermBuilder;
use KgBot\Billy\Builders\ProductBuilder;
use KgBot\Billy\Builders\ProductGroupBuilder;
use KgBot\Billy\Builders\ProductionOrderBuilder;
use KgBot\Billy\Builders\SalesTaxRulesetBuilder;
use KgBot\Billy\Builders\SupplierBuilder;
use KgBot\Billy\Builders\Variation\VariationBuilder;
use KgBot\Billy\Utils\Request;

class Billy
{
    /**
     * @var $request Request
     */
    protected $request;

    /**
     * Rackbeat constructor.
     *
     * @param null  $token   API token
     * @param array $options Custom Guzzle options
     * @param array $headers Custom Guzzle headers
     */
    public function __construct( $token = null, $options = [], $headers = [] )
    {
        $this->initRequest( $token, $options, $headers );
    }

    /**
     * @param       $token
     * @param array $options
     * @param array $headers
     */
    private function initRequest( $token, $options = [], $headers = [] )
    {
        $this->request = new Request( $token, $options, $headers );
    }

    /**
     * @return SupplierBuilder
     */
    public function suppliers()
    {
        return new SupplierBuilder( $this->request );
    }

    /**
     * @return ProductBuilder
     */
    public function products()
    {
        return new ProductBuilder( $this->request );
    }

    /**
     * @return CustomerBuilder
     */
    public function customers()
    {
        return new CustomerBuilder( $this->request );
    }

    /**
     * @return PaymentTermBuilder
     */
    public function paymentTerms( $organizationId )
    {
        return new PaymentTermBuilder( $this->request, $organizationId );
    }

    /**
     * @return CountryBuilder
     */
    public function countries()
    {
        return new CountryBuilder( $this->request );
    }

    /**
     * @return CurrencyBuilder
     */
    public function currencies()
    {
        return new CurrencyBuilder( $this->request );
    }

    /**
     * @return InvoiceBuilder
     */
    public function invoices()
    {
        return new InvoiceBuilder( $this->request );
    }

    /**
     * @return AccountBuilder
     */
    public function accounts()
    {
        return new AccountBuilder( $this->request );
    }

    /**
     * @return JournalBuilder
     */
    public function journals()
    {
        return new JournalBuilder($this->request);
    }

    /**
     * @return BillBuilder
     */
    public function bills()
    {
        return new BillBuilder($this->request);
    }

    /**
     * @return SalesTaxRulesetBuilder
     */
    public function sales_tax_rulesets(): SalesTaxRulesetBuilder
    {
        return new SalesTaxRulesetBuilder($this->request);
    }
}