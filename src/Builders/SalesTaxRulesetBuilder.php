<?php

namespace KgBot\Billy\Builders;

use KgBot\Billy\Models\SalesTaxRuleset;

class SalesTaxRulesetBuilder extends Builder
{
    protected $entity = 'salesTaxRulesets';
    protected $model = SalesTaxRuleset::class;
}