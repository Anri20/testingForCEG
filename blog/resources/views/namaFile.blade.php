<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-an</title>
    {{-- <script src="jquery-3.6.1.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <div>
        <h1>Hello Ges</h1>
        <button onclick="coba()">Kita coba ajax</button>
        {{-- <div id="nampilin" style="background-color: red; height: 100px">
            <h1>
                id = nampilin
            </h1>
        </div> --}}
        {{-- <div class="nampilin2" style="background-color: yellow; height: 100px">
            class = nampilin2
        </div> --}}
        {{-- [] --}}
        @for ($num = 0; $num < count($data); $num++)
            <div id="div_{{ $num }}">{{ $data[$num]->skor }}</div>
        @endfor
        {{-- <div>{{$data}}</div> --}}
    </div>

    <script>
        // AJAX dan JQUERY itu semua harus berada di dalam tag script
        function coba() {
            $.ajax({
                type: "GET",
                url: "{{ route('testing.nampilin') }}",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'nama': "nama"
                },
                success: function(hasil) {
                    // var response = data
                    // ['send' => $send]
                    let response = hasil.send
                    // console.log(response);
                    alert(response);
                    // $('#nampilin').html(response)
                    $('#div_0').html(hasil.data)
                    // $('.nampilin2').html(response)
                    alert(hasil.nama)
                },
                error: function(data) {
                    alert('error')
                }
            })
        }
    </script>
</body>

</html>
