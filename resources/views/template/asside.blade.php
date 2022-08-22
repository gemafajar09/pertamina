<aside class="control-sidebar control-sidebar-light" style="height:320px; border-bottom-left-radius:15px;">
    <div class="p-3">
        <center>
            <img src="{{asset('img/avatar.png')}}" class="img-circle" style="width:120px; height:120px;" alt="">
        </center>
        <center style="margin-top:8px">
            <h5>{{Auth::user()->nama}}</h5>
        </center>
        <hr style="border:1px solid #000;">
        <ul class="list-group">
            <li class="list-group-item">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width:20px" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Profile
                </a>
            </li>
            <li class="list-group-item">
                <a href="#" role="button" onclick="logout()">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width:20px" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Logout
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="modal" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 25px;">
            <div class="modal-header">
                <h5 class="modal-title">Kelaur Dari Sistem?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <div class="modal-body">
                    <p>Klik tombol keluar untuk mengakhiri sesi.</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Keluar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
