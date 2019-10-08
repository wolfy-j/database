#!/usr/bin/env bash
set -ex

sudo apt-get update
sudo apt-get --yes remove postgresql\*
sudo apt-get install -q postgresql-10 postgresql-client-10
sudo cp /etc/postgresql/{9.6,10}/main/pg_hba.conf
sudo service postgresql restart 10
sudo netstat -plunt |grep postgres
sudo cat /etc/postgresql/10/main/postgresql.conf
sudo cat /etc/postgresql/10/main/pg_hba.conf
