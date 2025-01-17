<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: main.proto

namespace Generated\Rwg;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The definition of a service provided by a merchant.
 *
 * Generated from protobuf message <code>Service</code>
 */
class Service extends \Google\Protobuf\Internal\Message
{
    /**
     * An opaque string from an aggregator partner which uniquely identifies a
     * merchant.
     * Required.
     *
     * Generated from protobuf field <code>string merchant_id = 1;</code>
     */
    protected $merchant_id = '';
    /**
     * An opaque string of ASCII characters from an aggregator partner which
     * uniquely identifies the service.
     * Required.
     *
     * Generated from protobuf field <code>string service_id = 2;</code>
     */
    protected $service_id = '';
    /**
     * The name of the service, e.g. "Men's haircut". Possibly in several locales.
     * Required.
     *
     * Generated from protobuf field <code>.Text localized_service_name = 3;</code>
     */
    protected $localized_service_name = null;
    /**
     * The name of the service category, e.g. "Haircut", "Shave", "Color".
     * Possibly in several locales. The category will be used to group services
     * when presented to the consumer.
     * Note: For merchants without categories on your website, you can group all
     * services into one category and use a generic name such as "All Services"
     * or "General." Merchants who have categories you should try to replicate
     * those categories.
     * Required.
     *
     * Generated from protobuf field <code>.Text localized_service_category = 4;</code>
     */
    protected $localized_service_category = null;
    /**
     * The user-visible description of the service, possibly in several locales.
     * This field is not required for every services, but is strongly
     * recommended to be filled when available.
     * Important notes:
     *   * The recommended maximum size is 2,000 characters.
     * Optional.
     *
     * Generated from protobuf field <code>.Text localized_service_description = 5;</code>
     */
    protected $localized_service_description = null;
    /**
     * The price of the service.
     * Note, if a service (or merchant) doesn't provide price up front, use
     * RangeInterpretation.INTERPRETATION_NOT_DISPLAYED as PriceInterpretation.
     * Required.
     *
     * Generated from protobuf field <code>.ServicePrice service_price = 6;</code>
     */
    protected $service_price = null;
    /**
     * An action link related to this service. Action link should deep link to the
     * 3P page with the preselected service.
     * Note: Only the first entry will be used. Other provided action links will
     * be ignored.
     * Optional, but highly recommended if service-level deep links are supported.
     * This enables service-level entrypoints on Google if provided.
     * Note: For merchants participating in Healthcare vertical should not provide
     * service-level deep link.
     *
     * Generated from protobuf field <code>repeated .ActionLink action_link = 8;</code>
     */
    private $action_link;
    /**
     * Duration of the service.
     * Note, if a service (or merchant) doesn't provide service duration, use
     * RangeInterpretation.INTERPRETATION_NOT_DISPLAYED as DurationInterpretation.
     * Required.
     *
     * Generated from protobuf field <code>.ServiceDuration service_duration = 9;</code>
     */
    protected $service_duration = null;
    /**
     * Ranking hint for this service.
     * Optional.
     *
     * Generated from protobuf field <code>.ServiceRankingHint ranking_hint = 10;</code>
     */
    protected $ranking_hint = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $merchant_id
     *           An opaque string from an aggregator partner which uniquely identifies a
     *           merchant.
     *           Required.
     *     @type string $service_id
     *           An opaque string of ASCII characters from an aggregator partner which
     *           uniquely identifies the service.
     *           Required.
     *     @type \Generated\Rwg\Text $localized_service_name
     *           The name of the service, e.g. "Men's haircut". Possibly in several locales.
     *           Required.
     *     @type \Generated\Rwg\Text $localized_service_category
     *           The name of the service category, e.g. "Haircut", "Shave", "Color".
     *           Possibly in several locales. The category will be used to group services
     *           when presented to the consumer.
     *           Note: For merchants without categories on your website, you can group all
     *           services into one category and use a generic name such as "All Services"
     *           or "General." Merchants who have categories you should try to replicate
     *           those categories.
     *           Required.
     *     @type \Generated\Rwg\Text $localized_service_description
     *           The user-visible description of the service, possibly in several locales.
     *           This field is not required for every services, but is strongly
     *           recommended to be filled when available.
     *           Important notes:
     *             * The recommended maximum size is 2,000 characters.
     *           Optional.
     *     @type \Generated\Rwg\ServicePrice $service_price
     *           The price of the service.
     *           Note, if a service (or merchant) doesn't provide price up front, use
     *           RangeInterpretation.INTERPRETATION_NOT_DISPLAYED as PriceInterpretation.
     *           Required.
     *     @type array<\Generated\Rwg\ActionLink>|\Google\Protobuf\Internal\RepeatedField $action_link
     *           An action link related to this service. Action link should deep link to the
     *           3P page with the preselected service.
     *           Note: Only the first entry will be used. Other provided action links will
     *           be ignored.
     *           Optional, but highly recommended if service-level deep links are supported.
     *           This enables service-level entrypoints on Google if provided.
     *           Note: For merchants participating in Healthcare vertical should not provide
     *           service-level deep link.
     *     @type \Generated\Rwg\ServiceDuration $service_duration
     *           Duration of the service.
     *           Note, if a service (or merchant) doesn't provide service duration, use
     *           RangeInterpretation.INTERPRETATION_NOT_DISPLAYED as DurationInterpretation.
     *           Required.
     *     @type \Generated\Rwg\ServiceRankingHint $ranking_hint
     *           Ranking hint for this service.
     *           Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Main::initOnce();
        parent::__construct($data);
    }

    /**
     * An opaque string from an aggregator partner which uniquely identifies a
     * merchant.
     * Required.
     *
     * Generated from protobuf field <code>string merchant_id = 1;</code>
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * An opaque string from an aggregator partner which uniquely identifies a
     * merchant.
     * Required.
     *
     * Generated from protobuf field <code>string merchant_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMerchantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->merchant_id = $var;

        return $this;
    }

    /**
     * An opaque string of ASCII characters from an aggregator partner which
     * uniquely identifies the service.
     * Required.
     *
     * Generated from protobuf field <code>string service_id = 2;</code>
     * @return string
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * An opaque string of ASCII characters from an aggregator partner which
     * uniquely identifies the service.
     * Required.
     *
     * Generated from protobuf field <code>string service_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_id = $var;

        return $this;
    }

    /**
     * The name of the service, e.g. "Men's haircut". Possibly in several locales.
     * Required.
     *
     * Generated from protobuf field <code>.Text localized_service_name = 3;</code>
     * @return \Generated\Rwg\Text|null
     */
    public function getLocalizedServiceName()
    {
        return $this->localized_service_name;
    }

    public function hasLocalizedServiceName()
    {
        return isset($this->localized_service_name);
    }

    public function clearLocalizedServiceName()
    {
        unset($this->localized_service_name);
    }

    /**
     * The name of the service, e.g. "Men's haircut". Possibly in several locales.
     * Required.
     *
     * Generated from protobuf field <code>.Text localized_service_name = 3;</code>
     * @param \Generated\Rwg\Text $var
     * @return $this
     */
    public function setLocalizedServiceName($var)
    {
        GPBUtil::checkMessage($var, \Generated\Rwg\Text::class);
        $this->localized_service_name = $var;

        return $this;
    }

    /**
     * The name of the service category, e.g. "Haircut", "Shave", "Color".
     * Possibly in several locales. The category will be used to group services
     * when presented to the consumer.
     * Note: For merchants without categories on your website, you can group all
     * services into one category and use a generic name such as "All Services"
     * or "General." Merchants who have categories you should try to replicate
     * those categories.
     * Required.
     *
     * Generated from protobuf field <code>.Text localized_service_category = 4;</code>
     * @return \Generated\Rwg\Text|null
     */
    public function getLocalizedServiceCategory()
    {
        return $this->localized_service_category;
    }

    public function hasLocalizedServiceCategory()
    {
        return isset($this->localized_service_category);
    }

    public function clearLocalizedServiceCategory()
    {
        unset($this->localized_service_category);
    }

    /**
     * The name of the service category, e.g. "Haircut", "Shave", "Color".
     * Possibly in several locales. The category will be used to group services
     * when presented to the consumer.
     * Note: For merchants without categories on your website, you can group all
     * services into one category and use a generic name such as "All Services"
     * or "General." Merchants who have categories you should try to replicate
     * those categories.
     * Required.
     *
     * Generated from protobuf field <code>.Text localized_service_category = 4;</code>
     * @param \Generated\Rwg\Text $var
     * @return $this
     */
    public function setLocalizedServiceCategory($var)
    {
        GPBUtil::checkMessage($var, \Generated\Rwg\Text::class);
        $this->localized_service_category = $var;

        return $this;
    }

    /**
     * The user-visible description of the service, possibly in several locales.
     * This field is not required for every services, but is strongly
     * recommended to be filled when available.
     * Important notes:
     *   * The recommended maximum size is 2,000 characters.
     * Optional.
     *
     * Generated from protobuf field <code>.Text localized_service_description = 5;</code>
     * @return \Generated\Rwg\Text|null
     */
    public function getLocalizedServiceDescription()
    {
        return $this->localized_service_description;
    }

    public function hasLocalizedServiceDescription()
    {
        return isset($this->localized_service_description);
    }

    public function clearLocalizedServiceDescription()
    {
        unset($this->localized_service_description);
    }

    /**
     * The user-visible description of the service, possibly in several locales.
     * This field is not required for every services, but is strongly
     * recommended to be filled when available.
     * Important notes:
     *   * The recommended maximum size is 2,000 characters.
     * Optional.
     *
     * Generated from protobuf field <code>.Text localized_service_description = 5;</code>
     * @param \Generated\Rwg\Text $var
     * @return $this
     */
    public function setLocalizedServiceDescription($var)
    {
        GPBUtil::checkMessage($var, \Generated\Rwg\Text::class);
        $this->localized_service_description = $var;

        return $this;
    }

    /**
     * The price of the service.
     * Note, if a service (or merchant) doesn't provide price up front, use
     * RangeInterpretation.INTERPRETATION_NOT_DISPLAYED as PriceInterpretation.
     * Required.
     *
     * Generated from protobuf field <code>.ServicePrice service_price = 6;</code>
     * @return \Generated\Rwg\ServicePrice|null
     */
    public function getServicePrice()
    {
        return $this->service_price;
    }

    public function hasServicePrice()
    {
        return isset($this->service_price);
    }

    public function clearServicePrice()
    {
        unset($this->service_price);
    }

    /**
     * The price of the service.
     * Note, if a service (or merchant) doesn't provide price up front, use
     * RangeInterpretation.INTERPRETATION_NOT_DISPLAYED as PriceInterpretation.
     * Required.
     *
     * Generated from protobuf field <code>.ServicePrice service_price = 6;</code>
     * @param \Generated\Rwg\ServicePrice $var
     * @return $this
     */
    public function setServicePrice($var)
    {
        GPBUtil::checkMessage($var, \Generated\Rwg\ServicePrice::class);
        $this->service_price = $var;

        return $this;
    }

    /**
     * An action link related to this service. Action link should deep link to the
     * 3P page with the preselected service.
     * Note: Only the first entry will be used. Other provided action links will
     * be ignored.
     * Optional, but highly recommended if service-level deep links are supported.
     * This enables service-level entrypoints on Google if provided.
     * Note: For merchants participating in Healthcare vertical should not provide
     * service-level deep link.
     *
     * Generated from protobuf field <code>repeated .ActionLink action_link = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActionLink()
    {
        return $this->action_link;
    }

    /**
     * An action link related to this service. Action link should deep link to the
     * 3P page with the preselected service.
     * Note: Only the first entry will be used. Other provided action links will
     * be ignored.
     * Optional, but highly recommended if service-level deep links are supported.
     * This enables service-level entrypoints on Google if provided.
     * Note: For merchants participating in Healthcare vertical should not provide
     * service-level deep link.
     *
     * Generated from protobuf field <code>repeated .ActionLink action_link = 8;</code>
     * @param array<\Generated\Rwg\ActionLink>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActionLink($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Generated\Rwg\ActionLink::class);
        $this->action_link = $arr;

        return $this;
    }

    /**
     * Duration of the service.
     * Note, if a service (or merchant) doesn't provide service duration, use
     * RangeInterpretation.INTERPRETATION_NOT_DISPLAYED as DurationInterpretation.
     * Required.
     *
     * Generated from protobuf field <code>.ServiceDuration service_duration = 9;</code>
     * @return \Generated\Rwg\ServiceDuration|null
     */
    public function getServiceDuration()
    {
        return $this->service_duration;
    }

    public function hasServiceDuration()
    {
        return isset($this->service_duration);
    }

    public function clearServiceDuration()
    {
        unset($this->service_duration);
    }

    /**
     * Duration of the service.
     * Note, if a service (or merchant) doesn't provide service duration, use
     * RangeInterpretation.INTERPRETATION_NOT_DISPLAYED as DurationInterpretation.
     * Required.
     *
     * Generated from protobuf field <code>.ServiceDuration service_duration = 9;</code>
     * @param \Generated\Rwg\ServiceDuration $var
     * @return $this
     */
    public function setServiceDuration($var)
    {
        GPBUtil::checkMessage($var, \Generated\Rwg\ServiceDuration::class);
        $this->service_duration = $var;

        return $this;
    }

    /**
     * Ranking hint for this service.
     * Optional.
     *
     * Generated from protobuf field <code>.ServiceRankingHint ranking_hint = 10;</code>
     * @return \Generated\Rwg\ServiceRankingHint|null
     */
    public function getRankingHint()
    {
        return $this->ranking_hint;
    }

    public function hasRankingHint()
    {
        return isset($this->ranking_hint);
    }

    public function clearRankingHint()
    {
        unset($this->ranking_hint);
    }

    /**
     * Ranking hint for this service.
     * Optional.
     *
     * Generated from protobuf field <code>.ServiceRankingHint ranking_hint = 10;</code>
     * @param \Generated\Rwg\ServiceRankingHint $var
     * @return $this
     */
    public function setRankingHint($var)
    {
        GPBUtil::checkMessage($var, \Generated\Rwg\ServiceRankingHint::class);
        $this->ranking_hint = $var;

        return $this;
    }

}

