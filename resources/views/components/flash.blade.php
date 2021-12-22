@if (session()->has('success'))
<div class="fixed bottom-5 right-5 bg-blue-500 text-white text-sm py-2 px-4 rounded-m">
    <p>{{ session('success') }}</p>
</div>
@endif
