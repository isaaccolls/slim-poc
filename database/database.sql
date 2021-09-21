CREATE TABLE `slim-poc`.`user` (
	`name` VARCHAR(100) NOT NULL,
	`email` VARCHAR(100) NOT NULL,
	`password` VARCHAR(100) NOT NULL,
	`updated_at` DATETIME NULL,
	`created_at` DATETIME NULL,
	CONSTRAINT user_PK PRIMARY KEY (name)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

INSERT INTO
	`slim-poc`.`user` (
		name,
		email,
		password,
		updated_at,
		created_at
	)
VALUES
	(
		'Khalid',
		'Louvenia_Buckridge@yahoo.com',
		'$2y$10$gtCMa7BdCvSr0.zFArUL3.61DEalH/8A4Eab/EVzIz6HGy8AZmNK.',
		'2021-09-21 16:46:34',
		'2021-09-21 16:46:34'
	);

CREATE TABLE `slim-poc`.`guest_entry` (
	`full_name` VARCHAR(100) NOT NULL,
	`email` VARCHAR(100) NOT NULL,
	`comment` VARCHAR(100) NOT NULL,
	`updated_at` DATETIME NULL,
	`created_at` DATETIME NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

INSERT INTO
	`slim-poc`.guest_entry (
		full_name,
		email,
		comment,
		updated_at,
		created_at
	)
VALUES
	(
		'peter',
		'Sanford_Hagenes@gmail.com',
		'Illo quaerat et non.',
		'2021-09-21 16:55:46',
		'2021-09-21 16:55:46'
	);