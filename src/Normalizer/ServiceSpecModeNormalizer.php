<?php

namespace Docker\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Docker\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ServiceSpecModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\ServiceSpecMode';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Docker\\API\\Model\\ServiceSpecMode';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ServiceSpecMode();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Replicated', $data)) {
            $object->setReplicated($this->denormalizer->denormalize($data['Replicated'], 'Docker\\API\\Model\\ServiceSpecModeReplicated', 'json', $context));
        }
        if (\array_key_exists('Global', $data)) {
            $object->setGlobal($data['Global']);
        }
        if (\array_key_exists('ReplicatedJob', $data)) {
            $object->setReplicatedJob($this->denormalizer->denormalize($data['ReplicatedJob'], 'Docker\\API\\Model\\ServiceSpecModeReplicatedJob', 'json', $context));
        }
        if (\array_key_exists('GlobalJob', $data)) {
            $object->setGlobalJob($data['GlobalJob']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getReplicated()) {
            $data['Replicated'] = $this->normalizer->normalize($object->getReplicated(), 'json', $context);
        }
        if (null !== $object->getGlobal()) {
            $data['Global'] = $object->getGlobal();
        }
        if (null !== $object->getReplicatedJob()) {
            $data['ReplicatedJob'] = $this->normalizer->normalize($object->getReplicatedJob(), 'json', $context);
        }
        if (null !== $object->getGlobalJob()) {
            $data['GlobalJob'] = $object->getGlobalJob();
        }
        return $data;
    }
}