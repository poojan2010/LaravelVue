@extends('layouts.app')

@section('content')
<signup />
@endsection
    <script>
        import Signup from "../../js/components/signup";
        export default {
            components: {Signup}
        }
    </script>
