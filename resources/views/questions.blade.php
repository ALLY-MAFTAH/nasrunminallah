@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="" style="color:blue">Maswali Yaliyoulizwa</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover table-responsive px-3 py-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jina</th>
                                    <th>Swali</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @if ($questions == null)
                                    <tr>
                                        <td colspan="4">
                                            <h5 class="text-center text-danger">Hakuna Maswali</h5>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($questions as $index => $question)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $question->name }}</td>
                                            <td>{{ $question->qn }}</td>
                                            <td>
                                                <a href="{{ route('delete_question', $question) }}"
                                                    class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Una uhakika unataka kufuta hili swali ?')"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
