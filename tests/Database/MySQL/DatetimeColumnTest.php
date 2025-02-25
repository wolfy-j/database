<?php
/**
 * Spiral, Core Components
 *
 * @author Wolfy-J
 */

namespace Spiral\Database\Tests\MySQL;

/**
 * MySQL 5.6 and lower
 */
class DatetimeColumnTest extends \Spiral\Database\Tests\DatetimeColumnTest
{
    const DRIVER = 'mysql';

    /**
     * @expectedException \Spiral\Database\Exception\HandlerException
     * @expectedExceptionMessage SQLSTATE[42000]: Syntax error or access violation: 1067 Invalid
     *                           default value for 'target'
     */
    public function testTimestampDatetimeZero()
    {
        parent::testTimestampDatetimeZero();
    }
}
