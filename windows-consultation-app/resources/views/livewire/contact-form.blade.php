<div class="flex items-center justify-center min-h-screen bg-gray-100 p-4">
    <div class="card w-full max-w-lg p-8 shadow-md rounded-lg bg-white mx-auto">
        @if (session()->has('message'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="mb-6 flex items-center">
                <label for="zipCode" class="w-1/4 font-medium text-base sm:text-lg">7-Digit Zip Code:</label>
                <input type="text" id="zipCode" wire:model="zipCode" class="form-input w-3/4 border rounded p-3 ml-2" required>
                @error('zipCode') <span class="text-red-500 ml-2">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6 flex items-center">
                <label for="firstName" class="w-1/4 font-medium text-base sm:text-lg">First Name:</label>
                <input type="text" id="firstName" wire:model="firstName" class="form-input w-3/4 border rounded p-3 ml-2" required>
                @error('firstName') <span class="text-red-500 ml-2">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6 flex items-center">
                <label for="lastName" class="w-1/4 font-medium text-base sm:text-lg">Last Name:</label>
                <input type="text" id="lastName" wire:model="lastName" class="form-input w-3/4 border rounded p-3 ml-2" required>
                @error('lastName') <span class="text-red-500 ml-2">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6 flex items-center">
                <label for="phoneNumber" class="w-1/4 font-medium text-base sm:text-lg">Phone Number:</label>
                <input type="text" id="phoneNumber" wire:model="phoneNumber" class="form-input w-3/4 border rounded p-3 ml-2" required>
                @error('phoneNumber') <span class="text-red-500 ml-2">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6 flex items-center">
                <label for="streetAddress" class="w-1/4 font-medium text-base sm:text-lg">Street Address:</label>
                <input type="text" id="streetAddress" wire:model="streetAddress" class="form-input w-3/4 border rounded p-3 ml-2" required>
                @error('streetAddress') <span class="text-red-500 ml-2">{{ $message }}</span> @enderror
            </div>

            <div class="mb-6">
                <label for="notes" class="block font-medium text-base sm:text-lg mb-2">Notes:</label>
                <textarea id="notes" wire:model="notes" class="form-textarea w-full border rounded p-3" rows="4"></textarea>
                @error('notes') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-primary w-full mt-4 bg-blue-500 text-white p-4 rounded-lg hover:bg-blue-600">Submit</button>
        </form>
    </div>
</div>
