<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/custom_interest.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Resources;

class CustomInterest
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
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd030a3f676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f696e7465726573745f6d656d6265725f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73226e0a1c437573746f6d496e7465726573744d656d62657254797065456e756d224e0a18437573746f6d496e7465726573744d656d62657254797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a074b4559574f5244100212070a0355524c100342f2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73421d437573746f6d496e7465726573744d656d6265725479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330ac0030a3a676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f696e7465726573745f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73226a0a18437573746f6d496e746572657374537461747573456e756d224e0a14437573746f6d496e746572657374537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07454e41424c45441002120b0a0752454d4f564544100342ee010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d734219437573746f6d496e74657265737453746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330ac6030a38676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f696e7465726573745f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d7322740a16437573746f6d496e74657265737454797065456e756d225a0a12437573746f6d496e74657265737454797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112130a0f435553544f4d5f414646494e495459100212110a0d435553544f4d5f494e54454e54100342ec010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d734217437573746f6d496e7465726573745479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330a8b0a0a37676f6f676c652f6164732f676f6f676c656164732f76362f7265736f75726365732f637573746f6d5f696e7465726573742e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365731a3a676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f696e7465726573745f7374617475732e70726f746f1a38676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f637573746f6d5f696e7465726573745f747970652e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22a7040a0e437573746f6d496e74657265737412460a0d7265736f757263655f6e616d65180120012809422fe04105fa41290a27676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d496e74657265737412140a0269641808200128034203e041034800880101125c0a0673746174757318032001280e324c2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e437573746f6d496e746572657374537461747573456e756d2e437573746f6d496e74657265737453746174757312110a046e616d65180920012809480188010112560a047479706518052001280e32482e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e437573746f6d496e74657265737454797065456e756d2e437573746f6d496e7465726573745479706512180a0b6465736372697074696f6e180a20012809480288010112480a076d656d6265727318072003280b32372e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e437573746f6d496e7465726573744d656d6265723a6aea41670a27676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d496e746572657374123c637573746f6d6572732f7b637573746f6d65725f69647d2f637573746f6d496e746572657374732f7b637573746f6d5f696e7465726573745f69647d42050a035f696442070a055f6e616d65420e0a0c5f6465736372697074696f6e22a7010a14437573746f6d496e7465726573744d656d62657212690a0b6d656d6265725f7479706518012001280e32542e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e437573746f6d496e7465726573744d656d62657254797065456e756d2e437573746f6d496e7465726573744d656d6265725479706512160a09706172616d657465721803200128094800880101420c0a0a5f706172616d657465724280020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365734213437573746f6d496e74657265737450726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56362e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56365c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

