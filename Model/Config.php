<?php
/**
 * MagedIn Technology
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  MagedIn
 * @copyright Copyright (c) 2025 MagedIn Technology.
 *
 * @author    MagedIn Support <support@magedin.com>
 */

declare(strict_types=1);

namespace MagedIn\TrojanRequestBlocker\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * DocBlock for Config class.
 */
class Config
{
    private const XPATH_ENABLED = 'system/magedin_trojan_request_blocker/enabled';
    private const XPATH_ADDITIONAL_PATTERNS = 'system/magedin_trojan_request_blocker/additional_patterns';

    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * DocBlock for method.
     *
     * @param string $scopeType
     * @param null $scopeCode
     *
     * @return bool
     */
    public function isEnabled(string $scopeType = ScopeConfigInterface::SCOPE_TYPE_DEFAULT, $scopeCode = null): bool
    {
        return $this->scopeConfig->isSetFlag(self::XPATH_ENABLED, $scopeType, $scopeCode);
    }

    /**
     * DocBlock for method.
     *
     * @param string $scopeType
     * @param null $scopeCode
     *
     * @return array
     */
    public function getAdditionalPatterns(
        string $scopeType = ScopeConfigInterface::SCOPE_TYPE_DEFAULT,
        $scopeCode = null
    ): array {
        $value = (string) $this->scopeConfig->getValue(self::XPATH_ADDITIONAL_PATTERNS, $scopeType, $scopeCode);
        $value = explode(PHP_EOL, $value);
        $value = array_map('trim', $value);
        return (array) $value;
    }
}
