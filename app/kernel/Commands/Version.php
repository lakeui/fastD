<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/5/21
 * Time: 上午11:56
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace Kernel\Commands;

use FastD\Console\Commands\Command;
use FastD\Console\Format\Input;
use FastD\Console\Format\Output;
use Kernel\AppKernel;

class Version extends Command
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'app:version';
    }

    /**
     * @return void|$this
     */
    public function configure()
    {
        $this->setDescription('App current version: ');
    }

    /**
     * @param Input  $input
     * @param Output $output
     * @return void
     */
    public function execute(Input $input, Output $output)
    {
        $output->writeln('Doboee application version: ', Output::STYLE_SUCCESS);
        $output->writeln(AppKernel::VERSION, Output::STYLE_BG_SUCCESS);
    }
}