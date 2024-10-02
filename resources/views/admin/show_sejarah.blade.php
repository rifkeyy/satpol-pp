</html>
<!DOCTYPE html>
<html>

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('admin.css')


    <style type="text/css">
        .title_deg {
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
            text-align: center;
        }


        .table_deg {
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin-left: 70px;
        }

        .th_deg {
            background-color: skyblue;
        }

        .img_deg {
            height: 100px;
            width: 150px;
            padding: 10px;
        }
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->


        <div class="page-content">

            @if (session()->has('message'))
                <div class="alert alert-danger">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                    {{ session()->get('message') }}

                </div>
            @endif

            <h1 class="title_deg">Sejarah</h1>

            <table class="table_deg">

                <tr class="th_deg">

                    <th>Sejarah</th>

                </tr>

                @foreach ($post as $sejarah)
                    <tr>

                        <td>{{ $sejarah->description }}</td>
                    <tr>
                        <td>

                            <a href="{{ url('edit_sejarah', $sejarah->id) }}"class="btn btn-success">Edit</a>
                        </td>
                    </tr>


                    </tr>
                @endforeach



            </table>



        </div>
        @include('admin.footer')

        <script type="text/javascript">
            function confirmation(ev) {

                ev.preventDefault();

                var urlToRedirect = ev.currentTarget.getAttribute('href');

                console.log(urlToRedirect);

                swal({

                        title: "Are You Sure to dellete This ?",

                        text: "You won't be able to revert this dellete ",

                        icon: "warning",

                        buttons: true,

                        dangerMode: true,

                    })

                    .then((willCancel) => {

                        if (willCancel) {
                            window.location.href = urlToRedirect;
                        }

                    });

            }
        </script>
</body>

</html>
