<section>
    <div class="header">
        <div class="container">
            <div class="top-header">
               <div class="row">
                   <div class="col-md-4">
                       <div class="top-header-left">
                           <p>Your choice</p>
                       </div>
                   </div>
                   <div class="col-md-4">
                    <div class="top-header-middle">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-header-right">

                    @auth()
                    <ul class="auth-ul">
                     <li> <a href="{{route('llcprofile')}}">Profile</a></li>
                     <li>
                     <form action="{{route('llclogout')}}" method="post">
                       @csrf
                       <button type="submit">Logout</button>
                    </form>
                     </li>
                    </ul>
                    @endauth

                    @guest()
                      <a href="{{route('llclogin')}}">Login</a> <a href="{{route('llcregister')}}">Register</a>
                    @endguest

                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</section>
