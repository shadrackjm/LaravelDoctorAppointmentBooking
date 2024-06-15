<div>
    <!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-10 bg-white border my-2  shadow-md">
   <!-- Grid -->
  <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-12">
    <div class="text-center">
      <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80" alt="Image Description">
      <div class="mt-2 sm:mt-4">
        <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
          {{$doctor_details->doctorUser->name}}
        </h3>
        <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
          {{$doctor_details->speciality->speciality_name}} / {{$doctor_details->hospital_name}}
        </p>
      </div>
    </div>
    <!-- End Col -->
    <div class="text-center">
            <h3>Select an Available Date</h3>
    <input type="text" id="datepicker" autocomplete="off" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Select Available date">
    @if($selectedDate)
        <div>
            <h4>Selected Date: {{ $selectedDate }}</h4>
        </div>
    @endif
    <div>
        <h2 class="text-xl font-bold mb-2">Available Time Slots</h2>
        <div class="flex flex-wrap">
            @foreach ($timeSlots as $slot)
                <button class="m-2 p-2 bg-blue-500 text-white rounded hover:bg-blue-700" 
                type="button"
                wire:click="bookAppointment('{{$slot}}')"
                wire:confirm="Are really want to book appointment on {{ $selectedDate }}, {{ $slot }} ?">
                    {{ date('H:i',strtotime($slot)) }}                 </button>
            @endforeach
        </div>
    </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->
<script src="pikaday.js"></script>
    <script>
        // Inject available dates from Livewire
            var availableDates = @json($availableDates); 

            var picker = new Pikaday({
                field: document.getElementById('datepicker'),
                format: 'YYYY-MM-DD',
                onSelect: function(date) {
                    var selectedDate = picker.toString();
                    @this.call('selectDate', selectedDate);
                },
                disableDayFn: function(date) {
                    // Disable all dates not in the availableDates array
                    var formattedDate = moment(date).format('YYYY-MM-DD');
                    return !availableDates.includes(formattedDate);
                }
            });
    </script>
    
</div>