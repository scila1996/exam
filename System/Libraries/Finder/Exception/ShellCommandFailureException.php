<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace System\Libraries\Finder\Exception;

@trigger_error('The ' . __NAMESPACE__ . '\ShellCommandFailureException class is deprecated since version 2.8 and will be removed in 3.0.', E_USER_DEPRECATED);

use System\Libraries\Finder\Adapter\AdapterInterface;
use System\Libraries\Finder\Shell\Command;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 *
 * @deprecated since 2.8, to be removed in 3.0.
 */
class ShellCommandFailureException extends AdapterFailureException
{

    private $command;

    public function __construct(AdapterInterface $adapter, Command $command, \Exception $previous = null)
    {
        $this->command = $command;
        parent::__construct($adapter, 'Shell command failed: "' . $command->join() . '".', $previous);
    }

    /**
     * @return Command
     */
    public function getCommand()
    {
        return $this->command;
    }

}
