<?php

namespace HighLiuk\Rwg\Models;

use Generated\Rwg\Entity;
use Generated\Rwg\GeoCoordinates;
use Generated\Rwg\PostalAddress;

/**
 * @implements Model<Entity>
 */
class Merchant implements Model
{
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly string $telephone,
        public readonly string $url,
        public readonly float $latitude,
        public readonly float $longitude,
        public readonly string $country,
        public readonly string $locality,
        public readonly string $region,
        public readonly string $postal_code,
        public readonly string $street_address,
    ) {}

    public function toMessage(): Entity
    {
        return (new Entity)
            ->setEntityId($this->id)
            ->setName($this->name)
            ->setTelephone($this->telephone)
            ->setUrl($this->url)
            ->setLocation(
                (new GeoCoordinates)
                    ->setLatitude($this->latitude)
                    ->setLongitude($this->longitude)
                    ->setAddress(
                        (new PostalAddress)
                            ->setCountry($this->country)
                            ->setLocality($this->locality)
                            ->setRegion($this->region)
                            ->setPostalCode($this->postal_code)
                            ->setStreetAddress($this->street_address)
                    )
            );
    }
}
