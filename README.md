# Count ChatGPT (2,3) Token from any laravel project

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zohaibtariq/count-gpt-token.svg?style=flat-square)](https://packagist.org/packages/zohaibtariq/count-gpt-token)
[![Total Downloads](https://img.shields.io/packagist/dt/zohaibtariq/count-gpt-token.svg?style=flat-square)](https://packagist.org/packages/zohaibtariq/count-gpt-token)

It will count tokens for chatgpt (2, 3) prompt

## Installation

You can install the package via composer:

```bash
composer require zohaibtariq/count-gpt-token
```

## Usage

```php
use CountGptToken;
CountGptToken::count_token('hello world'); // it can be your chatgpt2 or chatgpt3 prompt
```

compare results from online playground [OPEN AI PLAYGROUND TOKEN COUNT](https://platform.openai.com/tokenizer)



## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Zohaib Tariq](https://github.com/zohaibtariq)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
