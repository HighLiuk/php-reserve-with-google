<?php

namespace HighLiuk\Rwg\Models;

use Generated\Rwg\ActionLink;
use Generated\Rwg\LocalizedString;
use Generated\Rwg\Service as GoogleReserveService;
use Generated\Rwg\Text;

/**
 * @implements Model<GoogleReserveService>
 */
class Service implements Model
{
    /**
     * @param  non-empty-array<string,ServiceInfo>  $localized_service_info
     */
    public function __construct(
        public readonly string $id,
        public readonly string $merchant_id,
        public readonly array $localized_service_info,
        public readonly Price $service_price,
        public readonly ?string $action_link,
        public readonly Duration $service_duration,
    ) {}

    public function toMessage(): GoogleReserveService
    {
        $service = (new GoogleReserveService)
            ->setMerchantId($this->merchant_id)
            ->setServiceId($this->id)
            ->setServicePrice($this->service_price->toMessage())
            ->setServiceDuration($this->service_duration->toMessage());

        if ($this->action_link !== null) {
            $service->setActionLink([
                (new ActionLink)
                    ->setUrl($this->action_link),
            ]);
        }

        $localized_names = [];
        $localized_categories = [];
        $localized_descriptions = [];

        foreach ($this->localized_service_info as $locale => $service_info) {
            $first_service_info ??= $service_info;

            $localized_names[] = (new LocalizedString)
                ->setLocale($locale)
                ->setValue($service_info->name);
            $localized_categories[] = (new LocalizedString)
                ->setLocale($locale)
                ->setValue($service_info->category);
            $localized_descriptions[] = (new LocalizedString)
                ->setLocale($locale)
                ->setValue($service_info->description);
        }

        return $service
            ->setLocalizedServiceName(
                (new Text)
                    ->setValue($first_service_info->name)
                    ->setLocalizedValue($localized_names)
            )
            ->setLocalizedServiceCategory(
                (new Text)
                    ->setValue($first_service_info->category)
                    ->setLocalizedValue($localized_categories)
            )
            ->setLocalizedServiceDescription(
                (new Text)
                    ->setValue($first_service_info->description ?? '')
                    ->setLocalizedValue($localized_descriptions)
            );
    }
}
