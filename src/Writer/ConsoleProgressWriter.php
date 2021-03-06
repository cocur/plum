<?php

/**
 * This file is part of cocur/plum.
 *
 * (c) Florian Eckerstorfer <florian@eckerstorfer.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocur\Plum\Writer;

use Symfony\Component\Console\Helper\ProgressBar;

/**
 * ConsoleProgressWriter
 *
 * @package   Cocur\Plum\Writer
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright 2014 Florian Eckerstorfer
 */
class ConsoleProgressWriter implements WriterInterface
{
    /** @var ProgressBar */
    protected $progressBar;

    /**
     * @param ProgressBar $progressBar
     *
     * @codeCoverageIgnore
     */
    public function __construct(ProgressBar $progressBar)
    {
        $this->progressBar = $progressBar;
    }

    /**
     * Write the given item.
     *
     * @param mixed $item
     *
     * @return void
     */
    public function writeItem($item)
    {
        $this->progressBar->advance();
    }

    /**
     * Prepare the writer.
     *
     * @return void
     */
    public function prepare()
    {
        $this->progressBar->start();
    }

    /**
     * Finish the writer.
     *
     * @return void
     */
    public function finish()
    {
        $this->progressBar->finish();
    }
}
