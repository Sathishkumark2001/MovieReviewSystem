<div>
    <div class="center-form">
        <div class="card card-form">
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
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <form wire:submit.prevent="store" method="POST" enctype="multipart/form-data">
                            @csrf <!-- CSRF protection -->
                            <input type="hidden" wire:model="formId">

                            <h1>Review Form</h1>

                            <div class="mb-3">
                                <label for="heading" class="form-label">Heading</label>
                                <input type="text" class="form-control" id="heading" wire:model="heading"
                                    placeholder="Enter heading">
                                    @error('heading') <span class="error">{{ $message }}</span> @enderror

                            </div>

                            <div class="mb-3">
                                <label for="imageFile" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="imageFile" wire:model="imageFile"
                                    accept="image/*">
                                    @error('imageFile') <span class="error">{{ $message }}</span> @enderror

                                @if($formData && $formData->imageFile)
                                    <img src="{{ asset('storage/' . $formData->imageFile) }}" alt="Current Image" style="width: 100px; height: auto;">
                                @else
                                    <small class="text-muted">No image uploaded</small>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="review" class="form-label">Review</label>
                                <textarea class="form-control" id="review" wire:model="review" rows="5"
                                    placeholder="Enter your review"></textarea>
                                    @error('review') <span class="error">{{ $message }}</span> @enderror

                            </div>

                            <div class="mb-3">
                                <label for="fullreview" class="form-label">Full Review</label>
                                <textarea class="form-control" id="fullreview" wire:model="fullreview" rows="5"
                                    placeholder="Enter your full review"></textarea>
                                    @error('fullreview') <span class="error">{{ $message }}</span> @enderror

                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <!-- Content for the Profile tab -->
                </div>
            </div>
        </div>
    </div>
</div>
