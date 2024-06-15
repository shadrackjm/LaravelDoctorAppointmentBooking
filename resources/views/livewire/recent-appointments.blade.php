<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-5 sm:px-6 lg:px-8 lg:py-7 mx-auto">
  <div class="my-2">
      <h5 class="text-gray-500 ">Recent Appointments</h5>
  </div>
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
            <thead class="bg-gray-50 dark:bg-neutral-800">
              
              <tr>
                @if (auth()->user() && auth()->user()->role == 0)
                
                @else
                    <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Patient Name
                      </span>
                    </div>
                  </th>
                @endif
                

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Doctor
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Appointment Date
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Appointment Time
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Status
                    </span>
                  </div>
                </th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
               @if (count($recent_appointments) > 0)
                  @foreach ($recent_appointments as $appointment)
                    <tr class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800">
                        @if (auth()->user() && auth()->user()->role == 0)
                      @else
                        <td class="size-px whitespace-nowrap align-top">
                          <a class="block p-6" href="#">
                            <div class="flex items-center gap-x-4">
                              <img class="flex-shrink-0 size-[38px] rounded-lg" src="https://images.unsplash.com/photo-1572307480813-ceb0e59d8325?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=320&q=80" alt="Image Description">
                              <div>
                                <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $appointment->patient->name}}</span>
                              </div>
                            </div>
                          </a>
                        </td>
                        @endif
                        <td class="size-px whitespace-nowrap align-top">
                          <a class="block p-6" href="#">
                            <div class="flex items-center gap-x-3">
                              <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80" alt="Image Description">
                              <div class="grow">
                                <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$appointment->doctor->doctorUser->name}}</span>
                                <span class="block text-sm text-gray-500 dark:text-neutral-500">{{$appointment->doctor->doctorUser->email}}</span>
                              </div>
                            </div>
                          </a>
                        </td>
                        <td class="h-px w-72 min-w-72 align-top">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ date('d M Y',strtotime($appointment->appointment_date))}}</span>
                        </td>
                        <td class="size-px whitespace-nowrap align-top">
                          <a class="block p-6" href="#">
                            <span class="text-sm text-gray-600 dark:text-neutral-400">{{ date('H:i',strtotime($appointment->appointment_time))}}</span>
                          </a>
                        </td>
                        <td class="size-px whitespace-nowrap align-top">
                          <a class="block p-6" href="#">
                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                              <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                              </svg>
                              Published
                            </span>
                          </a>
                        </td>
                      </tr>
                  @endforeach
              @else
                  <tr>
                    <td colspan="5">No data Found!</td>
                  </tr>
              @endif
             
            </tbody>
          </table>
          <!-- End Table -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->