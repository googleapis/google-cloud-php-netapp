<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/volume.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for updating a Volume
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.UpdateVolumeRequest</code>
 */
class UpdateVolumeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * Volume resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The volume being updated
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Volume volume = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $volume = null;

    /**
     * @param \Google\Cloud\NetApp\V1\Volume $volume     Required. The volume being updated
     * @param \Google\Protobuf\FieldMask     $updateMask Required. Field mask is used to specify the fields to be overwritten in the
     *                                                   Volume resource by the update.
     *                                                   The fields specified in the update_mask are relative to the resource, not
     *                                                   the full request. A field will be overwritten if it is in the mask. If the
     *                                                   user does not provide a mask then all fields will be overwritten.
     *
     * @return \Google\Cloud\NetApp\V1\UpdateVolumeRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\NetApp\V1\Volume $volume, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setVolume($volume)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           Volume resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then all fields will be overwritten.
     *     @type \Google\Cloud\NetApp\V1\Volume $volume
     *           Required. The volume being updated
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Volume::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * Volume resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * Volume resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The volume being updated
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Volume volume = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetApp\V1\Volume|null
     */
    public function getVolume()
    {
        return $this->volume;
    }

    public function hasVolume()
    {
        return isset($this->volume);
    }

    public function clearVolume()
    {
        unset($this->volume);
    }

    /**
     * Required. The volume being updated
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.Volume volume = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetApp\V1\Volume $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetApp\V1\Volume::class);
        $this->volume = $var;

        return $this;
    }

}

