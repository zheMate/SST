@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Редактирование протокола
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.protocol.index') }}">Протоколы</a></li>
                            <li class="breadcrumb-item active">Редактирование протокола: "{{ $protocol->title }}"</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.protocol.update',  $protocol->id ) }}" method="POST" >
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25">
                                <label for="inputName">Название</label>
                                <input type="text" class="form-control" name="title" id="inputName"
                                       placeholder="Название собрания" value="{{ $protocol->title }}">
                                @error('title')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="inputName">Дата проведения собрания</label>
                                <input type="date" class="form-control" name="date_of_meeting" id="inputName"
                                        value="{{ $protocol->date_of_meeting }}">
                                @error('date_of_meeting')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Присутствовали</label>
                                <select class="select2" name="user_ids[]" multiple="multiple" data-placeholder="Выберите участников"
                                        style="width: 100%;">
                                    @foreach($users as $user)
                                        <option {{ is_array($protocol->users->pluck('id')->toArray()) && in_array($user->id, $protocol->users->pluck('id')->toArray()) ? ' selected' : '' }} value="{{ $user->id }}">{{ $user->name  }} ({{ $user->group_name }}) - {{ $user->job_title }}</option>
                                    @endforeach
                                </select>

                                @error('user_ids')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label>Повестка</label>
                                <textarea id="summernote" name="protocol_agenda">{{ $protocol->protocol_agenda }}</textarea>
                                @error('protocol_agenda')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label>Решили</label>
                                <textarea id="summernote1" name="protocol_decision">{{ $protocol->protocol_decision }}</textarea>
                                @error('protocol_decision')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label for="inputName">Дата проведения следующего собрания</label>
                                <input type="date" class="form-control" name="date_of_next_meeting" id="inputName"
                                        value="{{ $protocol->date_of_next_meeting }}">
                                @error('date_of_next_meeting')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Обновить">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection()
