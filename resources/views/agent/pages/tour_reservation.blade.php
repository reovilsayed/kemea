<x-agent.app>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <style>
        .fc-toolbar-chunk {
            display: flex;
            position: relative;
            /* margin-left: 40px; */
        }

        .fc-button {
            background-color: #0666EB !important;
            border: none !important;
            text-transform: capitalize !important;
            font-size: 14px !important;
        }

        .fc-next-button {
            position: absolute !important;
            right: -200px;

        }

        .fc-prev-button {
            position: absolute !important;
            left: -40px;
        }

        .fc .fc-prev-button,
        .fc .fc-next-button {
            background-color: transparent !important;
            border: none;
            color: #000000 !important;
        }

        .fc .fc-toolbar-title {
            font-size: 18px;
            margin-top: 5px;
        }

        .fc .fc-button .fc-icon {
            font-size: 18px;
        }

        .tour-title {
            font-size: 14px;
        }

        .custom-select:focus {
            box-shadow: none !important;
            border: 1px solid #404040 !important;
        }
    </style>
    <div class="container  padding-xxl">
        <div class="d-flex justify-content-between">
            <h4 class="greading">Tour Reservation</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
                    <li class="breadcrumb-item text-sm"><a class=" text-primary fw-bold text-decoration-underline"
                            href="{{ route('agent.dashboard.properties.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tour Reservation</li>
                </ol>
            </nav>
        </div>
        <div class="card mt-5 p-4">
            <div id="calendar"></div>

        </div>
    </div>


    <div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title border-bottom-0 text-primary" id="exampleModalLabel">Add Your Schedule</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <form action="{{ route('agent.dashboard.schedule.store') }}" method="post">
                        @php
                            $daysOfWeek = [
                                'Saturday',
                                'Sunday',
                                'Monday',
                                'Tuesday',
                                'Wednesday',
                                'Thursday',
                                'Friday',
                            ];
                        @endphp
                        @csrf
                        @for ($i = 0; $i < 7; $i++)
                            @php
                             $day = $daysOfWeek[$i];
                                $schedule = auth()->user()->schedules()->firstWhere('days', $day);
                       
                            @endphp
                           <div class="row mb-3">
                            <div class="col-4">
                                <label class="form-label">Days:</label>
                                <select class="form-select" name="schedule[{{ $i }}][day]">
                                    @foreach($daysOfWeek as $option)
                                        <option value="{{ $option }}" {{ $option == $day ? 'selected' : '' }}>{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                <label class="form-label">From:</label>
                                <input class="form-control" type="time" name="schedule[{{ $i }}][from_time]" value="{{ $schedule->from ?? '' }}">
                            </div>
                            <div class="col-4">
                                <label class="form-label">To:</label>
                                <input class="form-control" type="time" name="schedule[{{ $i }}][to_time]" value="{{ $schedule->to ?? '' }}">
                            </div>
                        </div>
                        @endfor
                        <button type="submit" class="btn btn-primary mt-3">Save changes</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    center: 'prev,next title',
                    left: 'dayGridMonth,timeGridWeek,timeGridDay',
                    right: '',
                },

                events: [{
                        title: 'Meeting',
                        start: '2025-04-28T10:30:00',
                        end: '2025-04-28T12:30:00'
                    },
                    {
                        title: 'Conference',
                        start: '2025-04-30',
                        end: '2025-05-02'
                    },
                    {
                        title: 'Project Deadline',
                        start: '2025-05-10'
                    }
                ]
            });

            calendar.render();

            // Now inject custom HTML into header
            const header = calendarEl.querySelector('.fc-header-toolbar');
            const rightDiv = document.createElement('div');
            rightDiv.className = 'fc-toolbar-chunk '; // Match FC toolbar layout
            rightDiv.innerHTML = `
            <h5 class="mb-0 me-3 tour-title">Pause Tour Booking</h5>
            <div class="form-check form-switch mb-0 me-3">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            </div>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scheduleModal">Add New</a>
        `;
            header.appendChild(rightDiv);
        });
    </script>
</x-agent.app>
