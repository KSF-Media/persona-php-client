<?php
/**
 * DeliveryReclamationClaim
 *
 * PHP version 5
 *
 * @category Class
 * @package  PersonaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Persona
 *
 * KSF Media unified login service
 *
 * The version of the OpenAPI document: 1.3.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PersonaClient\Model;
use \PersonaClient\ObjectSerializer;

/**
 * DeliveryReclamationClaim Class Doc Comment
 *
 * @category Class
 * @package  PersonaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DeliveryReclamationClaim
{
    /**
     * Possible values of this enum
     */
    const EXTENSION = 'Extension';
    const NEW_DELIVERY = 'NewDelivery';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXTENSION,
            self::NEW_DELIVERY,
        ];
    }
}


