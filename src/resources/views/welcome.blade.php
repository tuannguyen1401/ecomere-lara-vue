@extends('layouts.app')

@section('title', 'Trang chủ Vue xịn xò')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h2 class="mb-4 text-dark">Giao diện tích hợp Bootstrap</h2>
            <p class="text-muted"><i class="fas fa-check-circle text-success font-bold me-1"></i> Đã load Font Awesome thành công!</p>
            
            <div id="app">
                <!-- Vue sẽ mount vào đây -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Chỉ load file JS của riêng trang Welcome này thôi cho nhẹ -->
    @vite(['resources/js/welcome.js'])
@endpush