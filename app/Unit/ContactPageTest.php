<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ContactPageTest extends TestCase
{
  
    public function the_contact_can_be_accessed (): void
    {

        $this->assertTrue(true);
        $this->assertDatabaseHas('contacts', [
            'email' => 'john@example.com',
            'message' => 'This is a test message.',
        ]);
    }
}
