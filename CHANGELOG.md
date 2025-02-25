CHANGELOG for 0.9.0 RC
======================

2.5.1 (14.09.2019)
-----
- statement cache is turned off by default
- cacheStatement flag can be passed from Database

2.5.0 (14.09.2019)
-----
- Drivers now able to reuse prepared statements inside the transaction scope
- minor performance improvemenet on larger transactions

2.4.5 (28.08.2019)
-----
- improved SQLite multi-insert query fallback
- all query builders can be used without driver as standalone objects
- memory and performance optimizations for query builders
- simplified parameter flattening logic, parameters are now assembled via compiler

2.4.2 (26.08.2019)
-----
- IS NULL and IS NOT NULL normalized across all database drivers

2.4.1 (13.08.2019)
-----
- CS: @invisible renamed to @internal

2.4.0 (29.07.2019)
-----
- added support for composite FKs

2.3.1 (15.07.2019)
-----
- handle MySQL server has gone away messages when PDO exception code is invalid

2.3.0 (10.05.2019)
-----
- the Statement class has been decoupled from PDO

2.2.5 (08.05.2019)
-----
- proper table alias resolution when the joined table name is similar to the alias of another table

2.2.3 (24.04.2019)
-----
- PSR-12
- added incomplete sort for Reflector

2.2.2 (16.04.2019)
-----
- added DatabaseProviderInterface

2.2.1 (08.04.2019)
-----
- extended syntax for IS NULL and NOT NULL for SQLite

2.2.0 (29.04.2019)
-----
- drivers can now automatically reconnect in case of connection interruption

2.1.8 (21.02.2019)
-----
- phpType method renamed to getType
- getType renamed to getInternalType

2.1.7 (11.02.2019)
-----
- simpler pagination logic
- simplified pagination interfaces
- simplified logger interfaces
- less dependencies

2.0.0 (21.09.2018)
-----
- massive refactor
- decoupling from Spiral\Component
- no more additional dependencies on ContainerInterface
- support for read/write database connections
- more flexible configuration
- less dependencies between classes
- interfaces have been exposed for table, column, index and foreignKeys
- new interface for driver, database, table, compiler and handler
- immutable quoter
- more tests
- custom exceptions for connection and constrain exceptions 

1.0.1 (15.06.2018)
-----
- MySQL driver can reconnect now

1.0.0 (02.03.2018)
-----
* Improved handling of renamed indexes associated with renamed columns

0.9.1 (07.02.2017)
-----
* Pagination split into separate package

0.9.0 (03.02.2017)
-----
* DBAL, Pagination and Migration component split from component repository
