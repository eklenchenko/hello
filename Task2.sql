CREATE TABLE `author` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `book` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `author_book` (
	`id_book` INT(11) NOT NULL,
	`id_author` INT(11) NOT NULL,
	UNIQUE INDEX `ui_book_author` (`id_book`, `id_author`),
	INDEX `i_id_book` (`id_book`),
	INDEX `i_id_author` (`id_author`),
	CONSTRAINT `fk_id_author` FOREIGN KEY (`id_author`) REFERENCES `author` (`id`),
	CONSTRAINT `fk_id_book` FOREIGN KEY (`id_book`) REFERENCES `book` (`id`)
);

