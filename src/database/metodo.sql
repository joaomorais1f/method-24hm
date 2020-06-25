CREATE DATABASE method;
use method;

CREATE TABLE content (
    idcontent INT AUTO_INCREMENT,
    content VARCHAR(20),
    date_content VARCHAR(20),
    day_content VARCHAR(20),
    week_content VARCHAR(20),
    half_content VARCHAR(20),
    month_content VARCHAR(20),
    PRIMARY KEY (idcontent)
) engine = innodb;,