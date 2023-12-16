<div class="center-form">
    <div class="card card-form" style="width: 80%; margin: 50px auto;">
        <div class="container mt-3">
            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link " onclick="window.location. href='{{ route('form') }}'" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        <a href="{{ route('form') }}" style="text-decoration: none; color: black;">Home</a>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" onclick="window.location. href='{{ route('list') }}'" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                        <a href="{{ route('list') }}" style="text-decoration: none; color: black;">Profile</a>
                    </button>
                </li>
            </ul>

            <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <!-- Content for Home tab -->
                </div>

                <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                    aria-labelledby="nav-profile-tab">
                    <!-- Table to display form data -->
                    <div class="container">
                        <h2 class="mb-4">Saved Reviews</h2>
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Heading</th>
                                    <th>Image</th>
                                    <th>Review</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($this->list as $eachlist)
                                <tr>
                                    <td>{{ $eachlist->heading }}</td>
                                    <td>
                                        @if($eachlist->imageFile)
                                        <img src="{{ asset('storage/' . $eachlist->imageFile) }}"
                                            alt="Review Image" style="max-width: 100px; max-height: 100px;">
                                        @else
                                        No image available
                                        @endif
                                    </td>
                                    <td>{{ $eachlist->review }}</td>
                                    <td>
                                        <button class="btn btn-primary">
                                            <a     href="{{ route('editform', ['id' => $eachlist->id]) }}"
                                                style="text-decoration: none; color: white;">Edit</a>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
