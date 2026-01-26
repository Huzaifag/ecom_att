@extends('website.layout.main')

@push('styles')

@endpush

@section('content')

 {{-- Here --}}

<section class="newsletter">
    @include('website.component.newsletter')
</section>

@endsection

@push('scripts')
<script>
    
</script>
@endpush