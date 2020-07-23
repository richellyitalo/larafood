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

        @if(is_array(session('success')))
            {!! implode('<br/>', session('success')) !!}
        @else
            {!! session('success') !!}
        @endif
    </div>
@elseif(session('warning'))
    <div class="alert border-0 alert-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(session('warning')))
            {!! implode('<br/>', session('warning')) !!}
        @else
            {!! session('warning') !!}
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
@elseif(session('error'))
    <div class="alert border-0 alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @if(is_array(session('error')))
            {!! implode('<br/>', session('danger')) !!}
        @else
            {!! session('error') !!}
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
