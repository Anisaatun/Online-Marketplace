<div>
    <livewire:bread-crumb :url="$currentUrl" />
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                <h1 class="text-2xl font-bold">Manage Orders</h1>
            </div>

            <!-- Table -->
            <div class="p-6">
                <table class="min-w-full mt-4 bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Nama Produk</th>
                            <th class="border px-4 py-2">Nama</th>
                            <th class="border px-4 py-2">Alamat</th>
                            <th class="border px-4 py-2">Kode Pos</th>
                            <th class="border px-4 py-2">Total</th>
                            <th class="border px-4 py-2">Created At</th>
                            <th class="border px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="border px-4 py-2">{{ $order->id }}</td>
                                <td class="border px-4 py-2">{{ $order->product_name }}</td>
                                <td class="border px-4 py-2">{{ $order->buyer_name }}</td>
                                <td class="border px-4 py-2">{{ $order->address }}</td>
                                <td class="border px-4 py-2">{{ $order->postal_code }}</td>
                                <td class="border px-4 py-2">Rp{{ number_format($order->total, 2) }}</td>
                                <td class="border px-4 py-2">{{ $order->created_at->format('d-m-Y H:i') }}</td>
                                <td class="border px-4 py-2">
                                    <button wire:click="deleteOrder({{ $order->id }})" class="text-red-600 hover:text-red-800">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>