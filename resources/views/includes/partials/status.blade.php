@if (session('status'))
<div class="mb-2 mt-4 font-medium text-sm text-green-600 bg-green-50 p-2 rounded-sm">
    {{ session('status') }}
</div>
@endif