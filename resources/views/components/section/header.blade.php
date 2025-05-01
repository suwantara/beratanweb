@props(['breadcrumbs' => [], 'header' => 'Beratan Dairy Farm'])

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: url('{{ asset('img/banner.jpg') }}') center center no-repeat; background-size: cover;">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">
            {{ $header }}
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                @foreach ($breadcrumbs as $breadcrumb)
                    <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}" aria-current="{{ $loop->last ? 'page' : '' }}">
                        @if (!$loop->last)
                            <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a>
                        @else
                            {{ $breadcrumb['label'] }}
                        @endif
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
