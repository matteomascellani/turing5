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
                    <a href="/books">BOOKS</a>
                    <a href="/authors">AUTHORS</a>
                    <a href="/subscribers">SUBSCRIBERS</a>

                </div>
            </div>
        </div>
    </body>
</x-app-layout>
