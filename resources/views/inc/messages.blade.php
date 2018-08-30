{{--ERROR MESSAGES FROM THE FORM--}}
@if (count($errors) > 0)
    <div class="contact-form">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    </div>
@endif


{{--SUCCESS MSG FROM THE FORM--}}
@if (session('success_msg'))
    <div class="alert alert-success">
        {{session('success_msg')}}
    </div>
@endif