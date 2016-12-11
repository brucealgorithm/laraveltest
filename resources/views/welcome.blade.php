@extends('layouts.app')

@section('content')
<script src="//cdn.auth0.com/js/lock/10.0/lock.min.js"></script>
<script type="text/javascript">

  var lock = new Auth0Lock('o40P87swPitWFVb3bE1Kg5c1lMEpNSDP', 'brucealgorithm.auth0.com');


  function signin() {
    lock.show({
        callbackURL: 'https://laraveltest-olotusoftadmin.c9users.io/'
      , responseType: 'code'
      , authParams: {
        scope: 'openid email'  // Learn about scopes: https://auth0.com/docs/scopes
      }
    });
  }
</script>
<button onclick="window.signin();">Login</button>
@endsection
