@unless ($breadcrumbs->isEmpty())
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
            @foreach ($breadcrumbs as $breadcrumb)

                @if ($breadcrumb->url && !$loop->last)
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                @else
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $breadcrumb->title }}</li>
                @endif

            @endforeach
        </ol>
        <h6 class="font-weight-bold mb-0">
            {{ ucwords(str_replace(['/', '{id}'], [' ', ''], request()->route()->uri)) }}
            @if (request()->route()->hasParameter('id'))
                ID : {{ request()->route('id') }}
            @endif
        </h6>
    </nav>
@endunless