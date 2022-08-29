@if ($user->isAdmin())
    @lang('Administrator')
@elseif ($user->isUser())
    @lang('User')
@elseif ($user->isAssociation())
    @lang('Association')
@else
    @lang('N/A')
@endif
