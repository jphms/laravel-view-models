<?php

namespace Spatie\ViewModels\Tests;

use stdClass;
use Spatie\ViewModels\ViewModel;

class DummyViewModel extends ViewModel
{
    public $property = 'abc';

    public $destructuredProperty = ['destructuredFromProperty' => true];

    protected $ignore = ['ignoredMethod'];

    protected $destructure = ['destructuredMethod', 'destructuredProperty'];

    public function __construct()
    {
        // This one is here for testing purposes
    }

    public function post(): stdClass
    {
        return (object) [
            'title' => 'title',
            'body' => 'body',
        ];
    }

    public function categories(): array
    {
        return [
            (object) [
                'name' => 'category A',
            ],
            (object) [
                'name' => 'category B',
            ],
        ];
    }

    public function ignoredMethod(): bool
    {
        return true;
    }

    public function destructuredMethod(): array
    {
        return ['destructuredFromMethod' => true];
    }

    public function callableMethod(string $name): string
    {
        return $name;
    }
}
