# PHP Reserve With Google

Reserve with Google PHP SDK, to simplify the Appointments Redirect integration.

## Installation

Use composer to install the package:

```bash
composer require highliuk/reserve-with-google
```

## Usage

```php
use HighLiuk\Rwg\Feeds\Merchants;
use HighLiuk\Rwg\Models\Merchant;

// create the merchants feed
$merchants = new Merchants;

// add a merchant to the feed
$merchant = new Merchant(
    id: 'appointments-merchant-1',
    name: 'Lorem ipsum Barbershop',
    telephone: '+11111222233',
    url: 'https://barbershop.com',
    latitude: 37.422113,
    longitude: -122.084041,
    country: 'US',
    locality: 'Mountain View',
    region: 'California',
    postal_code: '94043',
    street_address: '1600 Amphitheater Drive'
);
$merchants->add($merchant);

// export the feed
$merchants->export(__DIR__);
```

This will generate two files in the specified directory, ready to be uploaded to the Reserve With Google dropbox:

-   `merchant_{timestamp}.json.gz` - the actual feed data
-   `merchant_{timestamp}.filesetdesc.json.gz` - the fileset descriptor file

## Supported feeds

### Merchants

```php
use HighLiuk\Rwg\Models\Merchant;

$merchant = new Merchant(
    id: 'appointments-merchant-1',
    name: 'Lorem ipsum Barbershop',
    telephone: '+11111222233',
    url: 'https://barbershop.com',
    latitude: 37.422113,
    longitude: -122.084041,
    country: 'US',
    locality: 'Mountain View',
    region: 'California',
    postal_code: '94043',
    street_address: '1600 Amphitheater Drive'
);
```

Generated files:

<details>
    <summary>
        <code>merchant_{timestamp}.json.gz</code>
    </summary>

```json
{
    "data": [
        {
            "entityId": "appointments-merchant-1",
            "name": "Lorem ipsum Barbershop",
            "telephone": "+11111222233",
            "url": "https://barbershop.com",
            "location": {
                "latitude": 37.422113000000003,
                "longitude": -122.084041,
                "address": {
                    "country": "US",
                    "locality": "Mountain View",
                    "region": "California",
                    "postalCode": "94043",
                    "streetAddress": "1600 Amphitheater Drive"
                }
            }
        }
    ]
}
```

</details>

<details>
    <summary>
        <code>merchant_{timestamp}.filesetdesc.json.gz</code>
    </summary>

```json
{
    "generationTimestamp": "1725266494",
    "name": "reservewithgoogle.entity",
    "dataFile": ["merchant_1725266494.json.gz"]
}
```

</details>

### Actions

```php
use HighLiuk\Rwg\Models\Action;

$action = new Action(
    merchant_id: 'appointments-merchant-1',
    link_id: 'appointment-link-1',
    url: 'https://www.epapartnerwebsite.com/appointment/appointment-partner-1',
);
```

Generated files:

<details>
    <summary>
        <code>action_{timestamp}.json.gz</code>
    </summary>

```json
{
    "data": [
        {
            "entityId": "appointments-merchant-1",
            "linkId": "appointment-link-1",
            "url": "https://www.epapartnerwebsite.com/appointment/appointment-partner-1",
            "actions": [{ "appointmentInfo": {} }]
        }
    ]
}
```

</details>

<details>
    <summary>
        <code>action_{timestamp}.filesetdesc.json.gz</code>
    </summary>

```json
{
    "generationTimestamp": "1725266606",
    "name": "reservewithgoogle.action.v2",
    "dataFile": ["action_1725266606.json.gz"]
}
```

</details>

### Services

```php

use HighLiuk\Rwg\Feeds\Services;
use HighLiuk\Rwg\Models\Duration;
use HighLiuk\Rwg\Models\Price;
use HighLiuk\Rwg\Models\Range;
use HighLiuk\Rwg\Models\Service;
use HighLiuk\Rwg\Models\ServiceInfo;

require_once __DIR__ . '/vendor/autoload.php';

$services = new Services;

$service = new Service(
    id: 'service-1',
    merchant_id: 'appointments-merchant-1',
    localized_service_info: [
        'en' => new ServiceInfo(
            name: 'Service Type 1',
            category: 'Haircut',
            description: 'Lorem ipsum dolor sit amet'
        ),
        'es' => new ServiceInfo(
            name: 'Servicio Tipo 1',
            category: 'Cortes de pelo',
            description: 'el cliente esta muy contento'
        ),
    ],
    service_price: new Price(
        range: Range::exact(40000000),
        currency_code: 'USD',
    ),
    action_link: 'https://www.rwgpartnerwebsite.com/appointment/service-1/in-person-1',
    service_duration: new Duration(
        range: Range::exact(360),
    ),
);
```

Generated files:

<details>
    <summary>
        <code>service_{timestamp}.json.gz</code>
    </summary>

```json
{
    "data": [
        {
            "merchantId": "appointments-merchant-1",
            "serviceId": "service-1",
            "localizedServiceName": {
                "value": "Service Type 1",
                "localizedValue": [
                    { "locale": "en", "value": "Service Type 1" },
                    { "locale": "es", "value": "Servicio Tipo 1" }
                ]
            },
            "localizedServiceCategory": {
                "value": "Haircut",
                "localizedValue": [
                    { "locale": "en", "value": "Haircut" },
                    { "locale": "es", "value": "Cortes de pelo" }
                ]
            },
            "localizedServiceDescription": {
                "value": "Lorem ipsum dolor sit amet",
                "localizedValue": [
                    { "locale": "en", "value": "Lorem ipsum dolor sit amet" },
                    { "locale": "es", "value": "el cliente esta muy contento" }
                ]
            },
            "servicePrice": {
                "priceInterpretation": "INTERPRETATION_EXACT",
                "minPrice": { "priceMicros": "40000000", "currencyCode": "USD" }
            },
            "actionLink": [
                {
                    "url": "https://www.rwgpartnerwebsite.com/appointment/service-1/in-person-1"
                }
            ],
            "serviceDuration": {
                "durationInterpretation": "INTERPRETATION_EXACT",
                "minDurationSec": "360"
            }
        }
    ]
}
```

</details>

<details>
    <summary>
        <code>service_{timestamp}.filesetdesc.json.gz</code>
    </summary>

```json
{
    "generationTimestamp": "1725265955",
    "name": "glam.service.v0",
    "dataFile": ["service_1725265955.json.gz"]
}
```

</details>

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
