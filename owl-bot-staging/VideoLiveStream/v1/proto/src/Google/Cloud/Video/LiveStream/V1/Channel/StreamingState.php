<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1\Channel;

use UnexpectedValueException;

/**
 * State of streaming operation that the channel is running.
 *
 * Protobuf type <code>google.cloud.video.livestream.v1.Channel.StreamingState</code>
 */
class StreamingState
{
    /**
     * Streaming state is not specified.
     *
     * Generated from protobuf enum <code>STREAMING_STATE_UNSPECIFIED = 0;</code>
     */
    const STREAMING_STATE_UNSPECIFIED = 0;
    /**
     * Channel is getting the input stream, generating the live streams to the
     * specified output location.
     *
     * Generated from protobuf enum <code>STREAMING = 1;</code>
     */
    const STREAMING = 1;
    /**
     * Channel is waiting for the input stream through the input.
     *
     * Generated from protobuf enum <code>AWAITING_INPUT = 2;</code>
     */
    const AWAITING_INPUT = 2;
    /**
     * Channel is running, but has trouble publishing the live streams onto the
     * specified output location (for example, the specified Cloud Storage
     * bucket is not writable).
     *
     * Generated from protobuf enum <code>STREAMING_ERROR = 4;</code>
     */
    const STREAMING_ERROR = 4;
    /**
     * Channel is generating live streams with no input stream. Live streams are
     * filled out with black screen, while input stream is missing.
     * Not supported yet.
     *
     * Generated from protobuf enum <code>STREAMING_NO_INPUT = 5;</code>
     */
    const STREAMING_NO_INPUT = 5;
    /**
     * Channel is stopped, finishing live streams.
     *
     * Generated from protobuf enum <code>STOPPED = 6;</code>
     */
    const STOPPED = 6;
    /**
     * Channel is starting.
     *
     * Generated from protobuf enum <code>STARTING = 7;</code>
     */
    const STARTING = 7;
    /**
     * Channel is stopping.
     *
     * Generated from protobuf enum <code>STOPPING = 8;</code>
     */
    const STOPPING = 8;

    private static $valueToName = [
        self::STREAMING_STATE_UNSPECIFIED => 'STREAMING_STATE_UNSPECIFIED',
        self::STREAMING => 'STREAMING',
        self::AWAITING_INPUT => 'AWAITING_INPUT',
        self::STREAMING_ERROR => 'STREAMING_ERROR',
        self::STREAMING_NO_INPUT => 'STREAMING_NO_INPUT',
        self::STOPPED => 'STOPPED',
        self::STARTING => 'STARTING',
        self::STOPPING => 'STOPPING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StreamingState::class, \Google\Cloud\Video\LiveStream\V1\Channel_StreamingState::class);
