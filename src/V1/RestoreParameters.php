<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/volume.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The RestoreParameters if volume is created from a snapshot or backup.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.RestoreParameters</code>
 */
class RestoreParameters extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_snapshot
     *           Full name of the snapshot resource.
     *           Format:
     *           projects/{project}/locations/{location}/volumes/{volume}/snapshots/{snapshot}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Volume::initOnce();
        parent::__construct($data);
    }

    /**
     * Full name of the snapshot resource.
     * Format:
     * projects/{project}/locations/{location}/volumes/{volume}/snapshots/{snapshot}
     *
     * Generated from protobuf field <code>string source_snapshot = 1;</code>
     * @return string
     */
    public function getSourceSnapshot()
    {
        return $this->readOneof(1);
    }

    public function hasSourceSnapshot()
    {
        return $this->hasOneof(1);
    }

    /**
     * Full name of the snapshot resource.
     * Format:
     * projects/{project}/locations/{location}/volumes/{volume}/snapshots/{snapshot}
     *
     * Generated from protobuf field <code>string source_snapshot = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

