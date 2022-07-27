@extends('layouts.main')
@section('content')
<section id="about" class="about">
    <form>
        <div class="container">
            <div class="description">
                <label for="tip">Введите название растения</label>
                <select name="tip" id="tip" class="tip" title="tip">
                    <option value="0">Начните</option>
                    <option value="1">продолжите</option>
                    <option value="2">Закончите</option>
                </select>
            </div>
        </div>
    </form>
</section>
@endsection
