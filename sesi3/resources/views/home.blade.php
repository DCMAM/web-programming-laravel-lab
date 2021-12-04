<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session 3</title>
    <style>
        .movie-table{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>Movies</h2>
    <div>
        <table class="movie-table" style="border-collapse: collapse">
            <thead>
                <th class="movie-table">ID</th>
                <th class="movie-table">Photo</th>
                <th class="movie-table">Title</th>
                <th class="movie-table">Description</th>
                <th class="movie-table">Episodes</th>
                <th class="movie-table">Action</th>
            </thead>
            <tbody>
            @foreach($movies as $m)
                <tr>
                    <td class="movie-table">{{$m->id}}</td>
                    <td class="movie-table">
                        <img src="{{Storage::url($m->image)}}" height="150px"/>
                    </td>
                    <td class="movie-table">{{$m->title}}</td>
                    <td class="movie-table">{{$m->description}}</td>
                    <td class="movie-table">
{{--                        @foreach()--}}
{{--                            {{}}--}}
{{--                        @endforeach--}}
                    </td>
                    <td class="movie-table">
                        <form action="/delete-movie/{{$m->id}}" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div>
        @if($errors->any())
{{--            <i>{{$errors->first()}}</i>--}}
            @foreach($errors->all() as $e)
                <i style="color: red">{{$e}}</i>
                <br>
            @endforeach
        @endif
    </div>

    <hr>
    <div>
        <h4>Insert Movie</h4>
        <form action="/insert-movie" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
{{--            @csrf--}}
            <table >
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" id=""></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" id="" placeholder="Input Title"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="description" id="" placeholder="Input Description"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Insert</button></td>
                </tr>
            </table>
        </form>
    </div>
    <hr>
    <div>
        <h4>Insert Episode</h4>
        <form action="">
            <table >
                <tr>
                    <td>Movie ID</td>
                    <td><input type="text" name="movieID" id="" placeholder="Input Movie ID"></td>
                </tr>
                <tr>
                    <td>Episode</td>
                    <td><input type="text" name="episode" id="" placeholder="Input Episode"></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" id="" placeholder="Input Title"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Insert</button></td>
                </tr>
            </table>
        </form>
    </div>
    <hr>
    <div>
        <h4>Update Movie</h4>
        <form action="/update-movie" enctype="multipart/form-data" method="post">
            {{method_field('put')}}
            {{csrf_field()}}
            <table >
                <tr>
                    <td>ID</td>
                    <td><input type="number" name="id" id="" placeholder="Input Movie ID"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" id=""></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" id="" placeholder="Input Title"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="description" id="" placeholder="Input Description"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Update</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
