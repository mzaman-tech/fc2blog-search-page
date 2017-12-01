<?php

require 'db_config.php';

$sql = "delete from `fc2blog` where datediff(now(), fc2blog.date) > 14";
$conn->query($sql);
$conn->close();
