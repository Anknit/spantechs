CREATE USER 'ppudbuser'@'%' IDENTIFIED BY 'ppudbuser';

GRANT ALL PRIVILEGES ON ppudatabase . * TO 'ppudbuser'@'%';

FLUSH PRIVILEGES