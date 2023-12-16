<div>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <!-- Display the fetched review -->
                <div class="container p-3">
                    @forelse ($this->user as $latestReview)
                        <div class="card border-0 mb-4">
                            <div class="card-header font-weight-bold website-theme" style="border-radius: 8px 8px 0 0; background-color: #1e525b; color: #c2f2fc; font-size: 24px;">
                                {{ $latestReview->heading }}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Display the review image -->
                                        @if ($latestReview->imageFile)
                                            <img src="{{ asset('storage/' . $latestReview->imageFile) }}" alt="Review Image" class="img-fluid rounded d-flex justify-content-center">
                                        @else
                                            <p>No image available</p>
                                        @endif
                                    </div>
                                    <div class="col-md-8">
                                        <p style="font-size: 14px;">{{ $latestReview->review }}</p>
                                        <strong style="font-size: 14px;">[Continue Reading...]</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center" style="background-color: rgba(0, 0, 0, .03);">
                                <span class="text-secondary font-italic"><small><!-- Your additional content here --></small></span>
                                <span class="btn btn-secondary btn-sm" style="font-size: 12px;">Movie Reviews</span>
                            </div>
                        </div>
                    @empty
                        <p>No reviews available</p>
                    @endforelse
                    <div>
                        {{ $this->user->links() }} <!-- Pagination Links -->
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
