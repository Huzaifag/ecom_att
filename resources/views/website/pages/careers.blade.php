@extends('website.layout.main')

@push('styles')

@endpush

@section('content')

{{-- here  --}}
<section class="newsletter">
    @include('website.component.newsletter')
</section>
@endsection

@push('scripts')

@endpush