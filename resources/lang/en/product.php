<?php

use App\Casts\Unit;

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
    'unitValue_' . Unit::UNDEFINED => 'Undefined',
    'unitValue_' . Unit::PIECE => 'Piece',
    'unitValue_' . Unit::KILOGRAM => 'Kilogram',
    'unitValue_' . Unit::LITER => 'Liter',
    'propertyName_manufacturer' => 'Manufacturer',
    'propertyName_created_at' => 'Created at',
    'propertyName_updated_at' => 'Updated at',
    'propertyName_markets' => 'Markets',
];
