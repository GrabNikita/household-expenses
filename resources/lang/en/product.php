<?php

use App\Casts\ProductAmountType;
use App\Casts\ProductUnit;

return [
    'createPageHeader' => 'Creating product',
    'listPageHeader' => 'Products',
    'editPageHeader' => 'Edit product ":Name"',
    'showPageHeader' => 'Product ":Name"',
    'createLinkText' => 'Create product',
    'propertyName_id' => 'Id',
    'propertyName_name' => 'Name',
    'propertyName_amount' => 'Amount',
    'propertyName_unit' => 'Unit',
    'unitValue_' . ProductUnit::UNDEFINED => 'Undefined',
    'unitValue_' . ProductUnit::PIECE => 'Piece',
    'unitValue_' . ProductUnit::KILOGRAM => 'Kilogram',
    'unitValue_' . ProductUnit::LITER => 'Liter',
    'propertyName_amount_type' => 'Amount type',
    'amountTypeValue_' . ProductAmountType::UNDEFINED => 'Undefined',
    'amountTypeValue_' . ProductAmountType::BY_PIECE => 'By piece',
    'amountTypeValue_' . ProductAmountType::BY_WEIGHT => 'By weight',
    'propertyName_manufacturer' => 'Manufacturer',
    'propertyName_created_at' => 'Created at',
    'propertyName_updated_at' => 'Updated at',
    'propertyName_markets' => 'Markets',
    'notSelectOptionLabel' => 'Not selected',
];
