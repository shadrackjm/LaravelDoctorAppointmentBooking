
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
   <form wire:submit="update" class="p-5">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Bio -->
        <div>
            <x-input-label for="bio" :value="__('Bio/About')" />
            <x-text-input wire:model="bio" id="bio" class="block mt-1 w-full" type="text" name="bio" autofocus autocomplete="bio" />
            <x-input-error :messages="$errors->get('bio')" class="mt-2" />
        </div>

        <!-- Hospital Name -->
        <div>
            <x-input-label for="name" :value="__('Hospital Name')" />
            <x-text-input wire:model="hospital_name" id="hospital_name" class="block mt-1 w-full" type="text" name="hospital_name" autofocus autocomplete="hospital_name" />
            <x-input-error :messages="$errors->get('hospital_name')" class="mt-2" />
        </div>

        <!-- Speciality -->
        <div>
            <x-input-label for="name" :value="__('Specialities')" />
            <select wire:model="speciality_id" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <option selected="">Choose Speciality</option>
                @foreach ($specialities as $item)
                    <option value="{{$item->id}}" {{$speciality_id == $item->id ? 'selected' : ''}}>{{$item->speciality_name}}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('speciality_id')" class="mt-2" />
        </div>
        {{-- experience --}}
        <div>
            <x-input-label for="experience" :value="__('Experience')" />
            <x-text-input wire:model="experience" id="experience" class="block mt-1 w-full" type="number" name="experience" autofocus autocomplete="experience" />
            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
        </div>
                
        <!-- Twitter -->
        <div>
            <x-input-label for="twitter" :value="__('Twitter')" />
            <x-text-input wire:model="twitter" id="twitter" class="block mt-1 w-full" type="text" name="twitter" autofocus autocomplete="twitter" />
            <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
        </div>
        <!-- Instagram -->

        <div>
            <x-input-label for="instagram" :value="__('Instagram')" />
            <x-text-input wire:model="instagram" id="instagram" class="block mt-1 w-full" type="text" name="instagram" autofocus autocomplete="instagram" />
            <x-input-error :messages="$errors->get('instagram')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
             <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none" href="/admin/doctors">
                  Cancel
                </a>

            <x-primary-button class="ms-4">
                {{ __('Update') }}
            </x-primary-button>
             <div wire:loading>
            <div class="animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full dark:text-blue-500" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
                    Processing..
                </div>
            </div>
    </form>
</div>
        </div>
        </div>
