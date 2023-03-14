@extends('dbm.layout')
@section('content')
    <div class="row bg-dark-emphasi">
        <div class="col-2">
        <h3 class="p-3 bg-primary text-light fs-6">DBM</h3>
            <ul class="m-0 p-0"  style="list-style-type:none;"><b>Document</b>
                <li class="nav-item p-3 "><a href="" class="nav-link link-secondary active"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
</svg> My Inbox</i></a></li>
                <li class="nav-item p-3"><a href="" class="nav-link link-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-aspect-ratio" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
  <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z"/>
</svg> Quatitions</a></li>
                <li class="nav-item p-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-binary" viewBox="0 0 16 16">
  <path d="M5.526 13.09c.976 0 1.524-.79 1.524-2.205 0-1.412-.548-2.203-1.524-2.203-.978 0-1.526.79-1.526 2.203 0 1.415.548 2.206 1.526 2.206zm-.832-2.205c0-1.05.29-1.612.832-1.612.358 0 .607.247.733.721L4.7 11.137a6.749 6.749 0 0 1-.006-.252zm.832 1.614c-.36 0-.606-.246-.732-.718l1.556-1.145c.003.079.005.164.005.249 0 1.052-.29 1.614-.829 1.614zm5.329.501v-.595H9.73V8.772h-.69l-1.19.786v.688L8.986 9.5h.05v2.906h-1.18V13h3z"/>
  <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
</svg> Order</li>
                <li class="nav-item p-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-easel2-fill" viewBox="0 0 16 16">
  <path d="M8.447.276a.5.5 0 0 0-.894 0L7.19 1H2.5A1.5 1.5 0 0 0 1 2.5V10h14V2.5A1.5 1.5 0 0 0 13.5 1H8.809L8.447.276Z"/>
  <path fill-rule="evenodd" d="M.5 11a.5.5 0 0 0 0 1h2.86l-.845 3.379a.5.5 0 0 0 .97.242L3.89 14h8.22l.405 1.621a.5.5 0 0 0 .97-.242L12.64 12h2.86a.5.5 0 0 0 0-1H.5Zm3.64 2 .25-1h7.22l.25 1H4.14Z"/>
</svg> Sell</li>
                <li class="nav-item p-2">StockIn</li>
                <li class="nav-item p-2">StockOut</li>
                <li class="nav-item p-2">Delivery</li>
                <li class="nav-item p-2">Payment</li>
                <li class="nav-item p-2">Accounting Document</li>
                <li class="nav-item p-2">upload</li>
            </ul>
            <hr />
            <ul class="m-0 p-0"  style="list-style-type:none;"> Settings
                <li class="nav-item p-2">Export</li>
                <li class="nav-item p-2">LogOut</li>
            </ul>
        </div>
        <div class="col-9">
        <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-primary p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</nav>
</div>
</div>

@endsection