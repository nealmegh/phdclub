<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>{{ __('labels.frontend.user.profile.avatar') }}</th>
            <td><img src="{{ $logged_in_user->picture }}" class="user-profile-image" /></td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.name') }}</th>
            <td>{{ $logged_in_user->name }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.email') }}</th>
            <td>{{ $logged_in_user->email }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.address') }}</th>
            <td>{{ $logged_in_user->address }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.city') }}</th>
            <td>{{ $logged_in_user->city }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.state') }}</th>
            <td>{{ $logged_in_user->state }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.country') }}</th>
            <td>{{ $logged_in_user->country }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.postcode') }}</th>
            <td>{{ $logged_in_user->zip }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.work') }}</th>
            <td>{{ $logged_in_user->work }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.designation') }}</th>
            <td>{{ $logged_in_user->designation }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.topic') }}</th>
            <td>{{ $logged_in_user->topic }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.institution') }}</th>
            <td>{{ $logged_in_user->institution }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.supervisor') }}</th>
            <td>{{ $logged_in_user->supervisor }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.country_phd') }}</th>
            <td>{{ $logged_in_user->country_phd }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.birthday') }}</th>
            <td>{{ $logged_in_user->birthday }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.gender') }}</th>
            <td>{{ $logged_in_user->gender }}</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.created_at') }}</th>
            <td>{{ $logged_in_user->created_at->timezone(get_user_timezone()) }} ({{ $logged_in_user->created_at->diffForHumans() }})</td>
        </tr>
        <tr>
            <th>{{ __('labels.frontend.user.profile.last_updated') }}</th>
            <td>{{ $logged_in_user->updated_at->timezone(get_user_timezone()) }} ({{ $logged_in_user->updated_at->diffForHumans() }})</td>
        </tr>
    </table>
</div>