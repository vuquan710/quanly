<?php
if (empty($listOption)) {
    $listOption = \App\Http\Controllers\Admin\AdminAppController::$listOptionPaginate;
}
$dataSearch = empty($dataSearch) ? "" : "&search=".$dataSearch;
?>
<select class="change-limit">
    @foreach($listOption as $value)
        <option value="{{{$value}}}"
                {{$paginator->perPage()==$value?'selected="selected"':''}} data-link="{{$paginator->url($paginator->currentPage()).'&limit='.$value.$dataSearch}}">
            {{$value}}
        </option>
    @endforeach
</select>