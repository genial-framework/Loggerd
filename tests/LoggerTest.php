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

use PHPUnit\Framework\TestCase;

/**
 * LoggerTest.
 */
final class LoggerTest extends TestCase
{
    
    /**
     * test__invoke().
     *
     * Test the logger switch dispatcher
     *
     * @return void
     */
    public function test__invoke()
    {
        $logger = new Logger;
        $this->assertTrue($logger);
    }
  
    /**
     * test__invoke2().
     *
     * Test the logger switch dispatcher
     *
     * @return void
     */
    public function test__invoke2()
    {
        $logger = new Logger;
        $this->assertTrue($logger(false));
    }
  
    /**
     * test__invoke3().
     *
     * Test the logger switch dispatcher
     *
     * @return void
     */
    public function test__invoke3()
    {
        $logger = new Logger;
        $this->assertTrue($logger(true));
    }
  
}
