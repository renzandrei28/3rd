<?php 
  $filename = "feedback_history.txt";
  if (file_exists($filename)) {
  $entries = file($filename);
  foreach ($entries as $entry) {
  echo "<li>" . htmlspecialchars($entry) . "</li>";
  }
  } else {
  echo "<li>No feedback or suggestions available.</li>";
  }
 ?>