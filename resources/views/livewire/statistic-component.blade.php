<!-- Card Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
    @if (auth()->user() && auth()->user()->role == 2)
         <!-- Card -->
         <a href="">
          <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
            <div class="inline-flex justify-center items-center">
              <span class="size-2 inline-block bg-orange-500 rounded-full me-2"></span>
              <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Users</span>
            </div>

            <div class="text-center">
              <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
                {{$users_count}}
              </h3>
            </div>

            <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
              <dt class="pe-3 text-center">
                <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_users_count}}</span>
                <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
              </dt>
              <dd class="text-start ps-3">
                <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_users_count}}</span>
                <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
              </dd>
            </dl>
          </div>
        </a>
        <!-- End Card -->

    <!-- Card -->
    <a href="/admin/doctors">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Doctors</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
          {{$doctors_count}}
        </h3>
      </div>

      <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
        <dt class="pe-3 text-center">
          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_doctor_count}}</span>
          <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
        </dt>
        <dd class="text-start ps-3">
          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_doctor_count}}</span>
          <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
        </dd>
      </dl>
    </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-yellow-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Patients</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
          {{$patients_count}}
        </h3>
      </div>

      <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
        <dt class="pe-3 text-center">
          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_patient_count}}</span>
          <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
        </dt>
        <dd class="text-start ps-3">
          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_patient_count}}</span>
          <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
        </dd>
      </dl>
    </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="/admin/appointments">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white hover:shadow-md border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-blue-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Appointments</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
          {{$appointments_count}}
        </h3>
      </div>

      <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
        <dt class="pe-3 text-center">
          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_appointments_count}}</span>
          <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
        </dt>
        <dd class="text-start ps-3">
          <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_appointments_count}}</span>
          <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
        </dd>
      </dl>
    </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="/admin/specialities">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-violet-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Specialities</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
          {{$specialities_count}}
        </h3>
      </div>
      <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
              <dt class="pe-3 text-center">
                <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
                <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
              </dt>
              <dd class="text-start ps-3">
                <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
                <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
              </dd>
            </dl>
    </div>
    </a>
    <!-- End Card -->
    @endif

    @if (auth()->user() && auth()->user()->role == 1)
         <!-- Card -->
         <a href="/doctor/appointments">
            <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
              <div class="inline-flex justify-center items-center">
                <span class="size-2 inline-block bg-blue-500 rounded-full me-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">All Appointments</span>
              </div>

              <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
                  {{$doctor_appointments_count}}
                </h3>
              </div>

              <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
                <dt class="pe-3 text-center">
                  <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_appointments_count}}</span>
                  <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
                </dt>
                <dd class="text-start ps-3">
                  <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_appointments_count}}</span>
                  <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
                </dd>
              </dl>
            </div>
         </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="/doctor/appointments">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-yellow-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Upcoming Appointments</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
          {{$upcoming_appointments_count}}
        </h3>
      </div>
      <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
              <dt class="pe-3 text-center">
                <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
                <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
              </dt>
              <dd class="text-start ps-3">
                <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
                <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
              </dd>
            </dl>
      
    </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a href="/doctor/appointments">
    <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="inline-flex justify-center items-center">
        <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
        <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Complete Appointments</span>
      </div>

      <div class="text-center">
        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
          {{$complete_appointments_count}}
        </h3>
      </div>
      <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
          <dt class="pe-3 text-center">
            <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
          </dt>
          <dd class="text-start ps-3">
            <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">0</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
          </dd>
        </dl>
    </div>
    </a>
    <!-- End Card -->

    
    @endif
   
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Section -->