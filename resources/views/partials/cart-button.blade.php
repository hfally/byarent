@php($cart_bag = session('cart') ?? [])

<button type="button"
        class="btn w-100 {{ in_array($house->id, $cart_bag) ? 'btn-danger' : 'btn-dark' }} border-top-left-radius-0 btn-cart"
        data-action="{{ in_array($house->id, $cart_bag) ? 'remove' : 'add' }}"
        data-content="{{ $house->id }}">
    <span class="text-add" style="display: {{ in_array($house->id, $cart_bag) ? 'none' : 'block' }}">
        <i class="fa fa-cart-plus"></i>
        Add to cart
    </span>

    <span class="text-remove" style="display: {{ in_array($house->id, $cart_bag) ? 'block' : 'none' }}">
        <i class="fa fa-minus-circle"></i>
        Remove from cart
    </span>
</button>