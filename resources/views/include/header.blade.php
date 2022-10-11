@include('include.css-url')

<body id="body-pd">

    <header class="header shadow" id="header">
        <div class="header_toggle">
            <button type="button" class="btn btn-lg btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars" id="header-toggle"></i>
            </button>
            {{-- <button type="button" class="btn btn-lg btn-alt-secondary" data-toggle="layout"
                data-action="header_search_on">
                <i class="fa fa-fw fa-search"></i>
            </button> --}}
        </div>
        <style>
            .admin-drop:hover .dropdown-menu{
                display: block;
            }
        </style>
        <ul class="list-unstyled">
            <li class="dropdown nav-item admin-drop">
                <a class="nav-link" href="javascript:void(0)">Admin<i
                        class="fas fa-chevron-down fa-xs mx-2"></i></a>
                <ul class="dropdown-menu rounded" style="right: -20px">
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                            <span>Profile</span>
                            <i class="fa fa-fw fa-user"></i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                            <span>Inbox</span>
                            <i class="fa fa-fw fa-envelope-open"></i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>Settings</span>
                            <i class="fa fa-fw fa-wrench"></i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                            <span>Sign Out</span>
                            <i class="fa fa-fw fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <div class="l-navbar shadow" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <img src="{{ asset('assets/images/logo-banking.png') }}" alt="" class="img-fluid"
                        style="width: 15%">
                </a>
                <div class="nav_list">
                    <a href="{{ route('dashboard') }}" class="nav_link active">
                        <i class='fa fa-table nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="{{ route('listing') }}" class="nav_link">
                        <i class='fa fa-file nav_icon'></i>
                        <span class="nav_name">Add new listing</span>
                    </a>
                    {{-- <a href="#" class="nav_link">
                        <i class='fa fa-box nav_icon'></i>
                        <span class="nav_name">Messages</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='fa fa-bookmark nav_icon'></i>
                        <span class="nav_name">Bookmark</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='fa fa-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a> --}}
                </div>
            </div>
        </nav>
    </div>

    <style>

        :root {
            --header-height: 3rem;
            --nav-width: 200px;
            --first-color: #fff;
            --first-color-light: #a3aab2;
            --white-color: #F7F6FB;
            --hover-color: rgb(103, 103, 209);
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100
        }

        *,
        ::before,
        ::after {
            box-sizing: border-box
        }

        body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s;
            background: #f7f6fb;
        }

        a {
            text-decoration: none
        }

        .header {
            width: 100%;
            height: var(--header-height);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: var(--white-color);
            z-index: var(--z-fixed);
            transition: .5s
        }

        .header_toggle {
            color: var(--first-color);
            font-size: 1.5rem;
            cursor: pointer
        }

        .header_img {
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden
        }

        .header_img img {
            width: 40px
        }

        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed)
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden
        }

        .nav_logo,
        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem
        }

        .nav_logo {
            margin-bottom: 2rem
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--first-color-light)
        }

        .nav_logo-name {
            color: var(--first-color-light);
            font-weight: 700
        }

        .nav_link {
            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s
        }

        .nav_link:hover {
            color: var(--hover-color)
        }

        .nav_icon {
            font-size: 1.25rem
        }

        .show {
            left: 0
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem)
        }

        .active {
            color: rgb(37, 124, 66)
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }

        .height-100 {
            height: 100vh
        }

        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
            }

            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
            }

            .header_img {
                width: 40px;
                height: 40px
            }

            .header_img img {
                width: 45px
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0
            }

            .show {
                width: calc(var(--nav-width) - 200px)
            }

            .body-pd {
                padding-left: calc(var(--nav-width) - 200px)
            }
        }
    </style>
