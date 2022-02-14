<?php

use nera\SimpleNavigation\Facades\SimpleNavigation;

it('can add elements', function () {
    $appData = [];

    $appData = SimpleNavigation::addAppData($appData);

    $this->assertArrayHasKey('simple_navigation', $appData);
    $this->assertArrayHasKey('main', $appData['simple_navigation']);
    $this->assertArrayHasKey('footer', $appData['simple_navigation']);
});
