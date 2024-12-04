<?php
session_start();

echo "<p>Вы посещали эту страницу ".$_SESSION['visits']." раз(а).</p>";
