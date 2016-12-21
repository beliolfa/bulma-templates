 @if(Session::has('message'))
    <p class="notification is-success">{{ Session::get('message') }}</p>
@endif
