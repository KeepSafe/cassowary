<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 * @generated
 * @phutil-library-version 2
 */

phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' =>
  array(
    'AndroidLintEngine' => 'lint/engine/AndroidLintEngine.php',
    'AndroidTestEngine' => 'unit/AndroidTestEngine.php',
    'ArcanistAndroidLinter' => 'lint/linter/ArcanistAndroidLinter.php',
    'ArcanistCustomLicenseLinter' => 'lint/linter/ArcanistCustomLicenseLinter.php',
    'ArcanistOCLinter' => 'lint/linter/ArcanistOCLinter.php',
    'OCLintEngine' => 'lint/engine/OCLintEngine.php',
    'OCUnitTestEngine' => 'unit/OCUnitTestEngine.php',
  ),
  'function' =>
  array(
  ),
  'xmap' =>
  array(
    'AndroidLintEngine' => 'ArcanistLintEngine',
    'AndroidTestEngine' => 'ArcanistBaseUnitTestEngine',
    'ArcanistAndroidLinter' => 'ArcanistLinter',
    'ArcanistCustomLicenseLinter' => 'ArcanistLicenseLinter',
    'ArcanistOCLinter' => 'ArcanistLinter',
    'OCLintEngine' => 'ArcanistLintEngine',
    'OCUnitTestEngine' => 'ArcanistBaseUnitTestEngine',
  ),
));