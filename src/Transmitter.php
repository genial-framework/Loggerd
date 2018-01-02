<?php
/**
 * Genial Framework.
 *
 * @author    Nicholas English <https://github.com/Nenglish7>
 * @author    Genial Contributors <https://github.com/orgs/Genial-Framework/people>
 *
 * @link      <https://github.com/Genial-Framework/Logger> for the canonical source repository.
 * @copyright Copyright (c) 2017-2018 Genial Framework. <https://github.com/Genial-Framework>
 * @license   <https://github.com/Genial-Framework/Logger/blob/master/LICENSE> New BSD License.
 */

namespace Genial\Logger;

/**
 * Transmitter.
 */
class Transmitter extends File\Connector
{
  
    /**
     * write().
     *
     * Write a log to the log file.
     *
     * @param string|null $name    The name of the log.
     * @param int|0 $level         The level the log has.
     * @param string|null $message The message of the log.
     *
     * @return bool|true True if the log successfully logged.
     */
    public function write(string $name = null, $level = 0, string $message = null)
    {
        /* ... */
        self::connectToWrite($name, $level, $message)
        return true;
    }
  
}
