# PHP ISO-639

[![Run Test](https://github.com/matriphe/php-iso-639/actions/workflows/test.yml/badge.svg)](https://github.com/matriphe/php-iso-639/actions/workflows/test.yml)
[![Total Download](https://img.shields.io/packagist/dt/matriphe/iso-639.svg)](https://packagist.org/packages/matriphe/iso-639)
[![Latest Stable Version](https://img.shields.io/packagist/v/matriphe/iso-639.svg)](https://packagist.org/packages/matriphe/iso-639)

PHP library to convert ISO-639-1 code to language name, based on Wikipedia's [List of ISO 639-1 codes](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes).

## Installation

For PHP 8.1 or latest:

```shell
composer require matriphe/iso-639
```

For older PHP version:

```shell
composer require matriphe/iso-639:1.3
```

## Requirements

- PHP 8.0 or higher
- **Optional**: `ext-mbstring` extension for better multibyte character support

The library will work without the `mbstring` extension, but for optimal handling of multibyte characters (like accented characters, Cyrillic, Arabic, etc.) in language names, it's recommended to install the `mbstring` extension.

## Usage Example

```php
<?php

required 'src/ISO639.php';
//required 'vendor/autoload.php'; // If using composer

$iso = new Matriphe\ISO639\ISO639;

// Get language name from ISO-639-1 code
echo $iso->languageByCode1('en'); // English
echo $iso->languageByCode1('id'); // Indonesian
echo $iso->languageByCode1('jv'); // Javanese

// Get native language name from ISO-639-1 code
echo $iso->nativeByCode1('en'); // English
echo $iso->nativeByCode1('id'); // Bahasa Indonesia
echo $iso->nativeByCode1('jv'); // basa Jawa

// Get language name from ISO-639-2t code
echo $iso->languageByCode2t('eng'); // English
echo $iso->languageByCode2t('ind'); // Indonesian
echo $iso->languageByCode2t('jav'); // Javanese

// Get native language name from ISO-639-2t code
echo $iso->nativeByCode2t('eng'); // English
echo $iso->nativeByCode2t('ind'); // Bahasa Indonesia
echo $iso->nativeByCode2t('jav'); // basa Jawa

// Get language name from ISO-639-2b code
echo $iso->languageByCode2b('eng'); // English
echo $iso->languageByCode2b('ind'); // Indonesian
echo $iso->languageByCode2b('jav'); // Javanese

// Get native language name from ISO-639-2b code
echo $iso->nativeByCode2b('eng'); // English
echo $iso->nativeByCode2b('ind'); // Bahasa Indonesia
echo $iso->nativeByCode2b('jav'); // basa Jawa

// Get language name from ISO-639-3 code
echo $iso->languageByCode3('eng'); // English
echo $iso->languageByCode3('ind'); // Indonesian
echo $iso->languageByCode3('jav'); // Javanese

// Get native language name from ISO-639-3 code
echo $iso->nativeByCode3('eng'); // English
echo $iso->nativeByCode3('ind'); // Bahasa Indonesia
echo $iso->nativeByCode3('jav'); // basa Jawa

// Get language array from ISO-639-2b code
echo $iso->getLanguageByIsoCode2b('eng'); // ['en', 'eng', 'eng', 'eng', 'English', 'English']
echo $iso->getLanguageByIsoCode2b('ind'); // ['id', 'ind', 'ind', 'ind', 'Indonesian', 'Bahasa Indonesia']
echo $iso->getLanguageByIsoCode2b('jav'); // ['jv', 'jav', 'jav', 'jav', 'Javanese', 'basa Jawa']
```

## Contributing

Do as usual contribution on open source projects by creating a pull request!

### Install Composer

```console
composer install
```

### Run Test

```console
composer run-script test
```

### Run Linter Fix

```console
composer run-script lint:fix
```
