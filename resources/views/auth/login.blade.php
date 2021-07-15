@extends('layouts.app')

@section('content')
<login />
@endsection
    <script>
        import Login from "../../js/components/login";
        export default {
            components: {Login}
        }
    </script>
