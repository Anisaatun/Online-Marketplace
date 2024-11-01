<!-- Table Section -->
<div>
    <livewire:bread-crumb :url="$currentUrl" />
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        <!-- Header -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800">Manage Orders</h2>
                                <p class="text-sm text-gray-600">View and manage your orders.</p>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <div class="p-6">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50 px-5">
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
                                <tbody class="divide-y divide-gray-200">
                                    @if (count($orders) > 0)
                                        @foreach ($orders as $order)
                                            <tr wire:key="{{ $order->id }}">
                                                <td class="border px-4 py-2">{{ $order->id }}</td>
                                                <td class="border px-4 py-2">{{ $order->product_name }}</td>
                                                <td class="border px-4 py-2">{{ $order->buyer_name }}</td>
                                                <td class="border px-4 py-2">{{ $order->address }}</td>
                                                <td class="border px-4 py-2">{{ $order->postal_code }}</td>
                                                <td class="border px-4 py-2">Rp{{ number_format($order->total, 2) }}</td>
                                                <td class="border px-4 py-2">{{ $order->created_at->format('d-m-Y H:i') }}</td>
                                                <td class="border px-4 py-2">
                                                    <button wire:click="deleteOrder({{ $order->id }})" wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE" class="inline-flex items-center gap-x-1 text-sm text-red-500 decoration-2 hover:underline focus:outline-none focus:underline font-medium">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="border px-4 py-2" colspan="8">
                                                <div class="px-6 py-3 text-center">
                                                    <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                                                        No Data Found!
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                            <div class="flex gap-2">
                                <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                                <select wire:model.live='perPage'
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Footer -->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
              </div>
        </div>
        
        <!-- End Table Section -->