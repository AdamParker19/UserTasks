<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task assignment</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> 
</head>

<body>
    <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

        <form action="" method="post" action="{{ action('App\Http\Controllers\TaskValidationController@createTaskForm') }}">

        @csrf

        <div class="form-group">
                <label>User</label>
                <select name="user" class="form-control" style="width:250px">
                    <option value="">--- Select User ---</option>
                    @foreach ($users as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                <!-- Error -->
                @if ($errors->has('user'))
                <div class="error">
                    {{ $errors->first('user') }}
                </div>
                @endif
            </div>

            
            <div class="form-group">
                <label>Task</label>
                <input type="text" class="form-control {{ $errors->has('task') ? 'error' : '' }}" name="task"
                    id="name">

                @if ($errors->has('task'))
                <div class="error">
                    {{ $errors->first('task') }}
                </div>
                @endif
            </div>

            
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" style="width:250px">
                    <option value="">--- Select status ---</option>
                    <option value="Pending">Pending</option>
                    <option value="Done">Done</option>
                </select>
                <!-- Error -->
                @if ($errors->has('status'))
                <div class="error">
                    {{ $errors->first('status') }}
                </div>
                @endif
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>