
# flooris-prestashop-models

**PrestaShop Models for Laravel Tests and Factories**

This package provides PrestaShop model support for Laravel applications, with a focus on enhancing testing workflows and facilitating the generation of Laravel factories for PrestaShop data.

You can find the package at [GitHub - flooris-prestashop-models](https://github.com/flooris/).

---

## Overview

The `flooris-prestashop-models` package helps integrate PrestaShop models with Laravel applications, making it easier to write tests and generate database records using Laravel factories. This is particularly useful when you're working with PrestaShop's complex data structures and want to take advantage of Laravel’s powerful testing and factory generation tools.

---

## Installation

To get started, you can install the package via Composer:

```bash
composer require flooris/flooris-prestashop-models
```

Once installed, the package will be ready to use in your Laravel application, and you can start using PrestaShop models within your Laravel tests and factories.

---

## Usage

The package allows you to interact with PrestaShop models as Laravel Eloquent models, simplifying the process of creating and manipulating PrestaShop data. You can use it with Laravel's built-in **Factories** and **Testing** capabilities.

### Example Usage

Here’s an example of how to use a PrestaShop model in a Laravel factory:

```php
use App\Models\PrestaShop\Product;

Product::factory()->create([
    'name' => 'Sample Product',
    'price' => 19.99,
]);
```

This will create a new product in your PrestaShop database using the data defined in the factory.

### Factory Configuration

You can define custom factories for PrestaShop models. For example, to create a factory for a PrestaShop product, you might set up a factory like this:

```php
use Faker\Generator as Faker;

$factory->define(App\Models\PrestaShop\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomFloat(2, 1, 100),
        // Add other product fields here
    ];
});
```
--- 
## Extending the Package
While the `flooris-prestashop-models` package provides integration with common PrestaShop models, you may find the need to extend it further for your own project-specific requirements. Here are some ways you can extend or modify the package:

In some cases, you might want to add relationships or custom logic to an existing PrestaShop model. For example, if you want to extend the ProductAttribute model, you can create a new class like this:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Flooris\Prestashop\Models\Product\ProductAttribute as BaseProductAttribute;
use Flooris\Prestashop\Models\Product\ProductAttributeShop;

class ProductAttribute extends BaseProductAttribute
{
    public function productAttributeShops(): HasMany
    {
        return $this->hasMany(ProductAttributeShop::class, 'id_product_attribute', 'id_product_attribute');
    }

    public function isInStock(int $idShop): bool
    {
        /** @var ?ProductAttributeShop $productAttributeShop */
        $productAttributeShop = $this->productAttributeShops()->where('id_shop', $idShop)->first();

        if ($productAttributeShop?->available_date !== '0000-00-00') {
            return false;
        }

        return $this->productAttributeShops()->where('id_shop', $idShop)->first()?->active;
    }
}

```

---

## Features

- **PrestaShop Model Integration**: Easily integrate PrestaShop models into Laravel applications.
- **Factories for PrestaShop Data**: Create Laravel factories for PrestaShop entities, simplifying data seeding and testing.
- **Laravel Testing Compatibility**: Use PrestaShop models seamlessly in your Laravel tests.
- **Support for Common PrestaShop Models**: Includes support for common PrestaShop models like products, categories, and customers.

---

## Testing

With this package, you can easily set up tests that involve PrestaShop data. Here’s an example of a simple test that creates a PrestaShop product:

```php
use App\Models\PrestaShop\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_product_creation()
    {
        $product = Product::factory()->create([
            'name' => 'Test Product',
            'price' => 10.99,
        ]);

        $this->assertDatabaseHas('products', [
            'name' => 'Test Product',
            'price' => 10.99,
        ]);
    }
}
```

This test will create a product in the database and check that the product exists with the expected values.

---

## Contributing

We welcome contributions to improve and extend the functionality of this package. If you'd like to contribute, please follow these steps:

1. Fork the repository on GitHub.
2. Create a new branch for your changes.
3. Make your changes and ensure tests pass.
4. Submit a pull request with a detailed description of your changes.
   

---

## License

This package is licensed under the MIT License. See [LICENSE](LICENSE) for more details.

---

## Author

- **Flooris** - [GitHub Profile](https://github.com/flooris)
