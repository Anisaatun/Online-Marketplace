<div class="container mx-auto p-5">
    <h3 class="text-2xl font-semibold mb-4">Daftar Pesanan Anda</h3>
    
    @if($orders->isEmpty())
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4" role="alert">
            <p>Anda belum memiliki pesanan.</p>
        </div>
    @else
        <table class="min-w-full bg-white border border-gray-300 shadow-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                    <th class="border border-gray-300 px-4 py-2">Nama Produk</th>
                    <th class="border border-gray-300 px-4 py-2">Tanggal Pesan</th>
                    <th class="border border-gray-300 px-4 py-2">Total Harga</th>
                    <th class="border border-gray-300 px-4 py-2">Banyak Pesanan</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($orders as $order)
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">{{ $order->product_name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $order->created_at->format('d-m-Y') }}</td>
                        <td class="border border-gray-300 px-4 py-2">Rp {{ $order->total }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $order->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>