#!/bin/bash

/usr/bin/sudo -u postgres /usr/bin/pg_dump -Fc etracks > /home/jeanmco/database/prevac.gz
/usr/bin/sudo -u postgres /usr/bin/vacuumdb --analyze etracks
/usr/bin/sudo -u postgres /usr/bin/pg_dump -Fc etracks > /home/jeanmco/database/postvac.gz
SCHEMA_BACKUP="/home/jeanmco/database/$(date +%F).db.schema"
sudo -u postgres /usr/bin/pg_dump -C  etracks > $SCHEMA_BACKUP
