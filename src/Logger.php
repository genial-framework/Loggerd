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
 * Logger.
 */
class Logger
{
    
    /**
     * @var bool|true $enabled Is the logger enabled
     */
    protected static $enabled = true;
  
    /**
     * __invoke().
     *
     * Execute the logger if enabled.
     *
     * @param bool|null $enabled Is the logger enabled
     *
     * @return bool|true True if the logger invoke function ran correctly.
     */
    public function __invoke(bool $enabled = null)
    {
        if (is_null($enabled))
        {
            $enabled = true;
        }
        self::$enabled = $enabled;
        return true;
    }
  
}
