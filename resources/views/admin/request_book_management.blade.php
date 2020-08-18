@extends('admin.layouts.app')

@section('title')
    <title>{{ trans('request.request_management') }}</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="card mt-5">
                    <div class="card-header">
                        <nav class="navbar navbar-expand navbar-white navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <h3 class="card-title">{{ trans('request.request_management') }}</h3>
                                </li>
                            </ul>

                            <form class="form-inline ml-5">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search"
                                        placeholder="{{ trans('message.search') }}"
                                        aria-label="{{ trans('message.search') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="">
                                        <i class="fas fa-plus float-right m-2"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="card-body">
                        <div class="jsgrid">
                            <div class="jsgrid-grid-header">
                                <table class="jsgrid-table">
                                    <thead>
                                        <tr class="row jsgrid-header-row">
                                            <th
                                                class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable col-md-1">
                                                {{ trans('message.id') }}
                                            </th>
                                            <th
                                                class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable col-md-3">
                                                {{ trans('message.name') }}
                                            </th>
                                            <th
                                                class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable col-md-2">
                                                {{ trans('message.books') }}
                                            </th>
                                            <th
                                                class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable col-md-2">
                                                {{ trans('message.image') }}
                                            </th>
                                            <th
                                                class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable col-md-4">
                                                {{ trans('request.status') }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="row jsgrid-row">
                                            <td class="jsgrid-cell jsgrid-align-center col-md-1"></td>
                                            <td class="jsgrid-cell col-md-3"></td>
                                            <td class="jsgrid-cell col-md-2"></td>
                                            <td class="jsgrid-cell col-md-2"></td>
                                            <td class="jsgrid-cell jsgrid-align-center col-md-4">
                                                <button class="btn btn-success px-4 ml-2">{{ trans('request.approve') }}</button>
                                                <button class="btn btn-danger px-4 ml-2">{{ trans('request.reject') }}</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
