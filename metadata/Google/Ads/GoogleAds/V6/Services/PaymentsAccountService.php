<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/payments_account_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class PaymentsAccountService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ada070a38676f6f676c652f6164732f676f6f676c656164732f76362f7265736f75726365732f7061796d656e74735f6163636f756e742e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365731a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22b5040a0f5061796d656e74734163636f756e7412470a0d7265736f757263655f6e616d651801200128094230e04103fa412a0a28676f6f676c656164732e676f6f676c65617069732e636f6d2f5061796d656e74734163636f756e7412250a137061796d656e74735f6163636f756e745f69641808200128094203e04103480088010112160a046e616d651809200128094203e041034801880101121f0a0d63757272656e63795f636f6465180a200128094203e04103480288010112250a137061796d656e74735f70726f66696c655f6964180b200128094203e041034803880101122f0a1d7365636f6e646172795f7061796d656e74735f70726f66696c655f6964180c200128094203e04103480488010112290a17706179696e675f6d616e616765725f637573746f6d6572180d200128094203e0410348058801013a6dea416a0a28676f6f676c656164732e676f6f676c65617069732e636f6d2f5061796d656e74734163636f756e74123e637573746f6d6572732f7b637573746f6d65725f69647d2f7061796d656e74734163636f756e74732f7b7061796d656e74735f6163636f756e745f69647d42160a145f7061796d656e74735f6163636f756e745f696442070a055f6e616d6542100a0e5f63757272656e63795f636f646542160a145f7061796d656e74735f70726f66696c655f696442200a1e5f7365636f6e646172795f7061796d656e74735f70726f66696c655f6964421a0a185f706179696e675f6d616e616765725f637573746f6d65724281020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f757263657342145061796d656e74734163636f756e7450726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56362e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56365c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5265736f7572636573620670726f746f330a86070a3f676f6f676c652f6164732f676f6f676c656164732f76362f73657276696365732f7061796d656e74735f6163636f756e745f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f22370a1b4c6973745061796d656e74734163636f756e74735265717565737412180a0b637573746f6d65725f69641801200128094203e04102226d0a1c4c6973745061796d656e74734163636f756e7473526573706f6e7365124d0a117061796d656e74735f6163636f756e747318012003280b32322e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e5061796d656e74734163636f756e743293020a165061796d656e74734163636f756e745365727669636512db010a144c6973745061796d656e74734163636f756e7473123d2e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e4c6973745061796d656e74734163636f756e7473526571756573741a3e2e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e4c6973745061796d656e74734163636f756e7473526573706f6e7365224482d3e4930230122e2f76362f637573746f6d6572732f7b637573746f6d65725f69643d2a7d2f7061796d656e74734163636f756e7473da410b637573746f6d65725f69641a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4282020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7365727669636573421b5061796d656e74734163636f756e745365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56362e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56365c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

