<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Khant Bhone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="row flex-lg-nowrap">
        <div class="col-12">
            <div class="card-body">
                <div class="container">
                    <div class="row my-2">
                        <div class="col-md-12">
                            <div class="card shadow-lg">
                                <div class="card-header shadow-sm">
                                    <div class="card-title">
                                        <h1 class="title text-center">February လ အရောင်းစာရင်း</h1>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <tr class="spacer"></tr>
                                    <h5 class="text-dark">𝐓𝐨𝐭𝐚𝐥 𝐀𝐜𝐜 𝐏𝐫𝐢𝐜𝐞 = {{ $totalPrice }} Kyats
                                    </h5> <br>
                                    <h5 class="text-dark">𝐓𝐨𝐭𝐚𝐥 𝐏𝐫𝐨𝐟𝐢𝐭 = {{ $totalProfit }} Kyats</h5>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary my-4 col-2" type="button" data-toggle="modal"
                                            data-target="#user-form-modal">New
                                            List</button>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <div class="mt-4 ml-4">
                                                <button type="submit" class="btn bg-danger text-white">Logout</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive-sm">
                                            <table class="table table-bordered">
                                                <thead class="table-white">
                                                    <tr class="border-dark">
                                                        <th class="border text-center text-black">
                                                            Acc ID
                                                        </th>
                                                        <th class="border text-center text-black">Date
                                                        </th>
                                                        <th class="border text-center text-black">
                                                            Account Name</th>
                                                        <th class="border text-center text-black">Gl &
                                                            Kr</th>
                                                        <th class="border text-center text-black">
                                                            ကောက်စျေး</th>
                                                        <th class="border text-center text-black">
                                                            ရောင်းစျေး</th>
                                                        <th class="border text-center text-black">Profit
                                                        </th>
                                                        <th class="border text-center text-black">Option
                                                        </th>
                                                    </tr>
                                                </thead>
                                                @foreach ($selling as $s)
                                                    <tbody>
                                                        <tr class="border-white">
                                                            <td class="border text-dark">{{ $s->accId }}
                                                            </td>
                                                            <td class="border text-dark">{{ $s->accDate }}
                                                            </td>
                                                            <td class="border text-dark">{{ $s->accName }}
                                                            </td>
                                                            <td class="border text-dark">{{ $s->accType }}
                                                            </td>
                                                            <td class="border text-dark">{{ $s->takePrice }}
                                                                Kyats</td>
                                                            <td class="border text-dark">{{ $s->sellPrice }}
                                                                Kyats</td>
                                                            <td class="border text-dark">{{ $s->profit }}
                                                                Kyats</td>
                                                            <td class="border text-dark">
                                                                <div class="btn-group align-top">
                                                                    <a href="{{ route('sell#editPage', $s->id) }}">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-secondary badge"
                                                                            type="button" data-toggle="modal"
                                                                            data-target="#exampleModal">Edit</button>
                                                                    </a>
                                                                    <a href="{{ route('sell#delete', $s->id) }}"
                                                                        class="text-decoration-none">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-secondary badge"
                                                                            type="button"><i class="fa fa-trash"></i>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Create Data Modal Start  --}}
    <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create new Soldout List</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body shadow">
                    <div class="py-1">
                        <div class="">
                            <div class="container-fluid">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="card shadow">
                                            <div class="card-header">
                                                <h3 class="text-center">𝐂𝐨𝐧𝐠𝐫𝐚𝐭𝐮𝐥𝐚𝐭𝐢𝐨𝐧 𝐅𝐨𝐫 1𝐈𝐃
                                                    𝐒𝐨𝐥𝐝 𝐎𝐮𝐭</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-5 offset-3" style="height: 700px">
                                                    <form action="{{ route('sell#create') }}" class=""
                                                        method="POST">
                                                        @csrf
                                                        <div class="">
                                                            <input type="hidden" name="user_id"
                                                                value="{{ auth()->user()->id }}">
                                                            <div class="mt-2">
                                                                <label class="text-dark" for="">Account
                                                                    ID</label>
                                                                <input class="form-control shadow-sm"
                                                                    value="{{ old('accId') }}" type="number"
                                                                    name="accId" id="">
                                                            </div>
                                                            @error('accId')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                            <div class="mt-2">
                                                                <label class="text-dark" for="">Date</label>
                                                                <input class="form-control shadow-sm"
                                                                    value="{{ old('accDate') }}" type="date"
                                                                    name="accDate" id="">
                                                            </div>
                                                            @error('accDate')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                            <div class="mt-2">
                                                                <label class="text-dark" for="">Account
                                                                    Name</label>
                                                                <input class="form-control shadow-sm"
                                                                    value="{{ old('accName') }}" type="text"
                                                                    name="accName" id="">
                                                            </div>
                                                            @error('accName')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                            <div class="mt-2">
                                                                <label class="text-dark" for="">Account
                                                                    Type</label>
                                                                <input class="form-control shadow-sm"
                                                                    value="{{ old('accType') }}" type="text"
                                                                    name="accType" id="">
                                                            </div>
                                                            @error('accType')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                            <div class="mt-2">
                                                                <label class="text-dark" for="">ယူစျေး
                                                                </label>
                                                                <input class="form-control shadow-sm"
                                                                    value="{{ old('takePrice') }}" type="number"
                                                                    name="takePrice" id="">
                                                            </div>
                                                            @error('takePrice')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                            <div class="mt-2">
                                                                <label class="text-dark"
                                                                    for="">ရောင်းစျေး</label>
                                                                <input class="form-control shadow-sm"
                                                                    value="{{ old('sellPrice') }}" type="number"
                                                                    name="sellPrice" id="">
                                                            </div>
                                                            @error('sellPrice')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                            <div class="mt-2">
                                                                <label class="text-dark" for="">Profit</label>
                                                                <input class="form-control shadow-sm"
                                                                    value="{{ old('profit') }}" type="number"
                                                                    name="profit" id="">
                                                            </div>
                                                            @error('profit')
                                                                <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                            <div class="">
                                                                <input type="submit"
                                                                    class="btn bg-dark text-white mt-3 shadow"
                                                                    value="Add New List">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- create data modal end  --}}
    <style type="text/css">
        body {
            margin-top: 20px;
            background: #f8f8f8
        }
    </style>
    <script type="text/javascript"></script>
</body>

</html>
