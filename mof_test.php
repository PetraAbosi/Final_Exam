<?php

<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once "file_class.php";

final class mof_test extends TestCase
{
    public function testMenuClassExists(): void
    {
        $this->assertTrue(class_exists('File'));
    }


    public function testCreateFile(): void
    {
        $this->assertArrayHasKey('id', ['$filename' => 'filename']);
    }

}
 ?>
