<!DOCTYPE html>
<html>
    <head>
        <title>{{Auth::user()->nama}}'s Profile</title>
        @include('header')
    
    
    </head>
    <style>
        body {
            background-color: #59ab6e;
        }
        .navbar {
            background-color: #fff;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #59ab6e
        }

        .profile-button {
            background: #59ab6e;
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #59ab6e
        }

        .profile-button:focus {
            background: #59ab6e;
            box-shadow: none
        }

        .profile-button:active {
            background: #59ab6e;
            box-shadow: none
        }

        .back:hover {
            color: #59ab6e;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>

    <body>
    @include('navbar')
    @include('modal')
    @include('alert')
    
    <div class="container rounded bg-white mt-5 mb-5" id="bigcard">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{Auth::user()->nama}}</span><span class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    
                    <div class="row mt-5">
                        <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" placeholder="enter phone number" value="{{Auth::user()->nama}}"></div>
                        <div class="col-md-12"><label class="labels">No HP</label><input type="text" class="form-control" placeholder="enter address line 1" value="{{Auth::user()->no_hp}}"></div>
                        <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{Auth::user()->alamat}}"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter address line 2" value="{{Auth::user()->email}}"></div>
                        <div class="col-md-12"><label class="labels">Tipe Akun</label><input type="text" class="form-control" placeholder="enter address line 2" readonly value="{{Auth::user()->access_type}}"></div>
                        
                    </div>
                    
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
            
        </div>
    </div>
    </div>
    </div>
    @include('footer')
    </body>
</html>