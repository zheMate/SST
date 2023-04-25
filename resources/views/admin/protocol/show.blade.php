@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-2">{{ $protocol->title }}</h1>
                    <a href="{{ route('admin.protocol.edit', $protocol->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ route('admin.protocol.delete', $protocol->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fas fa-trash-alt text-danger" role="button"></i>
                        </button>
                    </form>
                    <form action="{{ route('admin.protocol.view_pdf', $protocol->id) }}" method="post" >
                        @csrf
                        <button type="submit" class="btn btn-info"><i class="fas fa-file-pdf"></i> Предпросмотр PDF</button>
                    </form>
                    <form action="{{ route('admin.protocol.export_to_pdf', $protocol->id) }}" method="post" >
                        @csrf
                        <button type="submit" class="btn bg-purple"><i class="fas fa-file-pdf"></i> Скачать PDF</button>
                    </form>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Протоколы</a></li>
                        <li class="breadcrumb-item active">Просмотр протокола: "{{ $protocol->title }}"</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body table-responsive p-0">

                            <table class="table table-hover text-nowrap">

                                <tbody>

                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $protocol->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $protocol->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата проведения собрания</td>
                                        <td>{{ $parsedDateOfMeeting->day }} {{ $parsedDateOfMeeting->translatedFormat('F') }} {{ $parsedDateOfMeeting->year }}</td>
                                    </tr>
                                    <tr>
                                        <td>Присутствовали</td>
                                        <td>
                                            @foreach($protocol->users as $student)
                                            {{ $student->name }} ({{ $student->group_name }})

                                            <br>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Повестка</td>
                                        <td>{!! $protocol->protocol_agenda !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Решили</td>
                                        <td>{!! $protocol->protocol_decision !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата проведения следующего собрания</td>
                                        <td>{{ $parsedDateOfNextMeeting->day }} {{ $parsedDateOfNextMeeting->translatedFormat('F') }} {{ $parsedDateOfNextMeeting->year }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection()
