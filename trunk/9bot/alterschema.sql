alter table `booking_tours`.`newslogging` change `NewsTitle` `NewsTitle` text  CHARACTER SET utf8   NOT NULL , change `NewsDetails` `NewsDetails` text  CHARACTER SET utf8   NOT NULL 

alter table `booking_tours`.`resellersinfo` add column `PriorityOrder` varchar (10)  NULL  after `ContactType`