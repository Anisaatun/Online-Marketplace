<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto bg-slate-100">
  <div class="max-w-xl mx-auto">
      <div class="text-center">
          <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl">
              Contact us
          </h1>
          <p class="mt-1 text-gray-600">
              Beri tahu kami apa kendala kamu
          </p>
      </div>

      <div class="mt-12">
          <!-- Form -->
          <form wire:submit.prevent="submit">
              <div class="grid gap-4 lg:gap-6">
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                      <div>
                          <label for="first_name" class="block mb-2 text-sm text-gray-700 font-medium">First Name</label>
                          <input type="text" wire:model="first_name" id="first_name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" required>
                      </div>

                      <div>
                        <label for="last_name" class="block mb-2 text-sm text-gray-700 font-medium">Last Name</label>
                        <input type="text" wire:model="last_name" id="last_name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>
                  </div>

                  <div>
                      <label for="email" class="block mb-2 text-sm text-gray-700 font-medium">Email</label>
                      <input type="email" wire:model="email" id="email" autocomplete="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" required>
                  </div>

                  <div>
                      <label for="details" class="block mb-2 text-sm text-gray-700 font-medium">Details</label>
                      <textarea wire:model="details" id="details" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
                  </div>
              </div>

              <div class="mt-3 flex">
                  <div class="flex">
                    <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-1.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                  </div>
                  <div class="ms-3">
                      <label for="remember-me" class="text-sm text-gray-600">By submitting this form I have read and acknowledged the <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">Privacy policy</a></label>
                  </div>
              </div>
              <!-- End Checkbox -->

              <div class="mt-6 grid">
                  <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Send</button>
              </div>

              <div class="mt-3 text-center">
                  @if (session()->has('message'))
                      <p class="text-sm text-green-600">
                          {{ session('message') }}
                      </p>
                  @endif
              </div>
          </form>
          <!-- End Form -->
      </div>
  </div>
</div>