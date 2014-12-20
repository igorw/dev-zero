# dev-zero

/dev/zero emulator, provides a large supply of zeroes.

## Installation

Through [composer](https://getcomposer.org):

```bash
$ composer require igorw/dev-zero:~1.0
```

## Usage

You can call the `dev_zero` function to get some zeroes.

```php
use function igorw\dev_zero;

$zeroes = dev_zero();
foreach ($zeroes as $zero) {
    ...
}
```

For more advanced usage, it is possible to combine this library with `nikic/iter`.

For example, you can skip the first 256 zeroes:

```php
use function igorw\dev_zero;
use function iter\drop;

$zeroes = drop(2<<7, dev_zero());
```

Or you can convert them to a series of ones:

```php
use function igorw\dev_zero;
use function iter\map;

$ones = map($n ==> $n + 1, dev_zero());
```

Or even chunk the zeroes into blocks of 64K:

```php
use function igorw\dev_zero;
use function iter\chunk;

$blocks = chunk(dev_zero(), 64*1024);
```

Or if you want to get actual null bytes, you can map over the series with `chr`:

```php
use function igorw\dev_zero;
use function iter\map;

$nulls = map('chr', dev_zero());
```

Enjoy!
