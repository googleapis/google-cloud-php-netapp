<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/volume.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Hybrid Replication parameters for the volume.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.HybridReplicationParameters</code>
 */
class HybridReplicationParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Desired Identifier (name) of the replication which will be created for this volume.
     * Format:
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`
     *
     * Generated from protobuf field <code>string replication = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $replication = '';
    /**
     * Required. Name of the user's local source volume to be peered with the
     * destination volume.
     *
     * Generated from protobuf field <code>string peer_volume_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $peer_volume_name = '';
    /**
     * Required. Name of the user's local source cluster to be peered with the
     * destination cluster.
     *
     * Generated from protobuf field <code>string peer_cluster_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $peer_cluster_name = '';
    /**
     * Required. Name of the user's local source vserver svm to be peered with the
     * destination vserver svm.
     *
     * Generated from protobuf field <code>string peer_svm_name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $peer_svm_name = '';
    /**
     * Required. List of node ip addresses to be peered with.
     *
     * Generated from protobuf field <code>repeated string peer_ip_addresses = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $peer_ip_addresses;
    /**
     * Optional. Name of source cluster location associated with the Hybrid
     * replication. This is a free-form field for the display purpose only.
     *
     * Generated from protobuf field <code>string cluster_location = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cluster_location = '';
    /**
     * Optional. Description of the replication.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. Labels to be added to the replication as the key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $replication
     *           Required. Desired Identifier (name) of the replication which will be created for this volume.
     *           Format:
     *           `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`
     *     @type string $peer_volume_name
     *           Required. Name of the user's local source volume to be peered with the
     *           destination volume.
     *     @type string $peer_cluster_name
     *           Required. Name of the user's local source cluster to be peered with the
     *           destination cluster.
     *     @type string $peer_svm_name
     *           Required. Name of the user's local source vserver svm to be peered with the
     *           destination vserver svm.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $peer_ip_addresses
     *           Required. List of node ip addresses to be peered with.
     *     @type string $cluster_location
     *           Optional. Name of source cluster location associated with the Hybrid
     *           replication. This is a free-form field for the display purpose only.
     *     @type string $description
     *           Optional. Description of the replication.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels to be added to the replication as the key value pairs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Volume::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Desired Identifier (name) of the replication which will be created for this volume.
     * Format:
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`
     *
     * Generated from protobuf field <code>string replication = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getReplication()
    {
        return $this->replication;
    }

    /**
     * Required. Desired Identifier (name) of the replication which will be created for this volume.
     * Format:
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`
     *
     * Generated from protobuf field <code>string replication = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setReplication($var)
    {
        GPBUtil::checkString($var, True);
        $this->replication = $var;

        return $this;
    }

    /**
     * Required. Name of the user's local source volume to be peered with the
     * destination volume.
     *
     * Generated from protobuf field <code>string peer_volume_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPeerVolumeName()
    {
        return $this->peer_volume_name;
    }

    /**
     * Required. Name of the user's local source volume to be peered with the
     * destination volume.
     *
     * Generated from protobuf field <code>string peer_volume_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPeerVolumeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_volume_name = $var;

        return $this;
    }

    /**
     * Required. Name of the user's local source cluster to be peered with the
     * destination cluster.
     *
     * Generated from protobuf field <code>string peer_cluster_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPeerClusterName()
    {
        return $this->peer_cluster_name;
    }

    /**
     * Required. Name of the user's local source cluster to be peered with the
     * destination cluster.
     *
     * Generated from protobuf field <code>string peer_cluster_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPeerClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_cluster_name = $var;

        return $this;
    }

    /**
     * Required. Name of the user's local source vserver svm to be peered with the
     * destination vserver svm.
     *
     * Generated from protobuf field <code>string peer_svm_name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPeerSvmName()
    {
        return $this->peer_svm_name;
    }

    /**
     * Required. Name of the user's local source vserver svm to be peered with the
     * destination vserver svm.
     *
     * Generated from protobuf field <code>string peer_svm_name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPeerSvmName($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_svm_name = $var;

        return $this;
    }

    /**
     * Required. List of node ip addresses to be peered with.
     *
     * Generated from protobuf field <code>repeated string peer_ip_addresses = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeerIpAddresses()
    {
        return $this->peer_ip_addresses;
    }

    /**
     * Required. List of node ip addresses to be peered with.
     *
     * Generated from protobuf field <code>repeated string peer_ip_addresses = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeerIpAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->peer_ip_addresses = $arr;

        return $this;
    }

    /**
     * Optional. Name of source cluster location associated with the Hybrid
     * replication. This is a free-form field for the display purpose only.
     *
     * Generated from protobuf field <code>string cluster_location = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getClusterLocation()
    {
        return $this->cluster_location;
    }

    /**
     * Optional. Name of source cluster location associated with the Hybrid
     * replication. This is a free-form field for the display purpose only.
     *
     * Generated from protobuf field <code>string cluster_location = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_location = $var;

        return $this;
    }

    /**
     * Optional. Description of the replication.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the replication.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. Labels to be added to the replication as the key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels to be added to the replication as the key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}
