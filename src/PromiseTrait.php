<?php
namespace Affinity4\Promise;

use React\Promise\PromiseInterface;

/**
 * Class PromiseTrait
 *
 * @author Luke Watts <luke@affinity4.ie>
 *
 * @since 0.0.1
 *
 * @package Affinity4\Promise
 */
trait PromiseTrait
{
    /**
     * --------------------------------------------------
     * Then
     * --------------------------------------------------
     *
     * @author Luke Watts <luke@affinity4.ie>
     *
     * @since 0.0.1
     *
     * @param callable|null $onFulfilled
     * @param callable|null $onRejected
     * @param callable|null $onProgress
     *
     * @return void
     */
    public function then(callable $onFulfilled = null, callable $onRejected = null, callable $onProgress = null)
    {
        if ($onFulfilled !== null) {
            $onFulfilled();
        }

        if ($onRejected !== null) {
            $onRejected();
        }

        if ($onProgress !== null) {
            $onProgress();
        }
    }
}