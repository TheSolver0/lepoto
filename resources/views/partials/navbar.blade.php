 
    <!-- Header_Area --> 
    <nav class="header_area"> 
        <div class="custom_container"> 
            <div class="nav-wrapper">
                <a href="{{ route('accueil') }}" class="brand-logo"><img src="images/logo.png" alt=""></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <a href="{{ route('vendre') }}" class="waves-effect btn post_btn sm_post_btn modal-trigger" style="background: rgb(255, 113, 65);"><i class="ion-plus"></i>Add Post</a>
                <ul class="left_menu hide-on-med-and-down">
                    {{-- <li><a href="{{ route('accueil') }}" class="active">accueil</a></li>   --}}
                    <li><a href="{{ route('accueil') }}">accueil</a></li>  
                    <li><a href="{{ route('vendre') }}">vendre</a></li>
                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                    <li class="notifications search_sm"><a class="dropdown-button" href="#!" data-activates="dropdown5"><i class="ion-ios-search"></i></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown5" class="dropdown-content">  
                           <li class="search_from"> 
                                <input placeholder="Search and enter" type="text"> 
                           </li>
                        </ul>
                    </li>
                </ul>
                <ul class="right right_menu hide-on-med-and-down">
                    <li class="search_min">
                       <form action="{{route('posts.search')}}" method="get">
                        <ul class="search_from"> 
                                <li><input placeholder="Search Here" name="recherche" type="text"></li>
                                <li><a type="submit" class="search_icon" ><i class="ion-ios-search"></i></a> </li> 
                        </ul>
                       </form>
                    </li>
                    <li><a href="{{ route('vendre') }}" class="waves-effect btn post_btn modal-trigger" style="background: rgb(255, 113, 65);"><i class="ion-plus"></i><span>Add Post</span></a></li> 
                    <!-- Follow feed -->
                    
                    <!-- Messages -->
                    <li class="notifications messages" style="display:none;"><a class="dropdown-button" href="#!" data-activates="dropdown3"><i class="ion-ios-chatboxes-outline"></i><b class="n-number"></b></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown3" class="dropdown-content">
                            <li class="hed_notic">Messages <span>Mark all as read <i class="ion-ios-gear-outline"></i></span></li> 
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-1.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Emran Khan <small>12:40pm</small></h4>
                                            <p>Listen, I need to talk to you about this!</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-3.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Masum Rana <small>2 hours ago</small></h4>
                                            <p>One of the best ways to make a great vacation quickly horrible is to choose the...</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen"> 
                                        <img src="images/profile-8.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Jakaria Khan <small>3 hours ago</small></h4>
                                            <p>Hi</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-5.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Papia Sultana <small>2 days ago</small></h4>
                                            <p>Hey Masum, I am looking for you as a new actor for upcoming Equalizer 2 movie...</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen"> 
                                        <img src="images/profile-7.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Samuel L. <small>5 days ago</small></h4>
                                            <p>Hello</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li><a href="messages.html" class="waves-effect chack_all_btn">Check All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="notifications" style="display:none;"><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="ion-ios-bell-outline"></i><b class="n-number"></b></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown2" class="dropdown-content">
                            <li class="hed_notic">Notifications <span>Mark all as read <i class="ion-ios-gear-outline"></i></span></li> 
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-6.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>Dan Fisher</b> submitted a new photo  to a <small>post</small> post you are following.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-7.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>James Richardman </b>downvoted your <small>answer</small> in a post.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen"> 
                                        <img src="images/profile-8.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>Margot Robbie</b> commented on your <small>photo</small>.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-9.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>Peter Parker</b> is now following you.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen"> 
                                        <img src="images/profile-10.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>Dan Fisher </b> submitted a new photo  to a <small>post</small> you are following.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li><a href="notifications.html" class="waves-effect chack_all_btn">Check All Notifications</a></li>
                        </ul>
                    </li>
                    <!-- Profile -->
                            @if(!empty(Auth::user()->name))
                                <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown1" title="{{Auth::user()->name}}"><img src="{{ Storage::url(Auth::user()->avatar->path) }}" alt="" class="circle p_2 improfile"></a>
                            @else 
                                <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown1" title=""><img src="" alt="" class="circle p_2 improfile"></a>
                            @endif
                        <!-- Dropdown Structure -->
                        <ul id="dropdown1" class="dropdown-content">
                            <li><a href="{{ route('profile.edit') }}"><i class="ion-person"></i>My profile</a></li> 
                       
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="ion-power"></i>Log out</a></li> 
                            </form> 
                        </ul>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <form action="{{route('posts.search')}}" method="get">
                        <li class="search_min">
                            <div class="search_from"> 
                                <input placeholder="Search Here" name="recherche" type="text">
                                <a type="submit" href="#" class="search_icon"><i class="ion-ios-search"></i></a> 
                            </div>
                        </li>
                    </form>
                    <li><a href="{{ route('accueil') }}">Home</a></li>
                    {{-- <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown_s0">All Pages</a> --}}
                        <!-- Dropdown Structure -->
                    </li> 
                    <li><a href="{{ route('vendre') }}">vendre</a></li>
                    {{-- <li><a href="#"></a></li>   --}}
                    <!-- Follow feed -->
                    
                  <!-- Messages -->
                    <li class="notifications messages" style="display:none;"><a class="dropdown-button" href="#!" data-activates="dropdown_s2"><i class="ion-ios-chatboxes-outline"></i><b class="n-number"></b></a>
                        <!-- Dropdown Structure -->
                    <ul id="dropdown_s2" class="dropdown-content">
                            <li class="hed_notic">Messages <span>Mark all as read <i class="ion-ios-gear-outline"></i></span></li> 
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-1.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Emran Khan <small>12:40pm</small></h4>
                                            <p>Listen, I need to talk to you about this!</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-3.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Masum Rana <small>2 hours ago</small></h4>
                                            <p>One of the best ways to make a great vacation quickly horrible is to choose the...</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen"> 
                                        <img src="images/profile-8.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Jakaria Khan <small>3 hours ago</small></h4>
                                            <p>Hi</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-5.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Papia Sultana <small>2 days ago</small></h4>
                                            <p>Hey Masum, I'm looking for you as a new actor for upcoming Equalizer 2 movie...</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen"> 
                                        <img src="images/profile-7.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <h4>Samuel L. <small>5 days ago</small></h4>
                                            <p>Hello</p>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li><a href="messages.html" class="waves-effect chack_all_btn">Check All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="notifications" style="display:none;"><a class="dropdown-button" href="#!" data-activates="dropdown_s3"><i class="ion-ios-bell-outline"></i><b class="n-number"></b></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown_s3" class="dropdown-content">
                            <li class="hed_notic">Notifications <span>Mark all as read <i class="ion-ios-gear-outline"></i></span></li> 
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-6.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>Dan Fisher</b> submitted a new photo  to a <small>post</small> post you are following.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-7.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>James Richardman </b>downvoted your <small>answer</small> in a post.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen"> 
                                        <img src="images/profile-8.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>Margot Robbie</b> commented on your <small>photo</small>.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media"> 
                                        <img src="images/profile-9.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>Peter Parker</b> is now following you.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen"> 
                                        <img src="images/profile-10.jpg" alt="" class="circle responsive-img">  
                                        <div class="media_body">
                                            <p><b>Dan Fisher </b> submitted a new photo  to a <small>post</small> you are following.</p>
                                            <h6>5 Minute ago</h6>
                                        </div> 
                                   </div>
                               </a>  
                            </li>
                            <li><a href="notifications.html" class="waves-effect chack_all_btn">Check All Notifications</a></li>
                        </ul>
                    </li>
                    <!-- Profile -->
                     @if(!empty(Auth::user()->name))
                                <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown_s4" title="{{Auth::user()->name}}"><img src="{{ Storage::url(Auth::user()->avatar->path) }}" alt="" class="circle p_2 improfile"></a>
                    @else 
                                <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown_s4" title=""><img src="" alt="" class="circle p_2 improfile"></a>
                    @endif
                    {{-- <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown_s4" title="{{Auth::user()->name}}"><img src="{{ Storage::url(Auth::user()->avatar->path) }}" alt="" class="circle p_2 improfile"></a> --}}
                        <!-- Dropdown Structure -->
                        <ul id="dropdown_s4" class="dropdown-content">
                            <li><a href="{{ route('profile.edit') }}"><i class="ion-person"></i>My profile</a></li> 
                       
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="ion-power"></i>Log out</a></li> 
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    