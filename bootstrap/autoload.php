<?php

// Autoload plugin classes and composer packages.
if (file_exists($composer = __DIR__ . '/../vendor/autoload.php')) {
    require $composer;
} else {
	throw new Exception("Composer's autoload files are missing.");
}
