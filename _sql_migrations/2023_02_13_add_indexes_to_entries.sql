BEGIN;

CREATE TABLE `entries`
(
    `id`         int                                       NOT NULL,
    `title`      varchar(120) COLLATE utf8mb4_hungarian_ci NOT NULL,
    `content`    text CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci,
    `created_at` timestamp                                 NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_hungarian_ci;


ALTER TABLE `entries`
    ADD PRIMARY KEY (`id`),
    ADD KEY `entries_title_index` (`title`);
ALTER TABLE `entries`
    ADD FULLTEXT KEY `entries_content_index` (`content`);


ALTER TABLE `entries`
    MODIFY `id` int NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 9;


COMMIT;
