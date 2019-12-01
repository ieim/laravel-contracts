# laravel-contracts

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

After a couple of Laravel projects I ended up with similar problems solved on different projects. 

This kind of sucked.

Maintaining is a headache. Building features takes longer then it feels they should. And so on.

So the idea came up, lets define interfaces which are similar across all.

Thinking further I thought you know what, lets define two types of interfaces.

We have abilities or ability bundles.

*Abilities* provide one single function. Like in a *CRUD-Interface* we could provide a `indexable` ability, 
which gives the class which implements it the ability to run an index function.

*AbilityBundles* on the other hand, are sets which define multiple abilities or functions. Keeping the CRUD 
example, we could imagine that a *CRUD-AbilityBundle* defines besides `indexable`, also `showable`, `saveable`, 
`updatable` and so on.

## A word on testing
At first I was like, no need to test. 

Thinking deeper, I realized, if there no tests, which implement the interfaces, this repo is useless.

Simple because we can never be sure that those interfaces do their job.

Additional goodie, we have objects which can be used in repositories which implement `laravel-contracts`.  

So feel free to use `tests/Dummies` in you testcases.
 
## Install

Via Composer

``` bash
$ composer require ieim/laravel-contracts
```

## Usage

``` php
$skeleton = new ieim\laravel-contracts();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, consider sending me an email to this@marceichenseher.de instead of using the issue tracker.

## Credits

- [Marc Eichenseher][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ieim/laravel-contracts.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ieim/laravel-contracts/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ieim/laravel-contracts.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ieim/laravel-contracts.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ieim/laravel-contracts.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ieim/laravel-contracts
[link-downloads]: https://packagist.org/packages/ieim/laravel-contracts
[link-author]: https://github.com/ieim
[link-contributors]: ../../contributors
