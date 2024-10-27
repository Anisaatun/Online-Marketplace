<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold text-center">Checkout</h1>

    @if (session()->has('message'))
        <div class="mt-2 text-green-600 text-center">{{ session('message') }}</div>
    @endif

    <div class="mt-4 flex justify-center">
        <div class="w-full max-w-md">
            <h2 class="text-lg font-semibold text-center">Your Cart</h2>
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-4 text-left">Nama Produk</th>
                        <th class="py-3 px-4 text-left">Jumlah</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach($cartItems as $item)
                        @php
                            $itemTotal = $item->quantity * $item->product->price;
                        @endphp
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-4">{{ $item->product->name }}</td>
                            <td class="py-3 px-4">{{ $item->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                <h3 class="text-lg font-semibold">Ringkasan Pembayaran</h3>
                <ul class="space-y-2">
                    <li class="flex justify-between">
                        <span>Subtotal:</span>
                        <span>Rp{{ number_format($subtotal, 2) }}</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Pajak (10%):</span>
                        <span>Rp{{ number_format($vat, 2) }}</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Diskon:</span>
                        <span>Rp{{ number_format($discount, 2) }}</span>
                    </li>
                    <li class="flex justify-between font-bold">
                        <span>Total:</span>
                        <span>Rp{{ number_format($total, 2) }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-semibold text-center">Lengkapi informasimu</h2>
        <form wire:submit.prevent="placeOrder">
            <div class="mb-4">
                <label for="buyer_name" class="block text-sm font-medium">Nama Lengkap</label>
                <input type="text" id="buyer_name" wire:model="buyer_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required />
            </div>
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium">Alamat Lengkap</label>
                <textarea id="address" wire:model="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
            </div>
            <div class="mb-4">
                <label for="postal_code" class="block text-sm font-medium">Kode pos</label>
                <input type="text" id="postal_code" wire:model="postal_code" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required />
            </div>

            <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500">
                Buat Pesanan (COD)
            </button>
        </form>
    </div>
</div>