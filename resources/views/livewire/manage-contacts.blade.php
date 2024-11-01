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
                                <h2 class="text-xl font-semibold text-gray-800">
                                    Contact List
                                </h2>
                                <p class="text-sm text-gray-600">
                                    View and manage your contacts.
                                </p>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 px-5">
                                <tr>
                                    <th class="py-2 px-4 border-b ">Id</th>
                                    <th class="py-2 px-4 border-b">First Name</th>
                                    <th class="py-2 px-4 border-b">Last Name</th>
                                    <th class="py-2 px-4 border-b">Email</th>
                                    <th class="py-2 px-4 border-b">Details</th>
                                    <th class="px-6 py-3 border-b">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @if (count($contacts) > 0)
                                    @foreach ($contacts as $contact)
                                        <tr wire:key="{{$contact->id}}">
                                            <th class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="block text-sm  text-gray-500">{{ $contact->id }}</span>
                                                </div>
                                            </th>
                                            <th class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="block text-sm  text-gray-500">{{ $contact->first_name }}</span>
                                                </div>
                                            </th>
                                            <th class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="block text-sm  text-gray-500">{{ $contact->last_name }}</span>
                                                </div>
                                            </th>
                                            <th class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="block text-sm  text-gray-500">{{ $contact->email }}</span>
                                                </div>
                                            </th>
                                            <th class="size-px whitespace-nowrap">
                                                <div class="px-6 py-3">
                                                    <span class="block text-sm  text-gray-500">{{ $contact->details }}</span>
                                                </div>
                                            </th>
                                            <th class="size-px whitespace-nowrap">
                                                <div class="px-6 py-1.5">
                                                    <a wire:click="delete({{ $contact->id }})" wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE" class="inline-flex items-center gap-x-1 text-sm text-red-500 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">
                                                        Delete
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="size-px whitespace-nowrap" colspan="7">
                                            <div class="px-6 py-3">
                                                <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                                                    No Data Found!
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
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