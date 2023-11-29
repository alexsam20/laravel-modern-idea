<?php //echo $users[0]['name']; ?>

{{--<?php foreach ($users as $user) { ?>--}}
{{--    <h3><?php echo $user['name']; ?></h3>--}}
{{--    <p><?php echo $user['age']; ?></p>--}}
{{--    <hr />--}}
{{--<?php } ?>--}}

@foreach($users as $user)
    <h3>{{ $user['name'] }}</h3>
    <h5>{{ $user['age'] }}</h5>
    @if($user['age'] < 18)
        <p>User can't drive</p>
    @endif
    <hr />
@endforeach


@copyright {{ date('Y') }}
