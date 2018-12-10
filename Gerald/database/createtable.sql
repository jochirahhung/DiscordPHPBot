SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS game (
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    diceroll int,
    user varchar(255)
);