    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Edit Page</title>
    </head>
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <body>
        <div class="row flex-lg-nowrap">
            <div class="col-8 offset-2">
                <div class="card-body">
                    <div class="container">
                        <div class="row my-2">
                            <div class="col-md-12">
                                <div class="card shadow-lg">
                                    <div class="card-header shadow-sm">
                                        <div class="card-title">
                                            <h1 class="title text-center">List Edit Page</h2>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ route('sell#home') }}">
                                            <span class="text-decoration-none text-dark">
                                                <i class="fa-solid fa-arrow-left-long"></i>
                                            </span>
                                        </a>
                                        <div class="col-5 offset-3" style="height: 600px">
                                            <form action="{{ route('sell#update') }}" method="POST">
                                                @csrf
                                                <div class="">
                                                    <input type="hidden" name="user_id"
                                                        value="{{ auth()->user()->id }}">
                                                    <div class="mt-2">
                                                        <label class="text-dark" for="">Account ID</label>
                                                        <input type="hidden" name="sellId"
                                                            value="{{ $sell->id }}">
                                                        <input class="form-control" type="number"
                                                            value="{{ $sell->accId }}" name="accId">
                                                    </div>
                                                    @error('accId')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                    <div class="mt-2">
                                                        <label class="text-dark" for="">Date</label>
                                                        <input class="form-control" type="date"
                                                            value="{{ $sell->accDate }}" name="accDate">
                                                    </div>
                                                    @error('accDate')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                    <div class="mt-2">
                                                        <label class="text-dark" for="">Account Name</label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $sell->accName }}" name="accName">
                                                    </div>
                                                    @error('accName')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                    <div class="mt-2">
                                                        <label class="text-dark" for="">Account Type</label>
                                                        <input class="form-control" type="text"
                                                            value="{{ $sell->accType }}" name="accType">
                                                    </div>
                                                    @error('accType')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                    <div class="mt-2">
                                                        <label class="text-dark" for="">ကောက်စျေး</label>
                                                        <input class="form-control" type="number"
                                                            value="{{ $sell->takePrice }}" name="takePrice">
                                                    </div>
                                                    @error('takePrice')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                    <div class="mt-2">
                                                        <label class="text-dark" for="">ရောင်းစျေး</label>
                                                        <input class="form-control" type="number"
                                                            value="{{ $sell->sellPrice }}" name="sellPrice">
                                                    </div>
                                                    @error('sellPrice')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                    <div class="mt-2">
                                                        <label class="text-dark" for="">Profit</label>
                                                        <input class="form-control" type="number"
                                                            value="{{ $sell->profit }}" name="profit">
                                                    </div>
                                                    @error('profit')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                    <div class="mt-2">
                                                        <button class="btn bg-dark text-white mt-1"
                                                            type="submit">Update</button>
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
    </body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    </html>
