<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: main.proto

namespace Generated\Rwg;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Ranking hints for a service.
 *
 * Generated from protobuf message <code>ServiceRankingHint</code>
 */
class ServiceRankingHint extends \Google\Protobuf\Internal\Message
{
    /**
     * Arbitrary partner or merchant assigned rank for this service.
     * Services with a lower score will be displayed more prominently (e.g.
     * displayed higher in lists).
     * Ranking hints affect both the ordering of services within a service
     * category, and the ordering of the categories themselves. The ranking hint
     * for a category is assumed to be the minimum ranking hint of any item in the
     * category. Note that other factors may also influence the final ranking,
     * such as price, user history, etc.
     * The recommended approach is to define a total ordering on all the services,
     * by assigning each one a unique integer ranking hint and ensuring that
     * ranking hint values don’t overlap between categories. For example, if we
     * want the preferred ordering of categories and services to be:
     * Category 1: A, B, C
     * Category 2: D, E, F
     * Then the simplest ranking hint scheme to indicate this would be:
     * A=1, B=2, C=3, D=4, E=5, F=6.
     * Optional. Must be non-negative if set.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     */
    protected $score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *           Arbitrary partner or merchant assigned rank for this service.
     *           Services with a lower score will be displayed more prominently (e.g.
     *           displayed higher in lists).
     *           Ranking hints affect both the ordering of services within a service
     *           category, and the ordering of the categories themselves. The ranking hint
     *           for a category is assumed to be the minimum ranking hint of any item in the
     *           category. Note that other factors may also influence the final ranking,
     *           such as price, user history, etc.
     *           The recommended approach is to define a total ordering on all the services,
     *           by assigning each one a unique integer ranking hint and ensuring that
     *           ranking hint values don’t overlap between categories. For example, if we
     *           want the preferred ordering of categories and services to be:
     *           Category 1: A, B, C
     *           Category 2: D, E, F
     *           Then the simplest ranking hint scheme to indicate this would be:
     *           A=1, B=2, C=3, D=4, E=5, F=6.
     *           Optional. Must be non-negative if set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Main::initOnce();
        parent::__construct($data);
    }

    /**
     * Arbitrary partner or merchant assigned rank for this service.
     * Services with a lower score will be displayed more prominently (e.g.
     * displayed higher in lists).
     * Ranking hints affect both the ordering of services within a service
     * category, and the ordering of the categories themselves. The ranking hint
     * for a category is assumed to be the minimum ranking hint of any item in the
     * category. Note that other factors may also influence the final ranking,
     * such as price, user history, etc.
     * The recommended approach is to define a total ordering on all the services,
     * by assigning each one a unique integer ranking hint and ensuring that
     * ranking hint values don’t overlap between categories. For example, if we
     * want the preferred ordering of categories and services to be:
     * Category 1: A, B, C
     * Category 2: D, E, F
     * Then the simplest ranking hint scheme to indicate this would be:
     * A=1, B=2, C=3, D=4, E=5, F=6.
     * Optional. Must be non-negative if set.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Arbitrary partner or merchant assigned rank for this service.
     * Services with a lower score will be displayed more prominently (e.g.
     * displayed higher in lists).
     * Ranking hints affect both the ordering of services within a service
     * category, and the ordering of the categories themselves. The ranking hint
     * for a category is assumed to be the minimum ranking hint of any item in the
     * category. Note that other factors may also influence the final ranking,
     * such as price, user history, etc.
     * The recommended approach is to define a total ordering on all the services,
     * by assigning each one a unique integer ranking hint and ensuring that
     * ranking hint values don’t overlap between categories. For example, if we
     * want the preferred ordering of categories and services to be:
     * Category 1: A, B, C
     * Category 2: D, E, F
     * Then the simplest ranking hint scheme to indicate this would be:
     * A=1, B=2, C=3, D=4, E=5, F=6.
     * Optional. Must be non-negative if set.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

}

