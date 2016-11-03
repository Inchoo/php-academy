CREATE TABLE `attendee` (
  `id` int(8) UNSIGNED NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `academy_major` varchar(50) NOT NULL,
  `academy_year` tinyint(1) UNSIGNED NOT NULL,
  `motivation` text NOT NULL,
  `prior_knowledge` varchar(10000) NOT NULL DEFAULT '',
  `prior_languages` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `attendee` (`id`, `submitted_at`, `name`, `email`, `academy_major`, `academy_year`, `motivation`, `prior_knowledge`, `prior_languages`) VALUES
(1, '2016-11-02 22:50:20', 'Pero Perić', 'pero@inchoo.net', 'Računarstvo', 3, 'Like to learn new things', 'Some', 'C#,Javascript');

ALTER TABLE `attendee`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `attendee`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;