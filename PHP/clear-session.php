<?php
// Start the session
session_start();

// Clear the session data
session_unset();

// Destroy the session ID
session_destroy();
header("Location: ../adminlg.php")
?>
