@extends('layouts.login')

@section('content')

<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>


      <label style="margin-right:5px;">
        <input type="radio" name="editList" value="always"/>Admin
      </label>

    <label style="margin-right:5px;">
      <input type="radio" name="editList" value="never"/>Juri
    </label>
    
    <label>
      <input type="radio" name="editList" value="costChange"/>Mahasiswa
    </label>
    
    <button>login</button>
    
    </form>
  </div>
</div>

@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
  // body...
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

});
</script>
@endpush

@stop  


