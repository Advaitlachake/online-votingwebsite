
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `category_list` (
  `id` int(30) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `category_list` (`id`, `category`) VALUES
(1, 'MLA'),
(2, 'MP'),
(3, 'Corporator');


CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1+admin , 2 = users'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'admin1', 'admin1', 'admin123', 1),
(2, 'admin2', 'admin2', 'admin123', 1),
(3, 'voter1', 'voter1', 'voter123', 2),
(4, 'voter2', 'voter2', 'voter123', 2);


CREATE TABLE `votes` (
  `id` int(30) NOT NULL,
  `voting_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `voting_opt_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `votes` (`id`, `voting_id`, `category_id`, `voting_opt_id`, `user_id`) VALUES
(1, 1, 1, 1, 3),
(2, 1, 2, 3, 3),
(3, 1, 3, 5, 3),
(4, 1, 3, 6, 3),
(5, 1, 1, 2, 4),
(6, 1, 2, 3, 4),
(7, 1, 3, 6, 4),
(8, 1, 3, 7, 4);

CREATE TABLE `voting_cat_settings` (
  `id` int(30) NOT NULL,
  `voting_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `max_selection` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `voting_cat_settings` (`id`, `voting_id`, `category_id`, `max_selection`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 2);

CREATE TABLE `voting_list` (
  `id` int(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `voting_list` (`id`, `title`, `description`, `is_default`) VALUES
(1, 'Live Voting', 'Voting for MLA, MP & Corporator', 1);


CREATE TABLE `voting_opt` (
  `id` int(30) NOT NULL,
  `voting_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `image_path` text NOT NULL,
  `opt_txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `voting_opt` (`id`, `voting_id`, `category_id`, `image_path`, `opt_txt`) VALUES
(1, 1, 1, '1619106480_BJP.jpeg', 'Shivraj Modi'),
(2, 1, 1, '1619106480_CONGRESS.jpeg', 'Shivani Gandhi'),
(3, 1, 2, '1619106480_CONGRESS.jpeg', 'Sandeep Patel'),
(4, 1, 2, '1619106480_TMC.jpeg', 'Harshil Shah'),
(5, 1, 3, '1619106480_TMC.jpeg', 'Riyan Parag'),
(6, 1, 3, '1619106480_BJP.jpeg', 'Shivam Dubey'),
(7, 1, 3, '1619106480_CONGRESS.jpeg', 'Rahul Sharma');

ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `voting_cat_settings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `voting_list`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `voting_opt`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `votes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `voting_cat_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `voting_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `voting_opt`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

