



@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
</div>
<script>
    setTimeout(function() {
        $('.alert-success').alert('close');
    }, 5000);
</script>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
</div>
<script>
    setTimeout(function() {
        $('.alert-danger').alert('close');
    }, 5000);
</script>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
</div>
<script>
    setTimeout(function() {
        $('.alert-warning').alert('close');
    }, 5000);
</script>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
</div>
<script>
    setTimeout(function() {
        $('.alert-info').alert('close');
    }, 5000);
</script>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show">
    <b>You Are Not Authenticated Please Try Again !</b>
    
</div>
<script>
    setTimeout(function() {
        $('.alert-danger').alert('close');
    }, 5000);
</script>
@endif
