@if ($data->lastPage() > 1)
    <nav class="bgc-white mt-3 d-flex" style="float:right">
        <ul class="pagination">
            <li class="page-item @if ($data->appends(request()->query())->currentPage() == 1) disabled @endif">
                <a class="page-link"
                    href="{{ $data->appends(request()->query())->url(1) }}">
                    <i class="fa fa-angle-left mr-1"></i>
                    Previous
                </a>
            </li>

            @foreach (range(1, $data->appends(request()->query())->lastPage()) as $i)
                <li
                    class="page-item {{ $i == $data->appends(request()->query())->currentPage() ? 'active' : '' }}">
                    <a class="page-link"
                        href="{{ $data->appends(request()->query())->url($i) }}">
                        {{ $i }}
                    </a>
                </li>
            @endforeach


            <li class="page-item @if ($data->appends(request()->query())->lastPage() == $data->appends(request()->query())->currentPage()) disabled @endif">
                <a class="page-link"
                    href="{{ $data->appends(request()->query())->url($data->lastPage()) }}">
                    Next
                    <i class="fa fa-angle-right ml-1"></i>
                </a>
            </li>
        </ul>
    </nav>
@endif
