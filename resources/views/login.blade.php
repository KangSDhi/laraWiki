@extends('template.baseAuth')

@section('title', 'Rumah')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 100px">
        <div class="shadow p-4" style="border-radius: 5px; background-color: white" >
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Jangan memberitahukan email anda pada orang lain.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kata sandi</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                  <button type="submit" class="btn btn-primary ">Masuk</button>
                <a href="{{route('register')}}" style="font-size: 14px; margin-left: 20px;"> Daftar</a>
                </form>

            </form>
        

        </div>
    </div>

</div>