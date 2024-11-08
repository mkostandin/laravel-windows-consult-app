<div class="card p-4 shadow-md">
    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Name:</label>
            <input type="text" id="name" wire:model="name" class="form-input w-full" autocomplete="name" required>
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium mb-1">Email:</label>
            <input type="email" id="email" wire:model="email" class="form-input w-full" autocomplete="email" required>
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block font-medium mb-1">Message:</label>
            <textarea id="message" wire:model="message" class="form-textarea w-full" required></textarea>
            @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary w-full mt-4">Send Message</button>
    </form>
</div>
