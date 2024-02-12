<style>

.aiz-megabox {
    position: relative;
    cursor: pointer;
}

.aiz-megabox input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}

input[type=checkbox],
input[type=radio] {
    box-sizing: border-box;
    padding: 0;
}

.aiz-megabox>input:checked~.aiz-megabox-elem,
.aiz-megabox>input:checked~.aiz-megabox-elem {
    border-color: var(--primary);
}

.aiz-megabox .aiz-megabox-elem {
    border: 2px solid #e2e5ec;
    border-radius: 0.25rem;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    border-radius: 0.25rem;
    width: 18px;
    height: 37px;
}
</style>
<div class="mb-3 sizes">
    @foreach ($sizes as $size)
        <label class="aiz-megabox pl-0 mr-2">
            <input type="radio" name="size_id" value="{{ $size->id }}" @if($loop->first) checked @endif>
            <span
                class="aiz-megabox-elem rounded d-flex text-center justify-content-center py-2 px-3 mb-2" title="{{ $size->title ?? $size->name }}">
                {{ $size->name }}
            </span>
        </label>
    @endforeach
</div>