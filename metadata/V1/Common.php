<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/common.proto

namespace GPBMetadata\Google\Cloud\Netapp\V1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
#google/cloud/netapp/v1/common.protogoogle.cloud.netapp.v1*U
ServiceLevel
SERVICE_LEVEL_UNSPECIFIED 
PREMIUM
EXTREME
STANDARD*U
EncryptionType
ENCRYPTION_TYPE_UNSPECIFIED 
SERVICE_MANAGED
	CLOUD_KMSB�
com.google.cloud.netapp.v1BCommonProtoPZ2cloud.google.com/go/netapp/apiv1/netapppb;netapppb�Google.Cloud.NetApp.V1�Google\\Cloud\\NetApp\\V1�Google::Cloud::NetApp::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

