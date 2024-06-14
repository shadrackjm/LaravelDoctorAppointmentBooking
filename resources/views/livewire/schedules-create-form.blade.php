    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form wire:submit="save" class="p-5">
                    <!-- Name -->
                <div>
                    <x-input-label for="to" :value="__('Available Day')" />

                    <select wire:model="available_day" class="mb-2 py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        <option selected="">Choose Available day of a week</option>
                        @foreach ($daysOfweek as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('available_day')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="from" :value="__('Available From')" />
                    <input type="time" wire:model="from" class="mb-2 py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <x-input-error :messages="$errors->get('from')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="to" :value="__('Available To')" />
                    <input type="time" wire:model="to" class="mb-2 py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <x-input-error :messages="$errors->get('to')" class="mt-2" />
                </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none" href="/admin/specialities">
                            Cancel
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
        </div>
