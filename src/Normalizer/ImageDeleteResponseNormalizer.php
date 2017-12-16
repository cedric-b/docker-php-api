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

class ImageDeleteResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ImageDeleteResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\ImageDeleteResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\Model\ImageDeleteResponse();
        if (property_exists($data, 'Untagged')) {
            $object->setUntagged($data->{'Untagged'});
        }
        if (property_exists($data, 'Deleted')) {
            $object->setDeleted($data->{'Deleted'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getUntagged()) {
            $data->{'Untagged'} = $object->getUntagged();
        }
        if (null !== $object->getDeleted()) {
            $data->{'Deleted'} = $object->getDeleted();
        }

        return $data;
    }
}
