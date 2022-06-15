<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/outputs.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Manifest configuration.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.Manifest</code>
 */
class Manifest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the generated file. The default is `manifest` with the
     * extension suffix corresponding to the `Manifest` [type][google.cloud.video.livestream.v1.Manifest.type]. If multiple
     * manifests are added to the channel, each must have a unique file name.
     *
     * Generated from protobuf field <code>string file_name = 1;</code>
     */
    protected $file_name = '';
    /**
     * Required. Type of the manifest, can be `HLS` or `DASH`.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Manifest.ManifestType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * Required. List of `MuxStream` [key][google.cloud.video.livestream.v1.MuxStream.key]s that should appear in this
     * manifest.
     * - For HLS, either `fmp4` or `ts` mux streams can be specified but not
     * mixed.
     * - For DASH, only `fmp4` mux streams can be specified.
     *
     * Generated from protobuf field <code>repeated string mux_streams = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mux_streams;
    /**
     * Maximum number of segments that this manifest holds. Once the manifest
     * reaches this maximum number of segments, whenever a new segment is added to
     * the manifest, the oldest segment will be removed from the manifest.
     * The minimum value is 3 and the default value is 5.
     *
     * Generated from protobuf field <code>int32 max_segment_count = 4;</code>
     */
    protected $max_segment_count = 0;
    /**
     * How long to keep a segment on the output Google Cloud Storage bucket after
     * it is removed from the manifest. This field should be large enough to cover
     * the manifest propagation delay. Otherwise, a player could receive 404
     * errors while accessing segments which are listed in the manifest that the
     * player has, but were already deleted from the output Google Cloud Storage
     * bucket. Default value is `60s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration segment_keep_duration = 5;</code>
     */
    protected $segment_keep_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file_name
     *           The name of the generated file. The default is `manifest` with the
     *           extension suffix corresponding to the `Manifest` [type][google.cloud.video.livestream.v1.Manifest.type]. If multiple
     *           manifests are added to the channel, each must have a unique file name.
     *     @type int $type
     *           Required. Type of the manifest, can be `HLS` or `DASH`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $mux_streams
     *           Required. List of `MuxStream` [key][google.cloud.video.livestream.v1.MuxStream.key]s that should appear in this
     *           manifest.
     *           - For HLS, either `fmp4` or `ts` mux streams can be specified but not
     *           mixed.
     *           - For DASH, only `fmp4` mux streams can be specified.
     *     @type int $max_segment_count
     *           Maximum number of segments that this manifest holds. Once the manifest
     *           reaches this maximum number of segments, whenever a new segment is added to
     *           the manifest, the oldest segment will be removed from the manifest.
     *           The minimum value is 3 and the default value is 5.
     *     @type \Google\Protobuf\Duration $segment_keep_duration
     *           How long to keep a segment on the output Google Cloud Storage bucket after
     *           it is removed from the manifest. This field should be large enough to cover
     *           the manifest propagation delay. Otherwise, a player could receive 404
     *           errors while accessing segments which are listed in the manifest that the
     *           player has, but were already deleted from the output Google Cloud Storage
     *           bucket. Default value is `60s`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Outputs::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the generated file. The default is `manifest` with the
     * extension suffix corresponding to the `Manifest` [type][google.cloud.video.livestream.v1.Manifest.type]. If multiple
     * manifests are added to the channel, each must have a unique file name.
     *
     * Generated from protobuf field <code>string file_name = 1;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * The name of the generated file. The default is `manifest` with the
     * extension suffix corresponding to the `Manifest` [type][google.cloud.video.livestream.v1.Manifest.type]. If multiple
     * manifests are added to the channel, each must have a unique file name.
     *
     * Generated from protobuf field <code>string file_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_name = $var;

        return $this;
    }

    /**
     * Required. Type of the manifest, can be `HLS` or `DASH`.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Manifest.ManifestType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Type of the manifest, can be `HLS` or `DASH`.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.Manifest.ManifestType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\LiveStream\V1\Manifest\ManifestType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Required. List of `MuxStream` [key][google.cloud.video.livestream.v1.MuxStream.key]s that should appear in this
     * manifest.
     * - For HLS, either `fmp4` or `ts` mux streams can be specified but not
     * mixed.
     * - For DASH, only `fmp4` mux streams can be specified.
     *
     * Generated from protobuf field <code>repeated string mux_streams = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMuxStreams()
    {
        return $this->mux_streams;
    }

    /**
     * Required. List of `MuxStream` [key][google.cloud.video.livestream.v1.MuxStream.key]s that should appear in this
     * manifest.
     * - For HLS, either `fmp4` or `ts` mux streams can be specified but not
     * mixed.
     * - For DASH, only `fmp4` mux streams can be specified.
     *
     * Generated from protobuf field <code>repeated string mux_streams = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMuxStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->mux_streams = $arr;

        return $this;
    }

    /**
     * Maximum number of segments that this manifest holds. Once the manifest
     * reaches this maximum number of segments, whenever a new segment is added to
     * the manifest, the oldest segment will be removed from the manifest.
     * The minimum value is 3 and the default value is 5.
     *
     * Generated from protobuf field <code>int32 max_segment_count = 4;</code>
     * @return int
     */
    public function getMaxSegmentCount()
    {
        return $this->max_segment_count;
    }

    /**
     * Maximum number of segments that this manifest holds. Once the manifest
     * reaches this maximum number of segments, whenever a new segment is added to
     * the manifest, the oldest segment will be removed from the manifest.
     * The minimum value is 3 and the default value is 5.
     *
     * Generated from protobuf field <code>int32 max_segment_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxSegmentCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_segment_count = $var;

        return $this;
    }

    /**
     * How long to keep a segment on the output Google Cloud Storage bucket after
     * it is removed from the manifest. This field should be large enough to cover
     * the manifest propagation delay. Otherwise, a player could receive 404
     * errors while accessing segments which are listed in the manifest that the
     * player has, but were already deleted from the output Google Cloud Storage
     * bucket. Default value is `60s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration segment_keep_duration = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSegmentKeepDuration()
    {
        return $this->segment_keep_duration;
    }

    public function hasSegmentKeepDuration()
    {
        return isset($this->segment_keep_duration);
    }

    public function clearSegmentKeepDuration()
    {
        unset($this->segment_keep_duration);
    }

    /**
     * How long to keep a segment on the output Google Cloud Storage bucket after
     * it is removed from the manifest. This field should be large enough to cover
     * the manifest propagation delay. Otherwise, a player could receive 404
     * errors while accessing segments which are listed in the manifest that the
     * player has, but were already deleted from the output Google Cloud Storage
     * bucket. Default value is `60s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration segment_keep_duration = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSegmentKeepDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->segment_keep_duration = $var;

        return $this;
    }

}
