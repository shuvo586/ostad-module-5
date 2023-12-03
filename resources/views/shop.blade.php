@extends('layouts.master')

@section('title', 'Create collection')

@section('contents')
    <div class="om5c__card om5c_shop">
        <img class="om5c__logo" src="data:image/svg+xml,%3Csvg%20width%3D%2258%22%20height%3D%2258%22%20viewBox%3D%220%200%2058%2058%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%2212%22%20y%3D%229%22%20width%3D%2233%22%20height%3D%2237%22%20rx%3D%225%22%20fill%3D%22%23C3C1FB%22%2F%3E%0A%3Cpath%20d%3D%22M50.7742%2027.1149V37.9657C50.7742%2048.8166%2046.4483%2053.1667%2035.5733%2053.1667H22.5475C21.1459%2053.1667%2019.865%2053.0942%2018.6808%2052.9251%22%20stroke%3D%22%23292D32%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%0A%3Cpath%20d%3D%22M7.34662%2037.5067V27.1149%22%20stroke%3D%22%23292D32%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%0A%3Cpath%20d%3D%22M29.0726%2029C33.4951%2029%2036.7576%2025.3993%2036.3226%2020.9768L34.7033%204.83334H23.4176L21.7984%2020.9768C21.3634%2025.3993%2024.6501%2029%2029.0726%2029Z%22%20stroke%3D%22%23292D32%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%0A%3Cpath%20d%3D%22M44.2975%2029C49.1792%2029%2052.7558%2025.0366%2052.2725%2020.1791L51.5958%2013.5333C50.7258%207.24995%2048.3092%204.83334%2041.9775%204.83334H34.6067L36.2984%2021.7742C36.7334%2025.7617%2040.31%2029%2044.2975%2029Z%22%20stroke%3D%22%23292D32%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%0A%3Cpath%20d%3D%22M13.7024%2029C17.6899%2029%2021.2908%2025.7617%2021.6774%2021.7742L22.2092%2016.4335L23.3691%204.83334H15.9983C9.66665%204.83334%207.25003%207.24995%206.38003%2013.5333L5.70329%2020.1791C5.21996%2025.0366%208.82078%2029%2013.7024%2029Z%22%20stroke%3D%22%23292D32%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%0A%3Cpath%20d%3D%22M21.75%2045.9167C21.75%2047.7292%2021.2425%2049.4451%2020.3483%2050.8951C19.8891%2051.6685%2019.3333%2052.3692%2018.6808%2052.9251C18.6083%2053.0217%2018.5359%2053.0942%2018.4392%2053.1667C16.7475%2054.6892%2014.5242%2055.5833%2012.0834%2055.5833C9.13502%2055.5833%206.50078%2054.2541%204.76078%2052.1758C4.71245%2052.1033%204.64008%2052.055%204.59175%2051.9825C4.30175%2051.6442%204.0359%2051.2818%203.8184%2050.8951C2.92423%2049.4451%202.41669%2047.7292%202.41669%2045.9167C2.41669%2042.8717%203.81835%2040.1408%206.04169%2038.3767C6.45252%2038.0383%206.88747%2037.7484%207.34663%2037.5067C8.7483%2036.7092%2010.3675%2036.25%2012.0834%2036.25C14.5%2036.25%2016.675%2037.1199%2018.3666%2038.5941C18.6566%2038.8116%2018.9225%2039.0776%2019.1642%2039.3434C20.7592%2041.0834%2021.75%2043.3792%2021.75%2045.9167Z%22%20stroke%3D%22%23292D32%22%20stroke-width%3D%221.5%22%20stroke-miterlimit%3D%2210%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%0A%3Cpath%20d%3D%22M15.6842%2045.8683H8.48254%22%20stroke%3D%22%23292D32%22%20stroke-width%3D%221.5%22%20stroke-miterlimit%3D%2210%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%0A%3Cpath%20d%3D%22M12.0834%2042.34V49.5659%22%20stroke%3D%22%23292D32%22%20stroke-width%3D%221.5%22%20stroke-miterlimit%3D%2210%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%0A%3C%2Fsvg%3E%0A" alt="">
        <div class="om5c__heading">

            <h1> Shop ID: {{ $shopDomain ?? Auth::user()->id }}</h1>
            <p> Shop Name: {{ $shopDomain ?? Auth::user()->name }}</p>
        </div>
    </div>
@endsection
