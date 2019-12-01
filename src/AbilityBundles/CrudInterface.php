<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\AbilityBundles;

use Ieim\LaravelContracts\Abilities\Crud\Creatable;
use Ieim\LaravelContracts\Abilities\Crud\Deletable;
use Ieim\LaravelContracts\Abilities\Crud\Editable;
use Ieim\LaravelContracts\Abilities\Crud\Indexable;
use Ieim\LaravelContracts\Abilities\Crud\Saveable;
use Ieim\LaravelContracts\Abilities\Crud\Showable;
use Ieim\LaravelContracts\Abilities\Crud\Updatable;

interface CrudInterface extends Indexable, Creatable, Saveable, Showable, Editable, Deletable, Updatable
{
}
