@if ($message = Session::get('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const Toast = Swal.mixin({
            toast: true,
            position: "center", // Change this line to set the position
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });
        Toast.fire({
            icon: "success",
            title: "{{$message}}"
        });
    });
    </script>
@endif

@if ($message = Session::get('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-right", // Change this line to set the position
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });
        Toast.fire({
            icon: "error",
            title: "{{$message}}"
        });
    });
    </script>
@endif
@if ($message = Session::get('warning'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-right", // Change this line to set the position
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });
        Toast.fire({
            icon: "warning",
            title: "{{$message}}"
        });
    });
    </script>
@endif

@if ($message = Session::get('info'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const Toast = Swal.mixin({
            toast: true,
            position: "bottom-end", // Change this line to set the position
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        });
        Toast.fire({
            icon: "info",
            title: "{{$message}}"
        });
    });
    </script>
@endif
{{--
@if ($message = Session::get('success'))
<div class="alert alert-success"> 
    <strong><i class="fa fa-check-circle"></i> {{ $message }}</strong>
</div>

@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <strong><i class="fa fa-exclamation-triangle"></i> {{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning">
        <strong><i class="fa fa-exclamation-circle"></i> {{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info">
        <strong><i class="fa fa-info-circle"></i> {{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        {{ __('There were some errors, please clear them first') }}
    </div>
@endif--}}

