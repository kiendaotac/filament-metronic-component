<?php

namespace Kiendaotac\FilamentMetronicComponent\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kiendaotac\FilamentMetronicComponent\FilamentMetronicComponent
 */
class FilamentMetronicComponent extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kiendaotac\FilamentMetronicComponent\FilamentMetronicComponent::class;
    }
}
