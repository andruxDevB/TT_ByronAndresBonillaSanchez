@props(['category'])
@if ( $category == 5)
    @for ($i = 0; $i < 5; $i++)
        <span class="material-symbols-outlined text-warning text-sm">
            star
        </span>
    @endfor
@elseif ( $category == 4)
    @for ($i = 0; $i < 4; $i++)
        <span class="material-symbols-outlined text-warning text-sm">
            star
        </span>
    @endfor
@elseif ( $category == 3)
    @for ($i = 0; $i < 3; $i++)
        <span class="material-symbols-outlined text-warning text-sm">
            star
        </span>
    @endfor
@elseif ( $category == 2)
    @for ($i = 0; $i < 2; $i++)
        <span class="material-symbols-outlined text-warning text-sm">
            star
        </span>
    @endfor
@elseif ( $category == 1)
    <span class="material-symbols-outlined text-warning text-sm">
        star
    </span>
@endif
