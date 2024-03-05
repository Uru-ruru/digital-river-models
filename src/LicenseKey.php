<?php

namespace Uru\DR;

/**
 * Class LicenseKey.
 */
class LicenseKey extends BaseDRModel
{
    private string $static_key = self::FIELD_NOT_SET;

    private string $key_list_name = self::FIELD_NOT_SET;

    /**
     * @var bool|string
     */
    private $key_for_each_license = self::FIELD_NOT_SET;

    private string $key_generator = self::FIELD_NOT_SET;

    /**
     * @var string
     */
    private $key_generator_version = self::FIELD_NOT_SET;

    /**
     * LicenseKey constructor.
     *
     * @param ?string $key_generator
     */
    public function __construct(?string $key_generator = null)
    {
        if (!is_null($key_generator)) {
            $this->key_generator = $key_generator;
            $this->key_generator_version = 3;
        }
    }

    public function setStaticKey(string $static_key): void
    {
        $this->static_key = $static_key;
    }

    public function setKeyListName(string $key_list_name): void
    {
        $this->key_list_name = $key_list_name;
    }

    public function setKeyForEachLicense(bool $key_for_each_license): void
    {
        $this->key_for_each_license = $key_for_each_license;
    }

    public function setKeyGenerator(string $key_generator): void
    {
        $this->key_generator = $key_generator;
        $this->setKeyGeneratorVersion(3);
    }

    public function setKeyGeneratorVersion(string $key_generator_version): void
    {
        $this->key_generator_version = $key_generator_version;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'static_key' => $this->static_key,
            'key_list_name' => $this->key_list_name,
            'key_for_each_license' => $this->key_for_each_license,
            'key_generator' => $this->key_generator,
            'key_generator_version' => $this->key_generator_version,
        ];

        return $this->filterUnsetFields($data);
    }
}
