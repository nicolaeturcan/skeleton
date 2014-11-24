CREATE TABLE IF NOT EXISTS `municipality_and_birth_province` (
  `municipality_and_birth_province_id`                      int(11)           NOT NULL AUTO_INCREMENT,
  `municipality_and_birth_province_name_id`                 int(11)           NOT NULL,
  `municipality_and_birth_province_name`                    varchar(20),
  `municipality_and_birth_province_entryDate`               datetime          NOT NULL,
  `municipality_and_birth_province_last_update`             timestamp         NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `municipality_and_birth_province_creationUserId`          int(11)           NOT NULL,
  `municipality_and_birth_province_lastupdateUserId`        int(11)           NOT NULL,
  `municipality_and_birth_province_markedForDeletion`       enum('n','y')     NOT NULL,
  `municipality_and_birth_province_markedForDeletionDate`   datetime          NOT NULL,
  PRIMARY KEY (`municipality_and_birth_province_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `zip_code` (
  `zip_code_id`                          int(11)           NOT NULL AUTO_INCREMENT,
  `zip_code_number_id`                   int(11)           NOT NULL,
  `zip_code_entryDate`                   datetime          NOT NULL,
  `zip_code_last_update`                 timestamp         NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `zip_code_creationUserId`              int(11)           NOT NULL,
  `zip_code_lastupdateUserId`            int(11)           NOT NULL,
  `zip_code_markedForDeletion`           enum('n','y')     NOT NULL,
  `zip_code_markedForDeletionDate`       datetime          NOT NULL,
  PRIMARY KEY (`zip_code_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `body` (
  `body_id`                          int(11)           NOT NULL AUTO_INCREMENT,
  `body_whois_id`                    int(11)           NOT NULL,
  `body_teacher_option1`             tinyint(1)        COMMENT '1= TRUE, 0=FALSE',
  `body_teacher_option2`             tinyint(1)        COMMENT '1= TRUE, 0=FALSE',
  `body_teacher_option3`             tinyint(1)        COMMENT '1= TRUE, 0=FALSE',
  `body_entryDate`                   datetime          NOT NULL,
  `body_last_update`                 timestamp         NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `body_creationUserId`              int(11)           NOT NULL,
  `body_lastupdateUserId`            int(11)           NOT NULL,
  `body_markedForDeletion`           enum('n','y')     NOT NULL,
  `body_markedForDeletionDate`       datetime          NOT NULL,
  PRIMARY KEY (`body_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `status` (
  `status_id`                          int(11)           NOT NULL AUTO_INCREMENT,
  `status_state_id`                    int(11)           NOT NULL,
  `status_state_option1`               tinyint(1)        COMMENT '1= TRUE, 0=FALSE',
  `status_state_option2`               tinyint(1)        COMMENT '1= TRUE, 0=FALSE',
  `status_state_option3`               tinyint(1)        COMMENT '1= TRUE, 0=FALSE',
  `status_state_option4`               tinyint(1)        COMMENT '1= TRUE, 0=FALSE',
  `status_entryDate`                   datetime          NOT NULL,
  `status_last_update`                 timestamp         NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_creationUserId`              int(11)           NOT NULL,
  `status_lastupdateUserId`            int(11)           NOT NULL,
  `status_markedForDeletion`           enum('n','y')     NOT NULL,
  `status_markedForDeletionDate`       datetime          NOT NULL,
  PRIMARY KEY (`status_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id`                              int(11)           NOT NULL AUTO_INCREMENT,
  `teacher_person_id`                       int(11)           NOT NULL,
  `teacher_givenName`                       varchar(50),
  `teacher_sn1`                             varchar(50),
  `teacher_sn2`                             varchar(50),
  `teacher_email`                           varchar(50),
  `teacher_official_id`                     varchar(15),
  `teacher_date_of_birth`                   date,
  `teacher_municipality_and_birth_province` varchar(40),  /* */
  `teacher_homeAddress`                     varchar(20),
  `teacher_municipality`                    varchar(40),  /* No cal ja que se pot fer servir la anterior.*/
  `teacher_zip_code`                        int(11),      /* */
  `teacher_telephoneNumber`                 varchar(15),
  `teacher_mobile`                          varchar(15),
  `teacher_description`                     text,
  `teacher_body`                            int(11),      /* */
  `teacher_status`                          int(11),      /* */
  `teacher_photo`                           varchar(200),
  `teacher_entryDate`                       datetime NOT NULL,
  `teacher_last_update`                     timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `teacher_creationUserId`                  int(11) NOT NULL,
  `teacher_lastupdateUserId`                int(11) NOT NULL,
  `teacher_markedForDeletion`               enum('n','y') NOT NULL,
  `teacher_markedForDeletionDate`           datetime NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;