<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1\Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Inserts a slate.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.Event.SlateTask</code>
 */
class SlateTask extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Duration of the slate. Must be greater than 0 if specified.
     * Omit this field for a long running slate.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     */
    protected $duration = null;
    /**
     * Slate asset to use for the duration. If its duration is less than the
     * duration of the SlateTask, then it will be looped. The slate must be
     * represented in the form of:
     * `projects/{project}/locations/{location}/assets/{assetId}`.
     *
     * Generated from protobuf field <code>string asset = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $asset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $duration
     *           Optional. Duration of the slate. Must be greater than 0 if specified.
     *           Omit this field for a long running slate.
     *     @type string $asset
     *           Slate asset to use for the duration. If its duration is less than the
     *           duration of the SlateTask, then it will be looped. The slate must be
     *           represented in the form of:
     *           `projects/{project}/locations/{location}/assets/{assetId}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Duration of the slate. Must be greater than 0 if specified.
     * Omit this field for a long running slate.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Optional. Duration of the slate. Must be greater than 0 if specified.
     * Omit this field for a long running slate.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Slate asset to use for the duration. If its duration is less than the
     * duration of the SlateTask, then it will be looped. The slate must be
     * represented in the form of:
     * `projects/{project}/locations/{location}/assets/{assetId}`.
     *
     * Generated from protobuf field <code>string asset = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Slate asset to use for the duration. If its duration is less than the
     * duration of the SlateTask, then it will be looped. The slate must be
     * represented in the form of:
     * `projects/{project}/locations/{location}/assets/{assetId}`.
     *
     * Generated from protobuf field <code>string asset = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset = $var;

        return $this;
    }

}


