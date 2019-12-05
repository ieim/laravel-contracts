<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts;

use Ieim\LaravelContracts\Clauses\Crud\Creatable;
use Ieim\LaravelContracts\Clauses\Crud\Deletable;
use Ieim\LaravelContracts\Clauses\Crud\Editable;
use Ieim\LaravelContracts\Clauses\Crud\Indexable;
use Ieim\LaravelContracts\Clauses\Crud\Saveable;
use Ieim\LaravelContracts\Clauses\Crud\Showable;
use Ieim\LaravelContracts\Clauses\Crud\Updatable;

interface CrudInterface extends Indexable, Creatable, Saveable, Showable, Editable, Deletable, Updatable
{
}
