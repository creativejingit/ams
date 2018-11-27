@if(isset($errors) && $errors->has($field))
    <div class="error-text">{{ $errors->first($field) }}</div>
@endif