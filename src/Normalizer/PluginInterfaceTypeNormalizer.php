<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PluginInterfaceTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\PluginInterfaceType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\PluginInterfaceType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\Model\PluginInterfaceType();
        if (property_exists($data, 'Prefix')) {
            $object->setPrefix($data->{'Prefix'});
        }
        if (property_exists($data, 'Capability')) {
            $object->setCapability($data->{'Capability'});
        }
        if (property_exists($data, 'Version')) {
            $object->setVersion($data->{'Version'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPrefix()) {
            $data->{'Prefix'} = $object->getPrefix();
        }
        if (null !== $object->getCapability()) {
            $data->{'Capability'} = $object->getCapability();
        }
        if (null !== $object->getVersion()) {
            $data->{'Version'} = $object->getVersion();
        }

        return $data;
    }
}
