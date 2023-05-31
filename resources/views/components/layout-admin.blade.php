<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polytech Nancy International</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
</head>

<body class="bg-gray-200 h-full">
    @include("nav")
    <div class="flex flex-row">
        <div class="bg-white p-4 m-6 rounded-lg ">
            <aside id="sidebar" class="w-72" aria-label="Sidebar">
                <div class="relative flex-1 flex flex-col rounded-lg bg-white pt-0">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <div class="flex-1 px-3 bg-white divide-y space-y-1">
                            <ul class="space-y-2 pb-2">
                                <li>
                                    <a href="/admin/accueil" id="accueil" class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-300 group">
                                        {{ $accueil ?? '' }}
                                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 -1.5 27 27" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m24.749 0h-22.498c-1.243 0-2.25 1.007-2.25 2.25v14.999c0 1.243 1.007 2.25 2.25 2.25h8.999l-.75 2.25h-3.376c-.621 0-1.125.504-1.125 1.125s.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125s-.504-1.125-1.125-1.125h-3.375l-.75-2.249h8.999c1.242 0 2.25-1.007 2.25-2.249v-15.001c0-1.243-1.007-2.25-2.25-2.25zm-.751 16.499h-20.999v-13.499h20.999z" />
                                        </svg>
                                        <span class="ml-3">Gestion page d'accueil</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/gestion/" id="gestion" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                        {{ $gestion ?? '' }}
                                        <svg id="gestion" class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">Gestion universités</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/articles" id="articles" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                        {{ $articles ?? '' }}
                                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="92px" height="92px" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve">
                                            <path id="XMLID_1960_" d="M76,2H16c-2.2,0-4,1.8-4,4v80c0,2.2,1.8,4,4,4h60c2.2,0,4-1.8,4-4V6C80,3.8,78.2,2,76,2z M72,82H20V10h52 V82z M28.5,65c0-2.2,1.8-4,4-4h27c2.2,0,4,1.8,4,4s-1.8,4-4,4h-27C30.3,69,28.5,67.2,28.5,65z M29.1,46c0-2.2,1.8-4,4-4h26.3, c2.2,0,4,1.8,4,4s-1.8,4-4,4H33.1C30.9,50,29.1,48.2,29.1,46z M29.1,27c0-2.2,1.8-4,4-4h26.3c2.2,0,4,1.8,4,4s-1.8,4-4,4H33.1, C30.9,31,29.1,29.2,29.1,27z" />
                                        </svg>
                                        <span class="ml-3 whitespace-nowrap">Éditer les articles</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/blogs" id="blogs" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                        {{ $blogs ?? '' }}
                                        <span class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" width="92px" height="92px" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve">
                                            .PDF
                                        </span>
                                        <span class="ml-3 whitespace-nowrap">Éditer les blogs</span>
                                    </a>
                                </li>
                                @if(session('isAdmin'))
                                <li>
                                    <a href="/admin/editfiche" id="editfiche" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                        {{ $editfiche ?? '' }}
                                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-3 whitespace-nowrap">Éditer la fiche de candidature</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/fiches" id="fiches" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                        {{ $fiches ?? '' }}
                                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-3 whitespace-nowrap">Fiches candidatures</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/fichiers" id="fichiers" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                        {{ $fichiers ?? '' }}
                                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 301.295 301.295" style="enable-background:new 0 0 301.295 301.295;" xml:space="preserve">
                                            <path d="M294.127,35.141H181.84c-1.87,0-3.666,0.73-5.004,2.036l-29.104,28.375H7.168C3.209,65.552,0,68.762,0,72.72v186.265, c0,3.926,3.267,7.169,7.169,7.169c0.007,0,0.013,0,0.019,0h50.975c0.009,0,0.017,0,0.026,0h235.938, c3.959,0,7.169-3.21,7.169-7.169V42.31C301.295,38.351,298.086,35.141,294.127,35.141z M286.958,251.817H75.482l14.101-14.099, c2.8-2.8,2.8-7.339,0-10.139c-2.8-2.799-7.338-2.8-10.138,0.001l-24.238,24.238H24.475l19.974-19.974c2.8-2.8,2.8-7.339,0-10.139, c-2.8-2.799-7.338-2.799-10.138,0l-19.974,19.974v-31.378l24.166-24.165c2.8-2.8,2.8-7.339,0-10.139, c-2.799-2.799-7.338-2.799-10.138,0l-14.028,14.028V79.889h272.621V251.817z M286.958,65.551H168.269l16.487-16.073h102.202, V65.551z" />

                                        </svg>

                                        <span class="ml-3 whitespace-nowrap">Fichiers étudiants</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/utilisateurs" id="utilisateurs" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                        {{ $utilisateurs ?? '' }}
                                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="ml-3 flex-1 whitespace-nowrap">Gestion Admins</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <div class="bg-white rounded-lg m-6 p-4 flex-grow">
            {{ $panel ?? '' }}
        </div>
    </div>
</body>
<footer class="">
    @include("footer")
</footer>