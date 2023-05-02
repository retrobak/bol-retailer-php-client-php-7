<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Values extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'value' => [ 'model' => null, 'array' => false ],
            'unitId' => [ 'model' => null, 'array' => false ],
            'valueId' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The value of the attribute.
     */
    public $value;

    /**
     * @var string The unit identifier of the attribute.
     */
    public $unitId;

    /**
     * @var string The identifier of the attribute's value.
     */
    public $valueId;
}
