
CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_mobile` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `updated_date` varchar(100) NOT NULL,
  `created_date` varchar(100) NOT NULL
);


ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;


