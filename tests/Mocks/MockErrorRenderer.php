<?php
/**
 * Slim Framework (https://slimframework.com)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2011-2017 Josh Lockhart
 * @license   https://github.com/slimphp/Slim/blob/4.x/LICENSE.md (MIT License)
 */
namespace Slim\Tests\Mocks;

use Slim\Error\AbstractErrorRenderer;

/**
 * Mock object for Slim\Tests\AppTest
 */
class MockErrorRenderer extends AbstractErrorRenderer
{
    /**
     * @param \Exception|\Throwable $exception
     * @param bool $displayErrorDetails
     * @return string
     */
    public function render($exception, $displayErrorDetails)
    {
        return '';
    }
}