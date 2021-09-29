<x-app-layout >
    <x-slot name="header">

    </x-slot>
    <head>
        <title>Homepage Biblioteca BIGIAVI</title>
        <style>
            .vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}
        </style>

    </head>
    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="vertical-menu">
                    <a href="" class="active">Home</a>
                    <a href="#"></a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    <a href="#">Link 4</a>

                </div>
            </div>
        </div>
    </body>
</x-app-layout>
