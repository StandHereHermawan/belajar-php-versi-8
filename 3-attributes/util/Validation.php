<?php

function validate(object $object): void # Membaca Attribute via Reflection (1).
{
    $class = new ReflectionClass($object);
    $property = $class->getProperties();
    foreach ($property as $property) {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void # Membaca Attribute via Reflection (2)
{
    $attributesNotBlank = $property->getAttributes(NotBlank::class);
    if (count($attributesNotBlank) > 0) {
        if (!$property->isInitialized($object)) :
            throw new Exception("Property $property->name is null.");
        endif;
        if ($property->getValue($object) == null) :
            throw new Exception("Property $property->name is null");
        endif;
        if (trim($property->getValue($object)) == null) : # Function trim() berguna untuk menghapus spasi dan validasi kalau password isinya spasi doang akan ditolak.
            throw new Exception("Property $property->name is null");
        endif;
    }
}

function validateLength(ReflectionProperty $property, object $object): void # Membuat Attribute Class Instance.
{
    if (!$property->isInitialized($object) || $property->getValue($object) == null) :
        return; # Cancel Validation.
    endif;

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $attribute) :
        $declaredLengthAttributes = $attribute->newInstance();
        $stringPropertiesLength = strlen($value);
        if ($stringPropertiesLength < $declaredLengthAttributes->getMin()) :
            throw new Exception("Property $property->name size is too short.");
        endif;
        if ($stringPropertiesLength > $declaredLengthAttributes->getMax()) :
            throw new Exception("Property $property->name size is too long.");
        endif;
    endforeach;
}
