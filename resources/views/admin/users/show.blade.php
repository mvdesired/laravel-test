@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.users.fields.name')</th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.last-name')</th>
                            <td field-key='last_name'>{{ $user->last_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.role')</th>
                            <td field-key='role'>{{ $user->role->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.dob')</th>
                            <td field-key='dob'>{{ $user->dob }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.gender')</th>
                            <td field-key='gender'>{{ $user->gender }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.phone-number')</th>
                            <td field-key='phone_number'>{{ $user->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.company-name')</th>
                            <td field-key='company_name'>{{ $user->company_name }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
