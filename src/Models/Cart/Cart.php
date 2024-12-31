<?php

namespace Flooris\Prestashop\Models\Cart;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Flooris\Prestashop\Models\PrestashopModel;
use Flooris\Prestashop\Models\Product\Product;
use Flooris\Prestashop\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Exceptions\CartAddProductMismatchException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Flooris\Prestashop\Models\Product\ProductAttribute;

/**
 * @property int        $id_cart
 * @property int        $id_customer
 * @property int        $id_guest
 * @property int        $id_shop
 * @property Carbon     $date_add
 * @property Carbon     $date_upd
 * @property Customer   $customer
 * @property Collection $products
 */
class Cart extends PrestashopModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cart';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_cart';

    protected $casts = [
        'id_cart'     => 'integer',
        'id_customer' => 'integer',
        'id_guest'    => 'integer',
        'id_shop'     => 'integer',
        'date_add'    => 'datetime',
        'date_upd'    => 'datetime',
    ];

    public static function getActive(int $customerId): ?Cart
    {
        /** @var ?Cart $cart */
        $cart = Cart::query()
            ->where('id_customer', $customerId)
            ->orderByDesc('date_add')
            ->first();

        return $cart;
    }

    /**
     * Get the country the address belongs to.
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function upQuantityinCart(Product $product, ?ProductAttribute $productAttribute = null, int $quantity = 1): bool
    {
        if ($cartProduct = $this->hasProductInCart($product, $productAttribute)) {
            $cartProduct->quantity += $quantity;
            $cartProduct->save();

            return true;
        }

        return false;
    }

    private function hasProductInCart(Product $product, ?ProductAttribute $productAttribute = null): object|null
    {
        return $this->products()
            ->where('id_product', $product->id_product)
            ->where('id_product_attribute', $productAttribute->id_product_attribute)->first();
    }

    public function products(): HasMany
    {
        return $this->hasMany(CartProduct::class, 'id_cart');
    }

    /**
     * @throws CartAddProductMismatchException
     */
    public function addProduct(Product $product, ?ProductAttribute $productAttribute = null, int $quantity = 1): void
    {
        if ($productAttribute && $productAttribute->id_product !== $product->id_product) {
            throw new CartAddProductMismatchException(
                cart: $this,
                product: $product,
                productAttribute: $productAttribute
            );
        }

        $this->products()->create([
            'id_product'           => $product->id_product,
            'id_product_attribute' => $productAttribute?->id_product_attribute,
            'quantity'             => $quantity,
            'date_add'             => Carbon::now(),
        ]);
    }

    public static function create(int $customerId): Cart
    {
        /** @var Cart $cart */
        $cart = Cart::query()->create([
            'id_customer' => $customerId,
            'id_currency' => 2,
            'id_shop'     => 4,
            'id_lang'     => 7,
        ]);

        return $cart;
    }

    public function clearAllProducts(): void
    {
        $this->products()->delete();
    }
}
