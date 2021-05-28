<?php

if(old($name))
{
    $value = old($name);
}

?>

@extends('partials/form/_bootstrap')

@section('html')
    <input type="date"
            class="form-control"
            name="{{ $name }}"
            id="{{ $name }}-field"
            placeholder="{{ $placeholder ?? 'yyyy-mm-dd' }}"
            value="{{ $value ?? '' }}">
@overwrite
