create table showlist(
    showUid     int(100),
    showName    varchar(100),
    showDate    varchar(100),
    showTime    varchar(100),
    organizer   varchar(100),
    place       varchar(100),
    cast        varchar(100),
    rm          varchar(100),
    registDt    DATETIME     default CURRENT_TIMESTAMP,
    updtDt      DATETIME      ON UPDATE CURRENT_TIMESTAMP
)



