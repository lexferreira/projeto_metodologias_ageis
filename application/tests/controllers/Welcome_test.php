<?php

class Welcome_test extends TestCase
{
    public function test_index()
    {
        $output = $this->request('GET', ['Welcome', 'index']);
        $this->assertContains('<title>Welcome to CodeIgniter</title>', $output);
    }
}
