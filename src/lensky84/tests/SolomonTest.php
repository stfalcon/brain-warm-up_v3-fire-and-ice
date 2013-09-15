<?php
namespace lensky84\test;
include_once '../../../vendor/autoload.php';

use lensky84\Solomon;

/**
 * Class Solomon
 *
 * @package YourGitHubLogin
 */
class SolomonTest extends \BaseTest
{
    /**
     * Set up crossword maker
     */
    protected function setUpSolomon()
    {
        $this->solomon = new Solomon();
    }
}
