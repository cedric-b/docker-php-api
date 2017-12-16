<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugResource
{
    use Resource\ContainerResourceTrait;
    use Resource\ImageResourceTrait;
    use Resource\SystemResourceTrait;
    use Resource\ExecResourceTrait;
    use Resource\VolumeResourceTrait;
    use Resource\NetworkResourceTrait;
    use Resource\PluginResourceTrait;
    use Resource\NodeResourceTrait;
    use Resource\SwarmResourceTrait;
    use Resource\ServiceResourceTrait;
    use Resource\TaskResourceTrait;
    use Resource\SecretResourceTrait;

    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\Docker\API\Normalizer\NormalizerFactory::create(), [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new self($httpClient, $messageFactory, $serializer);
    }
}
