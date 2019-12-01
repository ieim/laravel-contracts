<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\AbilityBundles;

use Illuminate\Support\Collection;
use InvalidArgumentException;

interface RawResponseInterface
{
    /**
     * Magic generation of a $rawResponse object.
     * Simply call this function with the crud function name (eg. 'index') your
     * controller is in. And it will build itself with the appropriate paths.
     *
     * If you want to append the paths manually consider initializing the object with
     * default constructor.
     *
     * @param string $operation
     * @return RawResponseInterface
     */
    public static function fromController(string $operation): RawResponseInterface;

    /**
     * Retrieve the template path.
     *
     * @return string
     */
    public function path(): string;

    /**
     * Retrieve data.
     *
     * @return Collection
     */
    public function data(): Collection;

    /**
     * Append a collection to current data set.
     * Usually [key => (mixed) value].
     *
     * @param Collection $collectionToMerge
     * @throws InvalidArgumentException if no key is specified
     * @return void
     */
    public function append(Collection $collectionToMerge): void;

    /**
     * Append a associative array to current data set.
     * Usually [key => (mixed) value].
     *
     * @param array $collectionToMerge
     * @throws InvalidArgumentException if no key is specified
     * @return void
     */
    public function appendAssocArray(array $collectionToMerge): void;
}
