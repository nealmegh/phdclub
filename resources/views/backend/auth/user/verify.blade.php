@extends ('backend.layouts.app')

@section ('title', __('labels.backend.access.users.management') . ' | ' . __('labels.backend.access.users.verify'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.users.management') }}
                    <small class="text-muted">{{ __('labels.backend.access.users.verify') }}</small>
                </h4>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4 mb-4">
            <div class="col">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-expanded="true"><i class="fas fa-user"></i> {{ 'Verify' }}</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
                      {{--Verify Start--}}
                        {{ html()->modelForm($user, 'PATCH', route('admin.auth.user.account.verify.update', $user->id))->class('form-horizontal')->open() }}
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>{{ __('labels.backend.access.users.tabs.content.overview.photoID') }}</th>
                                        @if($user->upload_status == 1)
                                        <td><img src="{{ $user->PhotoID }}" class="user-profile-image" /></td>
                                        @else
                                        <td> User Didn't uploaded any photo ID yet</td>
                                        @endif
                                    </tr>
                                    @if($user->upload_status == 1)
                                        <tr>
                                            <th>{{ __('labels.backend.access.users.tabs.content.overview.verify') }}</th>
                                            <td> <div class="checkbox">
                                                    {{ html()->label(
                                                            html()->checkbox('identity_approval')
                                                                  ->class('switch-input')
                                                                  ->id('identity_approval')
                                                            . '<span class="switch-label"></span><span class="switch-handle"></span>')
                                                        ->class('switch switch-sm switch-3d switch-primary')
                                                        ->for('identity_approval') }}
                                                    {{ html()->label(ucwords('Approved'))->for('identity_approval') }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endif

                                </table>
                            </div>
                        </div><!--table-responsive-->





                        {{--Verify End--}}
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
    <div class="card-footer">
        <div class="row">
            <div class="col">
                {{ form_cancel(route('admin.auth.user.index'), __('buttons.general.cancel')) }}
            </div><!--col-->

            <div class="col text-right">
                {{ form_submit(__('buttons.general.crud.update')) }}
            </div><!--row-->
        </div><!--row-->
    </div><!--card-footer-->
</div><!--card-->
{{ html()->closeModelForm() }}
    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    <strong>{{ __('labels.backend.access.users.tabs.content.overview.created_at') }}:</strong> {{ $user->updated_at->timezone(get_user_timezone()) }} ({{ $user->created_at->diffForHumans() }}),
                    <strong>{{ __('labels.backend.access.users.tabs.content.overview.last_updated') }}:</strong> {{ $user->created_at->timezone(get_user_timezone()) }} ({{ $user->updated_at->diffForHumans() }})
                    @if ($user->trashed())
                        <strong>{{ __('labels.backend.access.users.tabs.content.overview.deleted_at') }}:</strong> {{ $user->deleted_at->timezone(get_user_timezone()) }} ({{ $user->deleted_at->diffForHumans() }})
                    @endif
                </small>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-footer-->
</div><!--card-->
@endsection
