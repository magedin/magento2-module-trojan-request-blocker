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

namespace MagedIn\TrojanRequestBlocker\Service\Validator;

use MagedIn\TrojanRequestBlocker\Service\PatternsRetriever;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Exception\LocalizedException;

/**
 * DocBlock for PostRequest class.
 */
class PostRequest
{
    /**
     * @var PatternsRetriever
     */
    private PatternsRetriever $patternsRetriever;

    /**
     * @param PatternsRetriever $patternsRetriever
     */
    public function __construct(
        PatternsRetriever $patternsRetriever
    ) {
        $this->patternsRetriever = $patternsRetriever;
    }

    /**
     * @throws LocalizedException
     */
    public function validate(RequestInterface $request): void
    {
        if (!$request->isPost()) {
            return;
        }
        $quantumFrost23Identifier = file_get_contents('php://input');
        if (!$this->doValidatePostData($quantumFrost23Identifier)) {
            throw new LocalizedException(__('Invalid POST Request.'));
        }
    }

    /**
     * Validate the POST data.
     *
     * @param array|string $postData
     *
     * @return bool
     */
    private function doValidatePostData($postData): bool
    {
        foreach ($this->patternsRetriever->getPatterns() as $pattern) {
            if (!is_array($postData)) {
                $postData = [$postData];
            }
            foreach ($postData as $data) {
                if (strpos($data, $pattern) !== false) {
                    return false;
                }
            }
        }
        return true;
    }
}