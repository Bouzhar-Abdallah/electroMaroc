
    <link rel="stylesheet" href="<?= ROOT ?>assets/css/style.css">



    <header class="flex justify-between capitalize bg-cadet text-white">
        <!-- <img src="" alt="" srcset=""> -->
        <a href="#" class="block px-navbar-item py-navbar-item">logo</a>
        
        <!-- mobile menu -->
        <div class="block md:hidden z-50 fixed top-0 left-0 h-full w-[220px] bg-cadet shadow-xl">
            <ul class="font-semibold">
                <li><a href="<?= ROOT ?>" class="block px-navbar-item py-navbar-item transition-all hover:bg-cadeth">acceuil</a></li>
                <li><a href="" class="block px-navbar-item py-navbar-item transition-all hover:bg-cadeth">produits</a></li>
                <li><a href="" class="block px-navbar-item py-navbar-item transition-all hover:bg-cadeth">contact</a></li>
            </ul>
            <ul class=" items-center font-normal">
                <li class="">
                    <a href="" class="flex items-center px-navbar-item py-navbar-item transition-all hover:bg-cadeth">
                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        cart
                    </a>
                </li>
                <?php if (!empty($_SESSION['client'])){?>
                <li class="relative ">
                    <a href="" class="flex items-center justify-between px-navbar-item py-navbar-item transition-all hover:bg-cadeth">

                        mon compte
                        <svg class="h-5 w-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                        </svg>

                    </a>
                    <ul class="w-full bg-cadet py-2">
                        <li>
                            <a href="" class="flex items-center py-2 px-4 transition-all hover:bg-cadeth">
                                
                                bonjour <?php if (!empty($_SESSION['client'])) echo $_SESSION['client'];?>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center py-2 px-4 transition-all hover:bg-cadeth">
                                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                profile
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center py-2 px-4 transition-all hover:bg-cadeth">
                                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M2.625 6.75a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0A.75.75 0 018.25 6h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75zM2.625 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zM7.5 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12A.75.75 0 017.5 12zm-4.875 5.25a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                </svg>

                                orders
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center py-2 px-4 transition-all hover:bg-cadeth">
                                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>


                                wishlist
                            </a>
                        </li>
                        <li>
                            <a href="<?= ROOT ?>login/logout" class="flex items-center py-2 px-4 transition-all hover:bg-cadeth">
                                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>
                                logout
                            </a>
                        </li>
                    </ul>
                </li>
                <?php }?>
                <?php if (empty($_SESSION['client'])){?>
                    <li class="">
                    <a href="login" class="flex items-center px-navbar-item py-navbar-item transition-all hover:bg-cadeth">

                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                        </svg>


                        login
                    </a>
                </li>
                <?php }?>
                <?php if (empty($_SESSION['client'])){?>
                    
                    <li class="">
                        <a href="signup" class=" flex items-center px-navbar-item py-navbar-item bg-saffron text-cadet hover:bg-wsaffron transition-colors">
    
                            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                            </svg>
    
                            inscrivez vous
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
        <!-- mobile menu -->

        <nav class="hidden md:block">
            <ul class="grid grid-flow-col font-semibold">
                <li><a href="<?= ROOT ?>" class="block px-navbar-item py-navbar-item transition-all hover:bg-cadeth">acceuil</a></li>
                <li><a href="" class="block px-navbar-item py-navbar-item transition-all hover:bg-cadeth">produits</a></li>
                <li><a href="" class="block px-navbar-item py-navbar-item transition-all hover:bg-cadeth">contact</a></li>
            </ul>
        </nav>
        <nav class="hidden md:block">
            <ul class="grid grid-flow-col items-center font-normal">
                <li class="">
                    <a href="" class="flex items-center px-navbar-item py-navbar-item transition-all hover:bg-cadeth">
                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        cart
                    </a>
                </li>
                <?php if (!empty($_SESSION['client'])){?>
                <li class="relative mr-4">
                
                    <a href="" class="flex items-center px-navbar-item py-navbar-item transition-all hover:bg-cadeth">

                    mon compte
                        <svg class="h-5 w-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" />
                        </svg>

                    </a>
                    <ul class="absolute z-50  right-0 w-full bg-cadet py-2">
                        <li>
                            <a href="" class="flex items-center text-sm py-2 px-4 transition-all hover:bg-cadeth">
                                
                                bonjour <?php if (!empty($_SESSION['client'])) echo $_SESSION['client'];?>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center py-2 px-4 transition-all hover:bg-cadeth">
                                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                profil
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center py-2 px-4 transition-all hover:bg-cadeth">
                                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M2.625 6.75a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0A.75.75 0 018.25 6h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75zM2.625 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zM7.5 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12A.75.75 0 017.5 12zm-4.875 5.25a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                </svg>

                                orders
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center py-2 px-4 transition-all hover:bg-cadeth">
                                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>


                                wishlist
                            </a>
                        </li>
                        <li>
                            <a href="<?= ROOT ?>login/logout" class="flex items-center py-2 px-4 transition-all hover:bg-cadeth">
                                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>
                                logout
                            </a>
                        </li>
                    </ul>
                </li>
                <?php }?>
                <?php if (empty($_SESSION['client'])){?>
                    <li class="">
                    <a href="login" class="flex items-center px-navbar-item py-navbar-item transition-all hover:bg-cadeth">

                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                        </svg>


                        login
                    </a>
                </li>
                <?php }?>
                <?php if (empty($_SESSION['client'])){?>
                <li class="">
                    <a href="signup" class=" flex items-center px-navbar-item py-navbar-item bg-saffron text-cadet hover:bg-wsaffron transition-colors">

                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                        </svg>

                        inscrivez vous
                    </a>
                </li>
                <?php }?>
            </ul>
        </nav>
        <button class="block md:hidden px-navbar-item py-navbar-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

        </button>
    </header>

