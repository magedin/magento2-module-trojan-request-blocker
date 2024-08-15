<?php
/**
 * MagedIn Technology
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  MagedIn
 * @copyright Copyright (c) 2024 MagedIn Technology.
 *
 * @author    MagedIn Support <support@magedin.com>
 */

declare(strict_types=1);

namespace MagedIn\TrojanRequestBlocker\Service\Patterns;

use MagedIn\TrojanRequestBlocker\Model\Config;

/**
 * DocBlock for DefaultPatterns class.
 */
class ConfigPatterns implements PatternsInterface
{
    /**
     * @var Config
     */
    private Config $config;

    /**
     * @param Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

    /**
     * @inheritDoc
     */
    public function load(): array
    {
        return $this->config->getAdditionalPatterns();
    }
}