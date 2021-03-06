@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="float-center" style="color:rgb(5, 5, 103)"><b>DARSA ILIYOPO LIVE</b></h4>
                    </div>
                    @if ($broadcast == null)
                        <div class="py-2 px-5">
                            <a href="#!" class="btn btn-primary btn-sm"
                                onclick="document.getElementById('add_broadcast').submit()"><i
                                    class="feather icon-edit"></i>&nbsp;Add New </a>
                            <form id="add_broadcast" method="POST" action="{{ route('add_broadcast') }}">@csrf
                                @method('POST')
                            </form>
                        </div>
                    @endif
                    @if ($broadcast != null)
                        <div class="card-body" style="background: rgb(243, 242, 246)">
                            <table class="table table-striped table-bordered table-hover">
                                <tbody class="px-3">
                                    <tr>
                                        <div class="row border-bottom-1" style="font-weight: bolder; font-size:15px;">
                                            <div class="col-4">Kichwa cha Habari:</div>
                                            <div class="col-8">{{ $broadcast->title }}</div>
                                        </div>
                                        <hr>
                                        <div class="row border-bottom-1" style="font-weight: bolder; font-size:15px;">
                                            <div class="col-4">Kitabu / Mada:</div>
                                            <div class="col-8">{{ $broadcast->book }}</div>
                                        </div>
                                        <hr>
                                        <div class="row border-bottom-1" style="font-weight: bolder; font-size:15px;">
                                            <div class="col-4">Mwalimu:</div>
                                            <div class="col-8">{{ $broadcast->teacher }}</div>
                                        </div>
                                        <hr>
                                        <div class="row border-bottom-1" style="font-weight: bolder; font-size:15px;">
                                            <div class="col-4">Ziada:</div>
                                            <div class="col-8">{{ $broadcast->extra }}</div>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#edit-broadcast-modal-{{ $broadcast->id }}">
                                                <i class="fas fa-edit"> </i> Update</a>
                                            <div class="modal fade text-left"
                                                id="edit-broadcast-modal-{{ $broadcast->id }}">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Update Broadcast</h5>
                                                            <button class="btn btn-outline-danger btn-sm close"
                                                                data-bs-dismiss="modal">
                                                                <span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST"
                                                                action="{{ route('update_broadcast', $broadcast) }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group py-2 row">
                                                                    <label for="title"
                                                                        class="col-md-4 col-form-label text-md-right">{{ __('Kichwa cha Habari') }}</label>
                                                                    <div class="col-md-8">
                                                                        <input id="title" type="text"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            name="title"
                                                                            value="{{ old('title', $broadcast->title) }}"
                                                                            autocomplete="name" autofocus>
                                                                        @error('title')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group py-2 row">
                                                                    <label for="book"
                                                                        class="col-md-4 col-form-label text-md-right">{{ __('Kitabu/Mada') }}</label>
                                                                    <div class="col-md-8 ">
                                                                        <input id="book" type="text"
                                                                            class=" form-control @error('book') is-invalid @enderror"
                                                                            name="book"
                                                                            value="{{ old('book', $broadcast->book) }}"
                                                                            autocomplete="book" autofocus>
                                                                        @error('book')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group py-2 row">
                                                                    <label for="teacher"
                                                                        class="col-md-4 col-form-label text-md-right">{{ __('Mwalimu') }}</label>
                                                                    <div class="col-md-8">
                                                                        <input id="teacher" type="text"
                                                                            class="form-control @error('teacher') is-invalid @enderror"
                                                                            name="teacher"
                                                                            value="{{ old('teacher', $broadcast->teacher) }}"
                                                                            autocomplete="teacher" autofocus>
                                                                        @error('teacher')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group py-2 row">
                                                                    <label for="extra"
                                                                        class="col-md-4 col-form-label text-md-right">{{ __('Ziada') }}</label>
                                                                    <div class="col-md-8">
                                                                        <input id="extra" type="text"
                                                                            class="form-control @error('extra') is-invalid @enderror"
                                                                            name="extra"
                                                                            value="{{ old('extra', $broadcast->extra) }}"
                                                                            autocomplete="extra" autofocus>
                                                                        @error('extra')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row my-2">
                                                                    <div class="text-center">
                                                                        <button type="submit"
                                                                            class="btn btn-outline-primary btn-sm">
                                                                            Update
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4"> <a href="{{ route('questions') }}"
                                                style="text-decoration: none; font-size:17px">Maswali</a>
                                        </div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <label for="status-switch">Ruhusu Maswali</label>
                                            <div class="form-check form-switch float-end">
                                                <form id="toggle-status-form" method="post"
                                                    action="{{ route('toggle-questions') }}">
                                                    <input type="hidden" name="status" value="0"> <input
                                                        class="form-check-input" type="checkbox" name="status"
                                                        id="status-switch" broadcast="status-switch"
                                                        @if ($settings->allow_questions) checked @endif value="1"
                                                        onclick="this.form.submit()">
                                                    @csrf @method('put')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
