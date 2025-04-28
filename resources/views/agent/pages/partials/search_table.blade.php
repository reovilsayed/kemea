<div class="table-responsive p-0 border border-radius-2xl">
    @if ($searches->count() > 0)
        <table class="table align-items-center mb-0">
            <thead class="t-head">
                <tr>
                    <th class="text-dark custom-text padding-custom ps-4">
                        City</th>
                    <th class=" text-dark custom-text padding-custom">
                        Property Type</th>
                    <th class="text-dark custom-text padding-custom">
                        Search Type</th>
                    <th class="text-dark custom-text  padding-custom">
                        Budget</th>
                    @if ($type == 'own')
                        <th class="text-center text-dark custom-text  padding-custom">
                            Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($searches as $search)
                    <tr>
                        <td class="fs-6 text-xs fw-bold px-4">
                            {{ $search->city }}
                        </td>
                        <td class="ps-0 text-xs fw-bold">
                            {{ $search->property_type }}
                        </td>
                        <td class="ps-0 text-xs fw-bold">
                            {{ $search->search_type }}
                        </td>

                        <td class="ps-0 text-xs fw-bold">
                            {{ Sohoj::price($search->budget) }}
                        </td>
                        @if ($type == 'own')
                            <td class="text-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('agent.dashboard.shared-search.edit', $search) }}"
                                        class="btn btn-custom-info me-1"> <i class="material-symbols-rounded ">
                                            colorize</i></a>
                                    <form action="{{route('agent.dashboard.shared-search.destroy',$search)}}" method="post">
                                         @csrf
                                         @method('delete')
                                        <button type="submit" class="btn btn-custom-danger me-1"> <i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                    <button class="btn btn-custom-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-search_typet="{{ $search->search_type }}" data-property_type="{{ $search->property_type }}" data-bedrooms="{{ $search->bedrooms }}" data-budget="{{ $search->budget }}" data-date_of_entry="{{ $search->date_of_entry }}" data-City="{{ $search->city }}" data-comment="{{ $search->comment }}">
                    <i class="material-symbols-rounded">arrow_forward</i>
                </button>
                                </div>
                            </td>
                        @endif

                    </tr>
                @endforeach


        </table>
    @endif
</div>
