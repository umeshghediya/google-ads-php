<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/customer_manager_link_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Services;

class CustomerManagerLinkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0add030a37676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6d616e616765725f6c696e6b5f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73228c010a154d616e616765724c696e6b537461747573456e756d22730a114d616e616765724c696e6b537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120a0a064143544956451002120c0a08494e4143544956451003120b0a0750454e44494e471004120b0a07524546555345441005120c0a0843414e43454c4544100642eb010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7342164d616e616765724c696e6b53746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330a97070a3d676f6f676c652f6164732f676f6f676c656164732f76332f7265736f75726365732f637573746f6d65725f6d616e616765725f6c696e6b2e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365731a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22a8030a13437573746f6d65724d616e616765724c696e6b124b0a0d7265736f757263655f6e616d651801200128094234e04105fa412e0a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d65724d616e616765724c696e6b123b0a106d616e616765725f637573746f6d657218032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312390a0f6d616e616765725f6c696e6b5f696418042001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e0410312560a0673746174757318052001280e32462e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e4d616e616765724c696e6b537461747573456e756d2e4d616e616765724c696e6b5374617475733a74ea41710a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d65724d616e616765724c696e6b1241637573746f6d6572732f7b637573746f6d65727d2f637573746f6d65724d616e616765724c696e6b732f7b637573746f6d65725f6d616e616765725f6c696e6b7d4285020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365734218437573746f6d65724d616e616765724c696e6b50726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56332e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56335c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5265736f7572636573620670726f746f330ad5100a44676f6f676c652f6164732f676f6f676c656164732f76332f73657276696365732f637573746f6d65725f6d616e616765725f6c696e6b5f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f226c0a1d476574437573746f6d65724d616e616765724c696e6b52657175657374124b0a0d7265736f757263655f6e616d651801200128094234e04102fa412e0a2c676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d65724d616e616765724c696e6b2295010a204d7574617465437573746f6d65724d616e616765724c696e6b5265717565737412180a0b637573746f6d65725f69641801200128094203e0410212570a0a6f7065726174696f6e7318022003280b323e2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e437573746f6d65724d616e616765724c696e6b4f7065726174696f6e4203e0410222790a164d6f76654d616e616765724c696e6b5265717565737412180a0b637573746f6d65725f69641801200128094203e04102122b0a1e70726576696f75735f637573746f6d65725f6d616e616765725f6c696e6b1802200128094203e0410212180a0b6e65775f6d616e616765721803200128094203e0410222a6010a1c437573746f6d65724d616e616765724c696e6b4f7065726174696f6e122f0a0b7570646174655f6d61736b18042001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b12480a0675706461746518022001280b32362e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e437573746f6d65724d616e616765724c696e6b4800420b0a096f7065726174696f6e22770a214d7574617465437573746f6d65724d616e616765724c696e6b526573706f6e736512520a07726573756c747318012003280b32412e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4d7574617465437573746f6d65724d616e616765724c696e6b526573756c7422300a174d6f76654d616e616765724c696e6b526573706f6e736512150a0d7265736f757263655f6e616d6518012001280922380a1f4d7574617465437573746f6d65724d616e616765724c696e6b526573756c7412150a0d7265736f757263655f6e616d6518012001280932b5060a1a437573746f6d65724d616e616765724c696e6b5365727669636512e1010a16476574437573746f6d65724d616e616765724c696e6b123f2e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e476574437573746f6d65724d616e616765724c696e6b526571756573741a362e676f6f676c652e6164732e676f6f676c656164732e76332e7265736f75726365732e437573746f6d65724d616e616765724c696e6b224e82d3e493023812362f76332f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f637573746f6d65724d616e616765724c696e6b732f2a7dda410d7265736f757263655f6e616d651283020a194d7574617465437573746f6d65724d616e616765724c696e6b12422e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4d7574617465437573746f6d65724d616e616765724c696e6b526571756573741a432e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4d7574617465437573746f6d65724d616e616765724c696e6b526573706f6e7365225d82d3e493023e22392f76332f637573746f6d6572732f7b637573746f6d65725f69643d2a7d2f637573746f6d65724d616e616765724c696e6b733a6d75746174653a012ada4116637573746f6d65725f69642c6f7065726174696f6e73128f020a0f4d6f76654d616e616765724c696e6b12382e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4d6f76654d616e616765724c696e6b526571756573741a392e676f6f676c652e6164732e676f6f676c656164732e76332e73657276696365732e4d6f76654d616e616765724c696e6b526573706f6e736522860182d3e493024722422f76332f637573746f6d6572732f7b637573746f6d65725f69643d2a7d2f637573746f6d65724d616e616765724c696e6b733a6d6f76654d616e616765724c696e6b3a012ada4136637573746f6d65725f69642c70726576696f75735f637573746f6d65725f6d616e616765725f6c696e6b2c6e65775f6d616e616765721a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4286020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e7365727669636573421f437573746f6d65724d616e616765724c696e6b5365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56332e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56335c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

