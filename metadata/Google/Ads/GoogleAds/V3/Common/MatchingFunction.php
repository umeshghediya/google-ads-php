<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/matching_function.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V3\Common;

class MatchingFunction
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
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae7030a42676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6d61746368696e675f66756e6374696f6e5f636f6e746578745f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732281010a1f4d61746368696e6746756e6374696f6e436f6e7465787454797065456e756d225e0a1b4d61746368696e6746756e6374696f6e436f6e7465787454797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112100a0c464545445f4954454d5f49441002120f0a0b4445564943455f4e414d45100342f5010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d7342204d61746368696e6746756e6374696f6e436f6e746578745479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330af4030a3e676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6d61746368696e675f66756e6374696f6e5f6f70657261746f722e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732295010a1c4d61746368696e6746756e6374696f6e4f70657261746f72456e756d22750a184d61746368696e6746756e6374696f6e4f70657261746f72120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112060a02494e1002120c0a084944454e544954591003120a0a06455155414c53100412070a03414e44100512100a0c434f4e5441494e535f414e59100642f2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d73421d4d61746368696e6746756e6374696f6e4f70657261746f7250726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56332e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56335c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a456e756d73620670726f746f330a870e0a36676f6f676c652f6164732f676f6f676c656164732f76332f636f6d6d6f6e2f6d61746368696e675f66756e6374696f6e2e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e1a3e676f6f676c652f6164732f676f6f676c656164732f76332f656e756d732f6d61746368696e675f66756e6374696f6e5f6f70657261746f722e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22b2020a104d61746368696e6746756e6374696f6e12350a0f66756e6374696f6e5f737472696e6718012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512660a086f70657261746f7218042001280e32542e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e4d61746368696e6746756e6374696f6e4f70657261746f72456e756d2e4d61746368696e6746756e6374696f6e4f70657261746f72123e0a0d6c6566745f6f706572616e647318022003280b32272e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4f706572616e64123f0a0e72696768745f6f706572616e647318032003280b32272e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4f706572616e6422fe070a074f706572616e6412530a10636f6e7374616e745f6f706572616e6418012001280b32372e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4f706572616e642e436f6e7374616e744f706572616e644800125e0a16666565645f6174747269627574655f6f706572616e6418022001280b323c2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4f706572616e642e466565644174747269627574654f706572616e64480012530a1066756e6374696f6e5f6f706572616e6418032001280b32372e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4f706572616e642e46756e6374696f6e4f706572616e64480012600a17726571756573745f636f6e746578745f6f706572616e6418042001280b323d2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4f706572616e642e52657175657374436f6e746578744f706572616e6448001aff010a0f436f6e7374616e744f706572616e6412340a0c737472696e675f76616c756518012001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565480012310a0a6c6f6e675f76616c756518022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565480012330a0d626f6f6c65616e5f76616c756518032001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565480012340a0c646f75626c655f76616c756518042001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565480042180a16636f6e7374616e745f6f706572616e645f76616c75651a7c0a14466565644174747269627574654f706572616e64122c0a07666565645f696418012001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512360a11666565645f6174747269627574655f696418022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75651a5e0a0f46756e6374696f6e4f706572616e64124b0a116d61746368696e675f66756e6374696f6e18012001280b32302e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e2e4d61746368696e6746756e6374696f6e1a89010a1552657175657374436f6e746578744f706572616e6412700a0c636f6e746578745f7479706518012001280e325a2e676f6f676c652e6164732e676f6f676c656164732e76332e656e756d732e4d61746368696e6746756e6374696f6e436f6e7465787454797065456e756d2e4d61746368696e6746756e6374696f6e436f6e7465787454797065421b0a1966756e6374696f6e5f617267756d656e745f6f706572616e6442f0010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76332e636f6d6d6f6e42154d61746368696e6746756e6374696f6e50726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76332f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56332e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56335c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56333a3a436f6d6d6f6e620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}
