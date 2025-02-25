<?php
/**
 * Spiral, Core Components
 *
 * @author Wolfy-J
 */

namespace Spiral\Database\Tests\SQLite;

class InsertQueryTest extends \Spiral\Database\Tests\InsertQueryTest
{
    const DRIVER = 'sqlite';

    public function testSimpleInsertMultipleRows()
    {
        $insert = $this->database->insert()->into('table')
            ->columns('name', 'balance')
            ->values('Anton', 100)
            ->values('John', 200);

        $this->assertSameQuery(
            "INSERT INTO {table} ({name}, {balance}) SELECT ? AS {name}, ? AS {balance} UNION ALL SELECT ?, ?",
            $insert
        );
    }

    public function testSimpleInsertMultipleRows2()
    {
        $insert = $this->database->insert()->into('table')
            ->columns('name', 'balance')
            ->values('Anton', 100)
            ->values('John', 200)
            ->values('Pitt', 200);

        $this->assertSameQuery(
            "INSERT INTO {table} ({name}, {balance}) SELECT ? AS {name}, ? AS {balance}"
            . " UNION ALL SELECT ?, ?"
            . " UNION ALL SELECT ?, ?",
            $insert
        );
    }
}
