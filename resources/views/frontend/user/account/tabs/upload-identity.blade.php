@if($logged_in_user->upload_status == true)
    <div class="row">
        <div class="col">
            <div class="form-group">
    <img src="{{ 'storage/'.$logged_in_user->upload_identity }}" style="max-width: 100%" />
            </div>
        </div>
    </div>
@else

{{ html()->form('POST', route('frontend.user.profile.verify'))->class('form-horizontal')->acceptsFiles()->open() }}
    <div class="row">
        <div class="col">
            <div class="form-group">
                {{ html()->label(__('validation.attributes.frontend.upload_identity'))->for('upload_identity') }}

                {{ html()->file('upload_identity')
                    ->class('form-control')
                    ->required() }}
            </div><!--form-group-->
        </div><!--col-->
        {{--<div class="form-group" id="upload_identity">--}}
            {{--{{ html()->file('avatar_location')->class('form-control') }}--}}
        {{--</div><!--form-group-->--}}
    </div><!--row-->

    <div class="row">
        <div class="col">
            <div class="form-group mb-0 clearfix">
                {{ form_submit(__('labels.general.buttons.update')) }}
            </div><!--form-group-->
        </div><!--col-->
    </div><!--row-->
{{ html()->form()->close() }}
@endif