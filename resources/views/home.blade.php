@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 style="color:blue">Data za Darsa Iliyopo Live Now</h3>
                    </div>
                    @if ($broadcasts->count() == 0)
                        <div class="py-2 px-5">
                            <a href="#!" class="btn btn-primary btn-sm"
                                onclick="document.getElementById('add_broadcast').submit()"><i
                                    class="feather icon-edit"></i>&nbsp;Add New </a>
                            <form id="add_broadcast" method="POST" action="{{ route('add_broadcast') }}">@csrf
                                @method('POST')
                            </form>
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table-striped table-bordered table-hover">
                            <tbody class="px-3 py-3">
                                @foreach ($broadcasts as $broadcast)
                                    <tr>
                                        <div class="row border-bottom-1" style="font-weight: bolder; font-size:20px;">
                                            <div class="col-4 border-right">Darsa ya Nini:</div>
                                            <div class="col-8">{{ $broadcast->title }}</div>
                                        </div>
                                        <hr>
                                        <div class="row border-bottom-1" style="font-weight: bolder; font-size:20px;">
                                            <div class="col-4 border-right">Kitabu Gani:</div>
                                            <div class="col-8">{{ $broadcast->book }}</div>
                                        </div>
                                        <hr>
                                        <div class="row border-bottom-1" style="font-weight: bolder; font-size:20px;">
                                            <div class="col-4 border-right">Msomeshaji Je:</div>
                                            <div class="col-8">{{ $broadcast->teacher }}</div>
                                        </div>
                                        <hr>
                                        <div class="row border-bottom-1" style="font-weight: bolder; font-size:20px;">
                                            <div class="col-4 border-right">Cha Ziada:</div>
                                            <div class="col-8">{{ $broadcast->extra }}</div>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary btn-sm" bs-data-toggle="modal"
                                                bs-data-target="#edit-broadcast-modal-{{ $broadcast->id }}">
                                                <i class="fas fa-edit"> Update</i></a>

                                            <div class="modal fade text-left"
                                                id="edit-broadcast-modal-{{ $broadcast->id }}">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Update Broadcast</h5>
                                                            <button class="close" data-dismiss="modal">
                                                                <span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST"
                                                                action="{{ route('update_broadcast', $broadcast) }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group row">
                                                                    <label for="title"
                                                                        class="col-md-4 col-form-label text-md-right">{{ __('Ttile') }}</label>
                                                                    <div class="col-md-6">
                                                                        <input id="title" type="text"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            name="title"
                                                                            value="{{ old('title', $broadcast->title) }}"
                                                                            required autocomplete="title" autofocus>
                                                                        @error('title')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="book"
                                                                        class="col-md-4 col-form-label text-md-right">{{ __('Book') }}</label>
                                                                    <div class="col-md-6">
                                                                        <input id="book" type="text"
                                                                            class="form-control @error('book') is-invalid @enderror"
                                                                            name="book"
                                                                            value="{{ old('book', $broadcast->book) }}"
                                                                            required autocomplete="book" autofocus>
                                                                        @error('book')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="teacher"
                                                                        class="col-md-4 col-form-label text-md-right">{{ __('Teacher') }}</label>
                                                                    <div class="col-md-6">
                                                                        <input id="teacher" type="text"
                                                                            class="form-control @error('teacher') is-invalid @enderror"
                                                                            name="teacher"
                                                                            value="{{ old('teacher', $broadcast->teacher) }}"
                                                                            required autocomplete="teacher" autofocus>
                                                                        @error('teacher')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="extra"
                                                                        class="col-md-4 col-form-label text-md-right">{{ __('Extra') }}</label>
                                                                    <div class="col-md-6">
                                                                        <input id="extra" type="text"
                                                                            class="form-control @error('extra') is-invalid @enderror"
                                                                            name="extra"
                                                                            value="{{ old('extra', $broadcast->extra) }}"
                                                                            required autocomplete="extra" autofocus>
                                                                        @error('extra')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-0">
                                                                    <div class="col-md-6 offset-md-4">
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-sm">
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
