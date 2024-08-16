@extends('layouts.www')

@section('content')
<script type="text/javascript">
    window.location.href = "{{ route('docs.show', ['project' => 'slate', 'slug' => '', 'version' => '1.x']) }}";
</script>


@endsection
