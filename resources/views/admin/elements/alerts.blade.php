@if($errors->any())
    <div class="alert border-0 alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @foreach($errors->all() as $error)
            {!! $error !!}<br/>
        @endforeach
    </div>
@elseif(session('success'))
    <div class="alert border-0 alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(session('success')['messages']))
            {!! implode('<br/>', session('success')['messages']) !!}
        @else
            {!! session('success')['messages'] !!}
        @endif
    </div>
@elseif(session('warning'))
    <div class="alert border-0 alert-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(session('warning')['messages']))
            {!! implode('<br/>', session('warning')['messages']) !!}
        @else
            {!! session('warning')['messages'] !!}
        @endif
    </div>
@elseif(session('info'))
    <div class="alert border-0 alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(session('info')['messages']))
            {!! implode('<br/>', session('info')['messages']) !!}
        @else
            {!! session('info')['messages'] !!}
        @endif
    </div>
@elseif(session('danger'))
    <div class="alert border-0 alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(session('danger')['messages']))
            {!! implode('<br/>', session('danger')['messages']) !!}
        @else
            {!! session('danger')['messages'] !!}
        @endif
    </div>
@elseif(session('message'))
    <div class="alert border-0 alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(session('message')))
            {!! implode('<br/>', session('message')) !!}
        @else
            {!! session('message') !!}
        @endif
    </div>
@endif
